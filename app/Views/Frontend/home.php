<!-- section header bg-image avec bootstrap -->

<section class="bd-masthead mb-3 p-5 bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="display-1 text-white fw-bold">Bienvenue sur mon portfolio</h1>
				<p class="lead text-white">Je suis Anthony Fournier, développeur web junior. Je suis passionné par le développement web et je suis à la recherche d'une entreprise pour un stage en développement web.</p>
				<a href="#" class="btn btn-outline-light fw-bold">En savoir plus</a>
			</div>
			<div class="col-md-6">
				<img src="assets/img/header.png" alt="Développeur web" class="img-fluid">
			</div>
		</div>
	</div>
</section>

<!-- section skills -->
<section id="skills">
	<div class="container mb-5">
		<h2 class="text-center mb-3 fw-bold">Skills</h2>
		<div class="row align-items-center">
			<div class="col-lg-3">
				<div class="bg-dark rounded-1 ps-2 pt-2">
					<img src="assets/img/Anthony-Fournier.png" alt="Dev Junior Anthony Fournier" class="img-fluid rounded-1 m-2">
				</div>
			</div>
			<div class="col-lg-9">
				<!-- Compétences -->
				<h3 class="fw-bold">Mes compétences techniques</h3>
				<p>Je maîtrise un éventail de technologies nécessaires pour le développement web moderne:</p>
				<div class="row align-items-stretch">
					<!-- HTML -->
					<div class="col-md-6">
						<div class="card mb-3">
							<div class="card-body bg-primary-subtle">
								<h4 class="card-title fw-bold text-center">HTML <i class="fa-brands fa-html5"></i></h4>
								<div class="progress">
									<div class="progress-bar bg-info fw-bold" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
								</div>
							</div>
						</div>
					</div>
					<!-- CSS -->
					<div class="col-md-6">
						<div class="card mb-3">
							<div class="card-body bg-primary-subtle">
								<h4 class="card-title fw-bold text-center">CSS <i class="fa-brands fa-css3-alt"></i></h4>
								<div class="progress">
									<div id="skillCss" class="progress-bar bg-info fw-bold" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
								</div>
							</div>
						</div>
					</div>
					<!-- JS -->
					<div class="col-md-6">
						<div class="card mb-3">
							<div class="card-body bg-primary-subtle">
								<h4 class="card-title fw-bold text-center">JavaScript <i class="fa-brands fa-square-js"></i></h4>
								<div class="progress">
									<div id="skillJs" class="progress-bar bg-info fw-bold" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
								</div>
							</div>
						</div>
					</div>
					<!-- PHP -->
					<div class="col-md-6">
						<div class="card mb-3">
							<div class="card-body bg-primary-subtle">
								<h4 class="card-title fw-bold text-center">PHP <i class="fa-brands fa-php"></i></h4>
								<div class="progress">
									<div id="skillPhp" class="progress-bar bg-info fw-bold" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
								</div>
							</div>
						</div>
					</div>
					<!-- SF -->
					<div class="col-md-6">
						<div class="card mb-3">
							<div class="card-body bg-primary-subtle">
								<h4 class="card-title fw-bold text-center">Symfony <i class="fa-brands fa-symfony"></i></h4>
								<div class="progress">
									<div id="skillSf" class="progress-bar bg-info fw-bold" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">IN PROGRESS</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Vue -->
					<div class="col-md-6">
						<div class="card mb-3">
							<div class="card-body bg-primary-subtle">
								<h4 class="card-title fw-bold text-center">Vue.js <i class="fa-brands fa-vuejs"></i></h4>
								<div class="progress">
									<div id="skillVue" class="progress-bar bg-info fw-bold" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">IN PROGRESS</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- section ils m'ont fait confiance -->
<section id="trust" class="bg-primary-subtle mb-4">
	<div class="container pb-3 pt-3">
		<h2 class="text-center mb-2 fw-bold">Ils m'ont fait confiance</h2>
		<div class="row d-flex justify-content-between align-items-center">
			<div class="col d-flex justify-content-center px-lg-5">
				<a href="https://www.braseroloc.fr/" class="d-inline-flex">
					<img src="assets/img/BRASEROLOC.png" alt="site internet pour louer un brasero dans la loire" class="img-fluid" style="max-width: 90%; max-height: 200px;">
				</a>
			</div>
			<div class="col d-flex justify-content-center px-lg-5">
				<a href="https://www.lc-therapiebienetre.fr/" class="d-inline-flex">
					<img src="assets/img/LC_Therapie.png" alt="Médecine douce technique emmett sur Roanne" class="img-fluid" style="max-width: 90%; max-height: 150px;"> <!-- Contrôlez la taille avec max-width et max-height -->
				</a>
			</div>
		</div>
	</div>
