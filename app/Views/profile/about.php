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
	<div class="container max-w-600-px">
		<div class="row">
			<div class="col">
				<table class="table table-primary table-striped-columns w-100">
					<tr>
						<td class="w-100-px">Name</td>
						<td><?= $person['name']; ?></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><?= $person['address']; ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?= $person['email']; ?></td>
					</tr>
					<tr>
						<td>Phone</td>
						<td><?= $person['phone']; ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</main>
<footer class="my-3"></footer>
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<a href="<?= base_url('profile/about'); ?>" class="btn btn-sm btn-primary">refresh</a>
			</div>
		</div>
	</div>
</footer>
<?php $this->endSection(); ?>