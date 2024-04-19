<header class="bg-dark">
	<nav class="container navbar navbar-expand-lg"> <!-- Couleur personnalisée -->
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img class="nav-logo-hover" width="60" src="/assets/img/logoAnthonyFournierWhite.svg" alt="Logo"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse m-2" id="navbarContent">
				<ul class="navbar-nav me-auto mb-4 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active text-white fw-bold" aria-current="page" href="#">Skills</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white fw-bold" href="#">Projects</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white fw-bold" href="#">Me recruter</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white fw-bold" href="/articles">Blog</a>
					</li>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-white" href="https://github.com/AnthoFournier" target="_blank">
							<i class="fa-brands fa-github"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="https://www.linkedin.com/in/anthony-fournier-130643170/" target="_blank">
							<i class="fa-brands fa-linkedin"></i>
						</a>
					</li>
					<!-- btn dropdown -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
							<i class="fa-solid fa-gear"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#" id="lightMode"><i class="fa-solid fa-sun m-2"></i></i>Light</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="#" id="darkMode"><i class="fa-solid fa-moon m-2"></i>Dark</a></li>
						</ul>
					</li>
				</ul>
				<!-- end dropdown -->
				<ul class="navbar-nav">
					<!-- Voir comment insérer ou rédiriger pour les users qui n'ont pas de ROLE ADMIND sur une application SPORT & SANTE avec un programme établie par l'utilisateur des courbes de progression une partie repas avec la liste de nouriture le programme des repas des idées de recettetc...  -->
					<?php if (!empty($_SESSION['user'])) : ?>
						<?php if (in_array('ROLE_ADMIN', $_SESSION['user']['roles'])) : ?>
							<div class="dropdown me-2">
								<button class="btn btn-outline-light fw-bold dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Admin
								</button>
								<div class="dropdown-menu" aria-labelledby="triggerId">
									<a class="dropdown-item" href="/admin/users">Gestionnaire de users</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="/admin/articles">Gestionnaire d'articles</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="/admin/category">Gestionnaire catégories</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="/admin/articles/create">Créer votre article</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="/admin/category/create">Créer votre catégorie</a>
								</div>
							</div>
						<?php endif; ?>
						<li class="nav-item">
							<a href="/logout" class="btn btn-outline-danger fw-bold">Déconnexion</a>
						</li>
					<?php else : ?>
						<li class="nav-item">
							<a href="/login" class="btn btn-outline-light fw-bold">Connexion</a>
						</li>
						<li class="nav-item">
							<a href="/register" class="btn btn-outline-light fw-bold ms-2">Inscription</a>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>
</header>