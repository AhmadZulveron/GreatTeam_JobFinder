const input = document.getElementById('upload-file');
const preview = document.getElementById('file-preview');
const defaultImage = document.getElementById('upload');

const previewPhoto = () => {
    const file = input.files[0];
    if (file) {
        const fileReader = new FileReader();
        fileReader.onload = function (event) {
            preview.src = event.target.result;
            defaultImage.style.display = 'none';
        };
        fileReader.readAsDataURL(file);
    }
};

input.addEventListener('change', previewPhoto);

