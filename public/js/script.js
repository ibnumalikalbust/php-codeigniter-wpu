function changePreviewImage() {
	const imageInput = document.getElementById('image');
	const imagePreview = document.getElementById('img-preview');
	const imageFile = new FileReader();
	imageFile.readAsDataURL(imageInput.files[0]);
	imageFile.onload = function(e) {
		imagePreview.src = e.target.result;
	}
}
