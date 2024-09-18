<nav class="navbar navbar-expand-sm bg-body-tertiary">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url('comic'); ?>">COMIC</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?= base_url('comic/index'); ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('comic/about'); ?>">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('comic/contact'); ?>">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>