<?php

namespace App\Controllers\Frontend;

use App\Core\BaseController;
use App\Core\Route;
use App\Models\Article;

class ArticleController extends BaseController
{
	public function __construct(
		private Article $article = new Article
	) {
	}
	#[Route('/articles', 'articles.index', ['GET'])]
	public function index(): void
	{
		$this->render('Frontend/Articles/index.php', [
			'articles' => (new Article)->findAll(),
			'meta' => [
				'title' => 'Blog',
				'description' => 'Découvrez les derniers articles de notre blog.',
			]
		]);
	}

	#[Route('/articles/([a-z0-9-]+)', 'articles.show', ['GET'])]
	public function show(string $slug): void
	{
		//TODO: Créer une méthode findBySlug dans le modèle Article afin d'optimiser la recherche Attention il faudra modifié le reste du code car findBySlug retournera un seul artticle et non un tableau
		$articles = $this->article->findBy(['slug' => $slug]);

		// Assurez-vous qu'un article est retourné et extrayez-le du tableau
		$article = $articles ? $articles[0] : null;

		if ($article) {
			$this->render('Frontend/Articles/show.php', [
				'article' => $article,
				'meta' => [
					'title' => $article->getTitle(),
					'description' => $article->getContent(),
				]
			]);
		} else {
			$this->redirect('/articles');
		}
	}
}
