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
				<table class="table">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Image</th>
							<th scope="col">Title</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($comics as $comic) : ?>
							<tr>
								<td class="align-middle">
									<span><?= $comic['id']; ?></span>
								</td>
								<td class="align-middle">
									<img src="<?= base_url('/img/') . $comic['image']; ?>" alt="" class="h-100-px">
								</td>
								<td class="align-middle">
									<span><?= $comic['title']; ?></span>
								</td>
								<td class="align-middle">
									<a href="" class="btn btn-sm btn-primary py-1">detail</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>
<?php $this->endSection(); ?>