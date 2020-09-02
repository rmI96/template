<!DOCTYPE html>
<html lang="en">
<head>
    <? include '_top.php';?>
    <title>Template</title>
</head>
<body>
    <? include 'links.php';?>
    <div id="content-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    Primary<br/><br/>
                    <button class="btn btn-sm btn-primary">Button</button><br/><br/>
                    <button class="btn btn-md btn-primary">Button</button><br/><br/>
                    <button class="btn btn-lg btn-primary">Button</button><br/><br/>
                </div>
                <div class="col-sm-3">
                    Secondary<br/><br/>
                    <button class="btn btn-sm btn-secondary">Button</button><br/><br/>
                    <button class="btn btn-md btn-secondary">Button</button><br/><br/>
                    <button class="btn btn-lg btn-secondary">Button</button><br/><br/>
                </div>
                <div class="col-sm-3">
                    Optional<br/><br/>
                    <button class="btn btn-sm btn-optional">Button</button><br/><br/>
                    <button class="btn btn-md btn-optional">Button</button><br/><br/>
                    <button class="btn btn-lg btn-optional">Button</button><br/><br/>
                </div>
            </div>
            <div class="spacer-xs"></div>
            <button class="btn btn-md btn-primary btn-block">Button</button><br />
            <div class="spacer-xs"></div>
            <button class="btn btn-close"></button>
        </div>
    </div>

    <? include '_bottom.php';?>
</body>
</html>