</section>


<!-- section choix des outils VS-Code, Github, Docker et expliquer pourquoi j'ai décider d'utiliser ses outils-->
<section id="tools">
	<div class="container mb-4">
		<h2 class="text-center mb-5 fw-bold">Choix des outils</h2>
		<!-- Utiliser g-8 pour un espacement global entre les cards et justify-content-between pour espacer les colonnes -->
		<div class="row g-8 justify-content-between">
			<!-- Chaque card dans sa propre colonne -->
			<div class="col-md-6 col-xl-4 d-flex align-items-stretch">
				<div class="card shadow-soft-2 h-100">
					<div class="d-flex justify-content-center">
						<img src="assets/img/vscode.svg" alt="VsCode" class="card-img-top w-25">
					</div>
					<div class="card-body d-flex flex-column p-8">
						<h3 class="fw-bold">Pourquoi j'ai choisi VS-Code</h3>
						<p class="card-text">Visual Studio Code est un éditeur de code source développé par Microsoft. Il est gratuit, open-source et multiplateforme. Il est très populaire auprès des développeurs web pour sa légèreté, sa rapidité et ses nombreuses extensions.</p>
						<a href="https://code.visualstudio.com/" class="btn btn-outline-primary fw-bold mt-auto">En savoir plus</a>
					</div>
				</div>
			</div>
			<!-- Répéter la structure pour chaque card -->
			<div class="col-md-6 col-xl-4 d-flex align-items-stretch">
				<div class="card shadow-soft-2 h-100">
					<div class="d-flex justify-content-center">
						<img src="assets/img/github.svg" alt="Github" class="card-img-top w-25">
					</div>
					<div class="card-body d-flex flex-column p-8">
						<h3 class="fw-bold">Pourquoi j'ai choisi Github ?</h3>
						<p class="card-text">Github est une plateforme de développement collaboratif de logiciels. C'est un outil incontournable pour les développeurs web pour héberger, partager et collaborer sur des projets open-source.</p>
						<a href="https://github.com/" class="btn btn-outline-primary fw-bold mt-auto">En savoir plus</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-4 d-flex align-items-stretch">
				<div class="card shadow-soft-2 h-100">
					<div class="d-flex justify-content-center">
						<img src="assets/img/docker.webp" alt="Docker" class="card-img-top w-25">
					</div>
					<div class="card-body d-flex flex-column p-8">
						<h3 class="fw-bold">Pourquoi j'ai choisi Docker ?</h3>
						<p class="card-text">Docker est une plateforme open-source qui permet de concevoir, tester et déployer des applications dans des conteneurs logiciels. C'est un outil très utile pour les développeurs web pour automatiser le déploiement d'applications.</p>
						<a href="https://www.docker.com/" class="btn btn-outline-primary fw-bold mt-auto">En savoir plus</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- mes compétences SEO & Formation -->
