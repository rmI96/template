<!DOCTYPE html>
<html lang="en">
<head>
    <? include '_top.php';?>
    <link href="sumoselect/sumoselect.css" rel="stylesheet" type="text/css" />
    <title>Template</title>
</head>
<body>
    <? include 'links.php';?>
    <div id="content-block">
        <a href="http://hemantnegi.github.io/jquery.sumoselect/sumoselect_demo.html" target="_blank">http://hemantnegi.github.io/jquery.sumoselect/sumoselect_demo.html</a><br/>
        <a href="http://hemantnegi.github.io/jquery.sumoselect/" target="_blank">http://hemantnegi.github.io/jquery.sumoselect/</a><br/><br/>
        <select>
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
            <option>Option 4</option>
        </select>
        <div style="height: 400px;"></div>
    </div>

    <? include '_bottom.php';?>
    <script src="sumoselect/jquery.sumoselect.min.js"></script>
    <script>
        jQuery(function($){
            $('select').SumoSelect();
        });
    </script>
</body>
</html>