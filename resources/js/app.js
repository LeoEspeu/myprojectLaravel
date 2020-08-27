require('./bootstrap');

import 'cropperjs/dist/cropper.css';
import Cropper from 'cropperjs';

var cropper = null;

$( document ).ready(function() {
    genererCropper();
});

function genererCropper(){
    const image = document.getElementsByTagName('img')[0];
    cropper = new Cropper(image, {
        aspectRatio: 16 / 9,
        crop(event) {
            console.log(event.detail.x);
            console.log(event.detail.y);
            console.log(event.detail.width);
            console.log(event.detail.height);
            console.log(event.detail.rotate);
            console.log(event.detail.scaleX);
            console.log(event.detail.scaleY);

            var canvas = cropper.getCroppedCanvas();
            var url = canvas.toDataURL();

            var nouvelleImg = document.createElement("img");
            nouvelleImg.src = url;
            nouvelleImg.style.marginLeft = 'auto';
            nouvelleImg.style.marginRight = 'auto';
            nouvelleImg.style.marginTop = '10px';

            var divImgCrop = document.getElementById("img-cropp");
            divImgCrop.innerHTML = "";
            divImgCrop.append(nouvelleImg);
        },
    });
}

$('#fileToUpload').change(function () {

    var files   = document.querySelector('input[type=file]').files;

    function readAndPreview(file) {

        // Veillez à ce que `file.name` corresponde à nos critères d’extension
        if ( /\.(jpe?g|png|gif|svg)$/i.test(file.name) ) {
            var reader = new FileReader();

            reader.addEventListener("load", function () {
                var $img = $('img:first');

                $img.attr('src',this.result);
                $img.attr('title',file.name);

                cropper.destroy();
                genererCropper();

            }, false);

            reader.readAsDataURL(file);
        }

    }

    if (files) {
        [].forEach.call(files, readAndPreview);
    }

});