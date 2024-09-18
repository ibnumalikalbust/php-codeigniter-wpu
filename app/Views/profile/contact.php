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
			<div class="col-3">
				<a href="<?= $contact['facebook']; ?>">
					<i class="bi bi-facebook fs-3-0-rem"></i>
				</a>
			</div>
			<div class="col-3">
				<a href="<?= $contact['instagram']; ?>">
					<i class="bi bi-instagram fs-3-0-rem"></i>
				</a>
			</div>
			<div class="col-3">
				<a href="<?= $contact['twitter']; ?>">
					<i class="bi bi-twitter fs-3-0-rem"></i>
				</a>
			</div>
			<div class="col-3">
				<a href="<?= $contact['tiktok']; ?>">
					<i class="bi bi-tiktok fs-3-0-rem"></i>
				</a>
			</div>
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