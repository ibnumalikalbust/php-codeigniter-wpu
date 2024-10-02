<?= $this->extend('layout/template'); ?>

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
				<?php if (session()->getFlashdata('message')) : ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?= session()->getFlashdata('message'); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-12 w-100 max-w-500-px mx-auto">
				<form action="<?= base_url('population'); ?>" method="get">
					<div class="input-group mb-3">
						<input type="text" name="keyword" class="form-control" placeholder="Mau cari siapa nih....?">
						<button type="submit" class="btn btn-outline-secondary">SEARCH</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<table class="table">
					<thead>
						<tr>
							<th scope="col" class="d-table-cell">ID</th>
							<th scope="col" class="d-table-cell">Name</th>
							<th scope="col" class="d-none d-sm-table-cell">Address</th>
							<th scope="col" class="d-none d-md-table-cell">Email</th>
							<th scope="col" class="d-none d-md-table-cell">Phone</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($populations as $population) : ?>
							<tr>
								<td class="align-middle d-table-cell">
									<span><?= $population['id']; ?></span>
								</td>
								<td class="align-middle d-table-cell">
									<span><?= $population['name']; ?></span>
								</td>
								<td class="align-middle d-none d-sm-table-cell">
									<span><?= $population['address']; ?></span>
								</td>
								<td class="align-middle d-none d-md-table-cell">
									<span><?= $population['email']; ?></span>
								</td>
								
								<td class="align-middle d-none d-md-table-cell">
									<span><?= $population['phone']; ?></span>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col d-flex justify-content-center align-content-center">
				<?= $pager->links('group', 'custom_one'); ?>
			</div>
		</div>
	</div>
</main>
<?php $this->endSection(); ?>