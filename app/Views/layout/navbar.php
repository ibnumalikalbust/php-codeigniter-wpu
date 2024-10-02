<nav class="navbar navbar-expand-sm bg-body-tertiary">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url('home'); ?>">CI4</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?= base_url('profile'); ?>">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?= base_url('comic'); ?>">Comic</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?= base_url('population'); ?>">Population</a>
				</li>
			</ul>
		</div>
	</div>
</nav>