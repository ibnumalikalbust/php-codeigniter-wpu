<?= $this->extend('layout/template'); ?>

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
	<div class="container max-w-600-px">
		<div class="row">
			<div class="col">
				<p></p>
			</div>
		</div>
		<div class="row">
			<div>
				<form action="<?= base_url('/comic/insertpost'); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
					<?= csrf_field(); ?>
					<div class="row mb-3">
						<label for="title" class="col-sm-2 col-form-label">Title</label>
						<div class="col-sm-10">
							<input type="text" class="form-control <?= isset($postError['title']) ? 'is-invalid' : ''; ?>" id="title" name="title" value="<?= isset($postInput['title']) ? $postInput['title'] : ''; ?>">
							<div class="invalid-feedback">
								<span><?= isset($postError['title']) ? $postError['title'] : ''; ?></span>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label for="author" class="col-sm-2 col-form-label">Author</label>
						<div class="col-sm-10">
							<input type="text" class="form-control <?= isset($postError['author']) ? 'is-invalid' : ''; ?>" id="author" name="author" value="<?= isset($postInput['author']) ? $postInput['author'] : ''; ?>">
							<div class="invalid-feedback">
								<span><?= isset($postError['author']) ? $postError['author'] : ''; ?></span>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label for="publisher" class="col-sm-2 col-form-label">Publisher</label>
						<div class="col-sm-10">
							<input type="text" class="form-control <?= isset($postError['publisher']) ? 'is-invalid' : ''; ?>" id="publisher" name="publisher" value="<?= isset($postInput['publisher']) ? $postInput['publisher'] : ''; ?>">
							<div class="invalid-feedback">
								<span><?= isset($postError['publisher']) ? $postError['publisher'] : ''; ?></span>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label for="image" class="col-sm-2 col-form-label">Image</label>
						<div class="col-sm-2">
							<img src="<?= base_url('/img/comic-default.jpg'); ?>" id="img-preview" class="img-thumbnail">
						</div>
						<div class="col-sm-8">
							<input type="file" name="image" id="image" class="form-control <?= isset($postError['image']) ? 'is-invalid' : ''; ?>" onchange="changePreviewImage()">
							<div class="invalid-feedback">
								<span><?= isset($postError['image']) ? $postError['image'] : ''; ?></span>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col">
							<button type="submit" class="btn btn-primary">INSERT</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
<?= $this->endSection('content'); ?>