<!DOCTYPE html>
<html lang="en">
<head>
    <? include '_top.php';?>
    <style>
        .swiper-slide-thumb-active{background: red!important;}
    </style>
    <title>Template</title>
</head>
<body>
    <? include 'links.php';?>
    <div id="content-block">
        
        <div class="swiper-entry">
            <div class="swiper-container" 
                data-options='{"slidesPerView":2, "breakpoints": {"1370": {"slidesPerView": 4},"1199": {"slidesPerView": 3},"991": {"slidesPerView": 2},"767": {"slidesPerView": 1}}}'
            >
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 1</div>
                    <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 2</div>
                    <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 3</div>
                    <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 4</div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <br/>
        <div class="swiper-entry">
            <div class="swiper-container" style="margin: 0 50px;"
                data-options='{"slidesPerView":2, "breakpoints": {"1370": {"slidesPerView": 4},"1199": {"slidesPerView": 3},"991": {"slidesPerView": 2},"767": {"slidesPerView": 1}}}'
            >
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 1</div>
                    <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 2</div>
                    <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 3</div>
                    <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 4</div>
                </div>
                <div class="swiper-pagination swiper-pagination-relative"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <br/>
        <div class="swiper-thumbs">
            <div class="swiper-entry">
                <div class="swiper-container swiper-thumbs-top"
                    data-options='{"watchSlidesVisibility": true}'
                >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 1</div>
                        <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 2</div>
                        <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 3</div>
                        <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 4</div>
                    </div>
                </div>
            </div>
            <div class="swiper-entry">
                <div class="swiper-container swiper-thumbs-bottom"
                    data-options='{"slidesPerView":2, "spaceBetween":20, "watchSlidesVisibility": true, "watchSlidesProgress": true}'
                >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="height: 80px; background: #EEE;">Slide 1</div>
                        <div class="swiper-slide" style="height: 80px; background: #EEE;">Slide 2</div>
                        <div class="swiper-slide" style="height: 80px; background: #EEE;">Slide 3</div>
                        <div class="swiper-slide" style="height: 80px; background: #EEE;">Slide 4</div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="swiper-control">
            <div class="swiper-entry">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 1</div>
                        <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 2</div>
                        <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 3</div>
                        <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 4</div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <br/>
            <div class="swiper-entry">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 1</div>
                        <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 2</div>
                        <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 3</div>
                        <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 4</div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>

    <? include '_bottom.php';?>
</body>
</html>