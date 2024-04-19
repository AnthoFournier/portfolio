<section class="vh-100">
	<div class="container">
		<h1 class="text-center">
			<?= $article->getTitle(); ?>
		</h1>
		<div class="card">
			<div class="card-body">
				<p class="card-text"><?= $article->getContent(); ?></p>
			</div>
		</div>
	</div>
</section>