<?= $this->extend('profile/template'); ?>

<?php $this->section('content'); ?>
<header class="my-3">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="text-center">Contact Us</h1>
			</div>
		</div>
	</div>
</header>
<main>
	<div class="container">
		<div class="row text-center">
			<?php foreach ($contact as $key => $value) : ?>
				<div class="col-3">
					<a href="<?= $value; ?>">
						<i class="bi bi-<?= $key; ?> fs-3-0-rem"></i>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</main>
<footer>
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<?= d($contact); ?>
			</div>
		</div>
	</div>
</footer>
<?php $this->endSection(); ?>