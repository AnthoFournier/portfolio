<section class="vh-100">
	<div class="container">
		<h1 class="text-center mt-2">Administrations des catégories</h1><a href="/admin/category/create" class="btn btn-primary my-2">Créer une catégorie</a>
		<div class="row gy-4">
			<?php foreach ($categories as $categorie) : ?>
				<div class="col-md-4">
					<div class="card border-<?= $categorie->getEnable() ? 'success' : 'danger' ?>">
						<div class="card-body">
							<h2 class="card-title"><?= $categorie->getTitle(); ?></h2>
							<em class="card-text text-muted"><?= $categorie->getCreatedAt()->format('Y-m-d'); ?></em>
							<div class="form-check form-switch">
								<input class="form-check-input" type="checkbox" id="switch-<?= $categorie->getId(); ?>" <?= $categorie->getEnable() ? 'checked' : null; ?> data-switch-category-id="<?= $categorie->getId(); ?>" />
								<label class="form-check-label text-<?= $categorie->getEnable() ? 'success' : 'danger'; ?>" for="flexSwitchCheckDefault"><?= $categorie->getEnable() ? 'Actif' : 'Innactif'; ?></label>
							</div>
							<div class="mt-2 d-flex justify-content-between align-items-center flex-wrap">
								<a href="/admin/category/<?= $categorie->getId(); ?>/edit" class="btn btn-warning">Modifier</a>
								<form action="/admin/category/delete" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')">
									<input type="hidden" name="id" value="<?= $categorie->getId(); ?>">
									<input type="hidden" name="token" value="<?= $_SESSION['token']; ?>">
									<button class="btn btn-danger">Supprimer</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>