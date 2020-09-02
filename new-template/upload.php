<!DOCTYPE html>
<html lang="en">
<head>
    <? include '_top.php';?>
    <style>
        .upload-wrapper{position: relative; background: #EEE; cursor: pointer;}
        .upload-wrapper input{display: none;}
        .upload-wrapper .file-name{padding: 10px 40px 10px 10px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;}
        .upload-wrapper .remove-file{position: absolute; right: 0; top: 0; padding: 10px; display: none;}
        .upload-wrapper.active .remove-file{display: block;}
        .upload-wrapper .remove-file:before{content: "\02715"}
    </style>
    <title>Template</title>
</head>
<body>
    <? include 'links.php';?>
    <div id="content-block">
        <div class="upload-wrapper" data-placeholder="Файл не вибраний">
            <div class="file-name">Файл не вибраний</div>
            <input type="file" />
            <div class="remove-file"></div>
        </div>
    </div>

    <? include '_bottom.php';?>
    <script>
        jQuery(function($) {
            $('.upload-wrapper .file-name').on('click', function() {
                $(this).siblings('input').click();
            });
            $('.upload-wrapper input').on('change', function () {
                var fileName = $(this).val().substring($(this).val().lastIndexOf("\\") + 1);
                if (!fileName) {
                    $(this).siblings('.remove-file').click();
                } else {
                    $(this).parent().addClass('active');
                    $(this).siblings('.file-name').text(fileName);
                }
            });
            $('.remove-file').on('click', function() {
                $(this).parent().removeClass('active');
                $(this).siblings('.file-name').text($(this).parent().data('placeholder'));
                $(this).siblings('input').val('');
            });
        });
    </script>
</body>
</html>