<?php

namespace App\Controllers\Backend;

use App\Core\BaseController;
use App\Core\Route;
use App\Form\ArticleForm;
use App\Models\Article;

class ArticleController extends BaseController
{
	public function __construct(
		private Article $article = new Article
	) {
	}

	#[Route('/admin/articles', 'admin.articles.index', ['GET'])]
	public function index(): void
	{
		// CSRF token
		$_SESSION['token'] = bin2hex(random_bytes(80));
		$this->render('Backend/Articles/index.php', [
			'articles' => $this->article->findAll(),
			'meta' => [
				'title' => 'Administration des articles',
				'js' => [
					'/assets/js/switchArticle.js'
				]
			]
		]);
	}

	#[Route('/admin/articles/create', 'admin.articles.create', ['GET', 'POST'])]
	public function create(): void
	{
		$form = new ArticleForm('/admin/articles/create');

		if ($form->validate($_POST, ['title', 'content'])) {
			$title = trim(strip_tags($_POST['title']));
			$content = trim($_POST['content']);
			$enable = isset($_POST['enable']) ? 1 : 0;

			if (!$this->article->findOneBy(['title' => $title])) {
				$this->article
					->setTitle($title)
					->setContent($content)
					->setEnable($enable)
					->setUserId($_SESSION['user']['id'])
					->setCreatedAt(new \DateTime())
					->create();

				$_SESSION['messages']['success'] = 'L\'article a bien été créé.';
				$this->redirect('/admin/articles');
			} else {
				$_SESSION['messages']['danger'] = 'Un article avec ce titre existe déjà.';
			}
		} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$_SESSION['messages']['danger'] = 'Veuillez remplir les champs obligatoires.';
		}

		$this->render('Backend/Articles/create.php', [
			'form' => $form->createView(),
			'meta' => [
				'title' => 'Création d\'un article',
			]
		]);
	}

	#[Route('/admin/articles/([0-9]+)/edit', 'admin.articles.edit', ['GET', 'POST'])]
	public function edit(int $id): void
	{
		$article = $this->article->find($id);
		if (!$article) {
			$_SESSION['messages']['danger'] = 'Cet article n\'existe pas';
			$this->redirect('/admin/articles');
		}
		$form = new ArticleForm($_SERVER['REQUEST_URI'], $article);

		if ($form->validate($_POST, ['title', 'content'])) {
			$title = trim(strip_tags($_POST['title']));
			$content = trim($_POST['content']);
			$enable = isset($_POST['enable']) ? 1 : 0;
			$userId = $_POST['user'];

			$article
				->setTitle($title)
				->setContent($content)
				->setEnable($enable)
				->setUserId($userId)
				->update();
			$_SESSION['messages']['success'] = "Article modifié avec succès";
			$this->redirect('/admin/articles');
		} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$_SESSION['messages']['danger'] = "Le formulaire contient des erreurs";
		}
		$this->render('Backend/Articles/edit.php', [
			'form' => $form->createView(),
			'article' => $article,
			'meta' => [
				'title' => "Modification de l'article {$article->getId()}"
			]
		]);
	}

	//TODO: voir syntaxe avec hash_equals plus sécurisé et optimisé
	#[Route('/admin/articles/delete', 'admin.articles.delete', ['POST'])]
	public function delete(): void
	{
		if ($_POST['token'] !== $_SESSION['token']) {
			$_SESSION['messages']['danger'] = 'Token CSRF invalide';
			$this->redirect('/admin/articles');
		} else {
			$article = $this->article->find($_POST['id']);
			if ($article) {
				$article->delete();
				$_SESSION['messages']['success'] = 'L\'article a bien été supprimé.';
				$this->redirect('/admin/articles');
			}
		}
	}

	#[Route('/admin/articles/([0-9]+)/switch', 'admin.articles.switch', ['GET'])]
	public function switch(int $id): void
	{
		header('Content-Type: application/json');
		$article = $this->article->find($id);

		if (!$article) {
			http_response_code(404);
			echo json_encode([
				'status' => 404,
				'message' => 'Article non trouvé'
			]);
			exit;
		}

		$article
			->setEnable(!$article->getEnable())
			->update();

		http_response_code(201);
		echo json_encode([
			'status' => 201,
			'message' => 'Visibility changed',
			'enable' => (bool) $article->getEnable(),
		]);
	}
}
