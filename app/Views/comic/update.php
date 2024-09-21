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
				<p></p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<form action="<?= base_url('/comic/updatepost/') . $comic['slug']; ?>" method="post" autocomplete="off" enctype="multipart/form-data">
					<?= csrf_field(); ?>
					<div class="row mb-3">
						<label for="title" class="col-sm-2 col-form-label">Title</label>
						<div class="col-sm-10">
							<input type="text" class="form-control <?= isset($postError['title']) ? 'is-invalid' : ''; ?>" id="title" name="title" value="<?= isset($postInput['title']) ? $postInput['title'] : $comic['title']; ?>">
							<div class="invalid-feedback">
								<span><?= isset($postError['title']) ? $postError['title'] : ''; ?></span>
							</div>
						</div>
					</div>
					<div class="row mb-3 d-none">
						<label for="slug" class="col-sm-2 col-form-label">Slug</label>
						<div class="col-sm-10">
							<input type="hidden" class="form-control <?= isset($postError['title']) ? 'is-invalid' : ''; ?>" id="slug" name="slug" value="<?= isset($postInput['slug']) ? $postInput['slug'] : $comic['slug']; ?>">
							<div class="invalid-feedback">
								<span><?= isset($postError['title']) ? $postError['title'] : ''; ?></span>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label for="author" class="col-sm-2 col-form-label">Author</label>
						<div class="col-sm-10">
							<input type="text" class="form-control <?= isset($postError['author']) ? 'is-invalid' : ''; ?>" id="author" name="author" value="<?= isset($postInput['author']) ? $postInput['author'] : $comic['author']; ?>">
							<div class="invalid-feedback">
								<span><?= isset($postError['author']) ? $postError['author'] : ''; ?></span>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label for="publisher" class="col-sm-2 col-form-label">Publisher</label>
						<div class="col-sm-10">
							<input type="text" class="form-control <?= isset($postError['publisher']) ? 'is-invalid' : ''; ?>" id="publisher" name="publisher" value="<?= isset($postInput['publisher']) ? $postInput['publisher'] : $comic['publisher']; ?>">
							<div class="invalid-feedback">
								<span><?= isset($postError['publisher']) ? $postError['publisher'] : ''; ?></span>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label for="image" class="col-sm-2 col-form-label">Image</label>
						<div class="col-sm-2">
							<img src="<?= base_url('/img/') . $comic['image']; ?>" id="img-preview" class="img-thumbnail">
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