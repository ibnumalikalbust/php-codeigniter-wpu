<?= $this->extend('profile/template'); ?>

<?php $this->section('content'); ?>
<header class="my-3">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center"><?= $title; ?></h1>
			</div>
		</div>
	</div>
</header>
<main class="my-3">
	<div class="container">
		<div class="row">
			<div class="col">
				<p class="text-center">Hi, My Name Is <?= $author; ?></p>
			</div>
		</div>
	</div>
</main>
<?php $this->endSection(); ?>