<?= $this->extend('comic/template'); ?>

<?= $this->section('content'); ?>
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
	<div class="container max-w-500-px">
		<div class="row">
			<div class="col">
				<form action="<?= base_url('/comic/insertpost'); ?>" method="post" autocomplete="off">
					<?= csrf_field(); ?>
					<div class="row mb-3">
						<label for="title" class="col-sm-2 col-form-label">Title</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="title" name="title" required autofocus>
						</div>
					</div>
					<div class="row mb-3">
						<label for="author" class="col-sm-2 col-form-label">Author</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="author" name="author" required>
						</div>
					</div>
					<div class="row mb-3">
						<label for="publisher" class="col-sm-2 col-form-label">Publisher</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="publisher" name="publisher" required>
						</div>
					</div>
					<div class="row mb-3">
						<label for="image" class="col-sm-2 col-form-label">Image</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="image" name="image" required>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">INSERT</button>
				</form>
			</div>
		</div>
	</div>
</main>
<?= $this->endSection('content'); ?>