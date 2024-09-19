<?= $this->extend('comic/template'); ?>

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
<main>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card max-w-500-px mx-auto">
					<div class="row g-0">
						<div class="col-4">
							<img src="<?= base_url('/img/') . $comic['image']; ?>" class="img-fluid rounded-start" alt="<?= $comic['slug']; ?>">
						</div>
						<div class="col-8">
							<div class="card-body">
								<h5 class="my-3"><?= $comic['title']; ?></h5>
								<p class="my-3">
									<span class="d-block">Author : <?= $comic['author']; ?></span>
									<span class="d-block">Publisher : <?= $comic['publisher']; ?></span>
									<span class="d-block">Created : <?= $comic['created_at']; ?></span>
									<span class="d-block">Updated : <?= $comic['updated_at']; ?></span>
									<span class="d-block">Deteled : <?= $comic['deleted_at']; ?></span>
								</p>
								<p class="my-3">
									<a class="btn btn-sm btn-warning" href="<?= base_url('/comic/update/') . $comic['slug']; ?>">update</a>
									<a class="btn btn-sm btn-danger" href="<?= base_url('/comic/delete/') . $comic['slug']; ?>">delete</a>
								</p>
								<p class="my-3">
									<a href="<?= base_url('/comic'); ?>">see all list of comic</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php $this->endSection(); ?>