<section id="SEO" class="bg-dark mb-4">
	<div class="container pb-3 pt-3">
		<h2 class="text-center mb-3 fw-bold text-white">Le SEO "Serach Engine Optimisation" C'est quoi ?</h2>
		<p class="text-white text-center">Le SEO est un processus continu et évolutif, en effet les moteurs de recherche mettent régulièrement à jour leurs algorithmes pour offrir les résultats les plus pertinents aux utilisateurs. Comprendre et appliquer les principes de base du SEO est essentiel pour tout propriétaire de site web souhaitant augmenter sa visibilité en ligne et attirer plus de visiteurs ciblés. le SEO se divise généralement en deux grandes catégories : le SEO on-page et le SEO off-page. Le SEO on-page concerne toutes les optimisations que vous pouvez appliquer directement sur votre site, telles que la qualité et l'organisation du contenu, l'utilisation de mots-clés pertinents, la structure des URL, la rapidité de chargement des pages, et l'optimisation des balises meta. Le SEO off-page, quant à lui, se concentre sur les stratégies externes pour améliorer la réputation et l'autorité de votre site, notamment à travers la construction de liens (backlinks) provenant d'autres sites web de qualité. Le SEO est un processus continu et évolutif, car les moteurs de recherche mettent régulièrement à jour leurs algorithmes pour offrir les résultats les plus pertinents aux utilisateurs. Comprendre et appliquer les principes de base du SEO est essentiel pour tout propriétaire de site web souhaitant augmenter sa visibilité en ligne et attirer plus de visiteurs ciblés.
		</p>
		<div class="row align-items-center">
			<div class="col-lg-6">

				<img src="assets/img/SEOcompetences.svg" alt="Search Engine Optimisation" class="img-fluid rounded-1 m-2">

			</div>
			<div class="col-lg-6">
				<!-- Compétences -->
				<h3 class="fw-bold text-white">Mes compétences en SEO</h3>
				<p class="text-white">Je maîtrise un éventail de techniques nécessaires pour le référencement naturel:</p>
				<div class="row align-items-stretch">
					<!-- Audit SEO -->
					<div class="col-md-6">
						<div class="card mb-3">
							<div class="card-body bg-primary-subtle">
								<h4 class="card-title
								fw-bold text-center">Audit SEO <i class="fa-solid fa-search"></i></h4>
								<div class="progress">
									<div class="progress-bar bg-info fw-bold" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Stratégie sémantique -->
					<div class="col-md-6">
						<div class="card mb-3">
							<div class="card-body bg-primary-subtle">
								<h4 class="card-title
								fw-bold text-center">Sémantique SEO <i class="fa-solid fa-brain"></i></h4>
								<div class="progress">
									<div class="progress-bar bg-info fw-bold" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
								</div>
							</div>
						</div>
					</div>
					<!-- OnPage -->
					<div class="col-md-6">
						<div class="card mb-3">
							<div class="card-body bg-primary-subtle">
								<h4 class="card-title
								fw-bold text-center">On Page <i class="fa-solid fa-file-alt"></i></h4>
								<div class="progress">
									<div class="progress-bar bg-info fw-bold" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
								</div>
							</div>
						</div>
					</div>
					<!-- OffPage -->
					<div class="col-md-6">
						<div class="card mb-3">
							<div class="card-body bg-primary-subtle">
								<h4 class="card-title
								fw-bold text-center">Off Page <i class="fa-solid fa-link"></i></h4>
								<div class="progress">
									<div class="progress-bar bg-info fw-bold" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Réseaux PBN -->
					<div class="col-md-6">
						<div class="card mb-3">
							<div class="card-body bg-primary-subtle">
								<h4 class="card-title
								fw-bold text-center">Réseaux PBN <i class="fa-solid fa-network"></i></h4>
								<div class="progress">
									<div class="progress-bar bg-info fw-bold" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Indexation -->
					<div class="col-md-6">
						<div class="card mb-3">
							<div class="card-body bg-primary-subtle">
								<h4 class="card-title
								fw-bold text-center">Indexation <i class="fa-solid fa-check"></i></h4>
								<div class="progress">
									<div class="progress-bar bg-info fw-bold" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

<!-- app mété avec appel api -->
<section id="app-meteo" class="text-center">
	<!-- btn pour les requetes -->
	<h2 class="fw-bold">Application météo</h2>
	<p class="text-center">Cliqué sur le marker de votre ville afin de découvrir la météo en temps réel</p>
	<div class="container text-center">
		<div id="map" class="mt-2 shadow p-3 mb-5 bg-body-tertiary rounded-4"></div>
	</div>
	<a href="#" class="btn btn-outline-primary fw-bold mt-auto">Documentation app météo</a>
</section>

<!-- section Audit SEO -->
<!-- <section id="audit-seo">
	<div class="container">
		<div class="row">
			<div>
				<h2>Audit SEO</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quidem deleniti, in natus, molestiae assumenda dolorem laboriosam sit voluptatum error eos necessitatibus odio nisi blanditiis!</p>
				<a href="#" class="btn-blue">En savoir plus</a>
			</div>
			<div>
				<i>insertion image</i>
			</div>
		</div>
	</div>
</section> -->

<!-- section prendre un rendez-vous ou me recruter -->
<!-- <section id="contact">
	<div class="container-flex">
		<form action="" method="POST">
			<h2>Prendre un rendez-vous ou me recruter</h2>
			<div class="form-group">
				<label for="name">Nom</label>
				<input type="text" name="name" id="name" placeholder="Votre nom">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" placeholder="Votre email">
			</div>
			<div class="form-group">
				<label for="message">Message</label>
				<textarea name="message" id="message" placeholder="Votre message"></textarea>
			</div>
		</form>
	</div>
</section> -->

<script src="assets/js/bundle.js" type="module"></script>
<script src="assets/js/app-meteo.js" type="module"></script>