<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= isset($meta['title']) ? $meta['title'] : null ?> | Anthony Fournier</title>
	<?php foreach (isset($meta['js']) ? $meta['js'] : [] as $src) : ?>
		<script src="<?= $src; ?>" defer></script>
	<?php endforeach; ?>
	<?php foreach (isset($meta['css']) ? $meta['css'] : [] as $src) : ?>
		<link rel="stylesheet" href="<?= $src; ?>">
	<?php endforeach; ?>
	<link rel="stylesheet" href="assets/css/style.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
	<?php require_once 'Layout/header.php'; ?>
	<main>
		<?php require_once 'Layout/flash.php'; ?>
		<?= $content; ?>
	</main>
	<?php require_once 'Layout/footer.php'; ?>
	<script type="module" src="assets/js/app.js"></script>
</body>

</html>