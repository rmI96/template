<!DOCTYPE html>
<html lang="en">
<head>
    <? include '_top.php';?>
    <style>
        .map-wrapper{height: 400px;}
        .info-box{background-color: #000; box-shadow: 0 1px 5px rgba(0,0,0,.15); text-align: center; padding: 15px 30px;}
        .info-box h5{color: #fff; font-size: 14px; line-height: 22px; margin-bottom: 5px;}
        .info-box p{font-size: 13px; line-height: 22px; color: rgba(255,255,255,.7);}
    </style>
    <title>Template</title>
</head>
<body>
    <? include 'links.php';?>
    
    <div id="content-block">
        <a href="http://htmlpreview.github.io/?https://github.com/googlemaps/v3-utility-library/blob/master/infobox/docs/reference.html" target="_blank">http://htmlpreview.github.io/?https://github.com/googlemaps/v3-utility-library/blob/master/infobox/docs/reference.html</a><br/><br/>
        <div id="map-canvas-1" class="map-wrapper" data-lat="49.822385" data-lng="24.023855" data-zoom="15"></div>
        <a class="marker" data-rel="map-canvas-1" data-lat="49.822385" data-lng="24.023855" data-image="img/marker.png" data-string="<h5>Головний офіс</h5><p>Україна, 79018, м. Львів, вул. Вулиця, 555</p>"></a>
        <br/>
        <div id="map-canvas-2" class="map-wrapper" data-lat="49.822385" data-lng="24.023855" data-zoom="15"></div>
        <a class="marker" data-rel="map-canvas-2" data-lat="49.822385" data-lng="24.023855" data-image="img/marker.png" data-string="<h5>Головний офіс</h5><p>Україна, 79018, м. Львів, вул. Вулиця, 555</p>"></a>
    </div>

    <? include '_bottom.php';?>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/infobox.js"></script>
    <script src="js/map.js"></script>
</body>
</html>