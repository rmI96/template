<!DOCTYPE html>
<html lang="en">
<head>
    <? include '_top.php';?>
    <link href="lightbox/simplelightbox.css" rel="stylesheet" type="text/css" />
    <title>Template</title>
</head>
<body>
    <? include 'links.php';?>
    <div id="content-block">
        <a href="https://simplelightbox.com/" target="_blank">https://simplelightbox.com/</a><br/><br/>
        <div class="lightbox-wrapper">
            <a class="lightbox" href="lightbox/image1.jpg" style="display: block; width: 400px; height: 400px; background: url(lightbox/image1.jpg); background-size: cover;"></a>
            <a class="lightbox" href="lightbox/image2.jpg"></a>
            <a class="lightbox" href="lightbox/image3.jpg"></a>
            <a class="lightbox" href="lightbox/image4.jpg"></a>
            <a class="lightbox" href="lightbox/image5.jpg"></a>
            <a class="lightbox" href="lightbox/image6.jpg"></a>
        </div>
        <br/>
        <div class="lightbox-wrapper">
            <a class="lightbox" href="lightbox/image7.jpg" style="display: block; width: 400px; height: 400px; background: url(lightbox/image7.jpg); background-size: cover;"></a>
            <a class="lightbox" href="lightbox/image8.jpg"></a>
            <a class="lightbox" href="lightbox/image9.jpg"></a>
            <a class="lightbox" href="lightbox/image10.jpg"></a>
            <a class="lightbox" href="lightbox/image11.jpg"></a>
            <a class="lightbox" href="lightbox/image12.jpg"></a>
        </div>
    </div>

    <? include '_bottom.php';?>
    <script src="lightbox/simple-lightbox.min.js"></script>
    <script>
        jQuery(function($){
            var lightBoxOptions = {
                disableScroll: false,
                captionSelector: 'self',
                closeText: '<span class="btn btn-close"></span>',
                alertErrorMessage: 'Картинку не знайдено. Наступна картинка буде завантажена для перегляду.',
                history: false,
                widthRatio: 1,
                heightRatio: 1
            },
            lightboxSelector = $('.lightbox-wrapper'),
            lightboxLength = lightboxSelector.length,
            lightbox = [];
            for(var i = 0; i < lightboxLength; i++){
                lightbox[i] = $(lightboxSelector[i]).find('.lightbox').simpleLightbox(lightBoxOptions);
            }
            console.log(lightbox);
        });
    </script>
</body>
</html>