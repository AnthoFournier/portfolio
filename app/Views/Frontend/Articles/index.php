<section class="vh-100">
	<div class="container">
		<h1 class="text-center">Mes articles</h1>
		<div class="row gy-4">
			<?php foreach ($articles as $article) : ?>
				<?php if ($article->getEnable()) : ?>
					<div class="col-md-4">
						<div class="card border-success">
							<div class="card-body">
								<h2 class="card-title"><?= htmlspecialchars($article->getTitle()); ?></h2>
								<p class="card-text"><?= strlen($article->getContent()) > 500 ? htmlspecialchars(substr($article->getContent(), 0, 500)) . "..." : htmlspecialchars($article->getContent()); ?></p>
								<em class="card-text text-muted"><?= htmlspecialchars($article->getAuthor()->getFullName()); ?></em>
								<em class="card-text text-muted"><?= htmlspecialchars($article->getCreatedAt()->format('Y-m-d')); ?></em>
								<a class="btn btn-primary" href="/articles/<?= $article->getSlug(); ?>">En savoir plus</a>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>