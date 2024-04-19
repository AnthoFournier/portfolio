<?php

namespace App\Controllers\Backend;

use App\Core\BaseController;
use App\Core\Route;
use App\Form\CategoryForm;
use App\Models\Category;

class CategoryController extends BaseController
{
	public function __construct(
		private Category $category = new Category
	) {
	}
	#[Route('/admin/category', 'admin.category.index', ['GET'])]
	public function index(): void
	{
		$_SESSION['token'] = bin2hex(random_bytes(60));
		$this->render('Backend/Category/index.php', [
			'categories' => $this->category->findAll(),
			'meta' => [
				'title' => 'Administration des catégories',
				'js' => [
					'/assets/js/switchCategory.js'
				]
			]
		]);
	}

	#[Route('/admin/category/create', 'admin.category.create', ['GET', 'POST'])]
	public function create(): void
	{
		$form = new CategoryForm('/admin/category/create');

		if ($form->validate($_POST, ['title'])) {
			$title = trim(strip_tags($_POST['title']));
			$enable = isset($_POST['enable']) ? 1 : 0;

			if (!$this->category->findOneBy(['title' => $title])) {
				$this->category
					->setTitle($title)
					->setEnable($enable)
					->setCreatedAt(new \DateTime())
					->create();

				$_SESSION['messages']['success'] = 'La catégorie a bien été créée.';
				$this->redirect('/admin/category');
			} else {
				$_SESSION['messages']['danger'] = 'Une catégorie avec ce titre existe déjà.';
			}
		} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$_SESSION['messages']['danger'] = 'Veuillez remplir les champs obligatoires.';
		}
		$this->render('Backend/Category/create.php', [
			'form' => $form->createView(),
			'meta' => [
				'title' => 'Créer une catégorie',
			]
		]);
	}

	#[Route('/admin/category/([0-9]+)/edit', 'admin.category.edit', ['GET', 'POST'])]
	public function edit(int $id): void
	{
		$category = $this->category->find($id);
		if (!$category) {
			$_SESSION['messages']['danger'] = 'La catégorie n\'existe pas.';
			$this->redirect('/admin/category');
		}
		$form = new CategoryForm($_SERVER['REQUEST_URI'], $category);

		if ($form->validate($_POST, ['title'])) {
			$title = trim(strip_tags($_POST['title']));
			$enable = isset($_POST['enable']) ? 1 : 0;

			$category
				->setTitle($title)
				->setEnable($enable)
				->setUpdatedAt(new \DateTime())
				->update();
			$_SESSION['messages']['success'] = 'La catégorie a bien été modifiée.';
			$this->redirect('/admin/category');
		} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$_SESSION['messages']['danger'] = 'Veuillez remplir les champs obligatoires.';
		}
		$this->render('Backend/Category/edit.php', [
			'form' => $form->createView(),
			'category' => $category,
			'meta' => [
				'title' => "Modification de la catégorie {$category->getId()}",
			]
		]);
	}

	#[Route('/admin/category/delete', 'admin.category.delete', ['POST'])]
	public function delete(): void
	{
		if ($_POST['token'] !== $_SESSION['token']) {
			$_SESSION['message']['danger'] = 'token CSRF invalide';
			$this->redirect('/admin/category');
		} else {
			$category = $this->category->find($_POST['id']);
			if ($category) {
				$category->delete();
				$_SESSION['messages']['danger'] = 'La catégorie a bien été supprimé.';
				$this->redirect('/admin/category');
			}
		}
	}

	#[Route('/admin/category/([0-9]+)/switch', 'admin.category.switch', ['GET'])]
	public function switch(int $id): void
	{
		header('Content-Type: application/json');
		$category = $this->category->find($id);

		if (!$category) {
			http_response_code(404);
			echo json_encode([
				'status' => 404,
				'message' => 'Cat non trouvé',
			]);
			exit;
		}

		$category
			->setEnable(!$category->getEnable())
			->update();

		http_response_code(201);
		echo json_encode([
			'status' => 'Visibility changed',
			'enable' => (bool) $category->getEnable(),
		]);
	}
}
