<!DOCTYPE html>
<html lang="en">
<head>
    <? include '_top.php';?>
    <style>
        .tab-nav{position: relative;}
        .tab-title{display: none; padding: 10px; background: #AAA; cursor: pointer;}
        .tab-toggle div{cursor: pointer; display: inline-block; padding: 10px;}
        .tab-toggle div.active{background: #EEE;}
        .tab{display: none;}
        .tab:nth-child(2){display: block;}
        @media (max-width: 767px) {
            .tab-title{display: block;}
            .tab-toggle{display: none; position: absolute; left: 0; top: 100%; width: 100%; background: #FFF;}
            .tab-nav.active .tab-toggle{display: block;}
            .tab-toggle div{display: block;}
        }
    </style>
    <title>Template</title>
</head>
<body>
    <? include 'links.php';?>
    <div id="content-block">
        <div class="tabs">
            <div class="tab-nav">
                <div class="tab-title">
                    Lorem ipsum
                </div>
                <div class="tab-toggle">
                    <div class="active">Lorem ipsum</div>
                    <div>dolor sit amet</div>
                    <div>consectetur adipiscing elit</div>
                    <div>Proin non luctus leo</div>
                </div>
            </div>
            <div class="tab">
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non luctus leo. Cras semper nunc sed luctus
                        sagittis. Nam interdum mi in lectus ultrices, at ullamcorper justo sagittis. Fusce ac metus euismod, tincidunt
                        nisi eget, feugiat nulla. In accumsan magna vel ipsum laoreet, id pellentesque elit viverra. Donec facilisis
                        urna vitae leo tincidunt, blandit dictum ligula feugiat. Donec congue, massa eget laoreet mattis, ligula risus
                        posuere dolor, vel porttitor odio purus ac odio. Curabitur sit amet turpis risus. Duis a risus a dolor placerat
                        vehicula.</p>
                </div>
            </div>
            <div class="tab">
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non luctus leo. Cras semper nunc sed luctus
                        sagittis. Nam interdum mi in lectus ultrices, at ullamcorper justo sagittis. Fusce ac metus euismod, tincidunt
                        nisi eget, feugiat nulla. In accumsan magna vel ipsum laoreet, id pellentesque elit viverra. Donec facilisis
                        urna vitae leo tincidunt, blandit dictum ligula feugiat. Donec congue, massa eget laoreet mattis, ligula risus
                        posuere dolor, vel porttitor odio purus ac odio. Curabitur sit amet turpis risus. Duis a risus a dolor placerat
                        vehicula.</p>
                    <p>Donec vehicula erat finibus rutrum imperdiet. Proin volutpat est at porta aliquam. In tincidunt quam sed vehicula
                        lacinia. Proin sollicitudin, nulla id varius consequat, sapien dolor imperdiet risus, a consequat mauris magna
                        sit amet orci. Curabitur a lacus vitae erat molestie laoreet. Maecenas sed risus eu justo aliquam varius vitae
                        in est. Phasellus finibus turpis elit, vitae sollicitudin est luctus nec. Aliquam consectetur turpis magna, eu
                        pellentesque sapien bibendum eu. Ut magna lacus, viverra vitae sem et, tempor faucibus erat. Maecenas finibus
                        consectetur quam. Sed ut iaculis ligula. Etiam fringilla congue vestibulum. In imperdiet lacus cursus justo
                        ultricies, ac porttitor metus tempor. Integer bibendum lectus at justo pulvinar molestie. Phasellus malesuada
                        ipsum sed dolor vestibulum, eu aliquam nibh eleifend. Vivamus id feugiat lacus.</p>
                </div>
            </div>
            <div class="tab">
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non luctus leo. Cras semper nunc sed luctus
                        sagittis. Nam interdum mi in lectus ultrices, at ullamcorper justo sagittis. Fusce ac metus euismod, tincidunt
                        nisi eget, feugiat nulla. In accumsan magna vel ipsum laoreet, id pellentesque elit viverra. Donec facilisis
                        urna vitae leo tincidunt, blandit dictum ligula feugiat. Donec congue, massa eget laoreet mattis, ligula risus
                        posuere dolor, vel porttitor odio purus ac odio. Curabitur sit amet turpis risus. Duis a risus a dolor placerat
                        vehicula.</p>
                </div>
            </div>
            <div class="tab">
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non luctus leo. Cras semper nunc sed luctus
                        sagittis. Nam interdum mi in lectus ultrices, at ullamcorper justo sagittis. Fusce ac metus euismod, tincidunt
                        nisi eget, feugiat nulla. In accumsan magna vel ipsum laoreet, id pellentesque elit viverra. Donec facilisis
                        urna vitae leo tincidunt, blandit dictum ligula feugiat. Donec congue, massa eget laoreet mattis, ligula risus
                        posuere dolor, vel porttitor odio purus ac odio. Curabitur sit amet turpis risus. Duis a risus a dolor placerat
                        vehicula.</p>
                    <p>Donec vehicula erat finibus rutrum imperdiet. Proin volutpat est at porta aliquam. In tincidunt quam sed vehicula
                        lacinia. Proin sollicitudin, nulla id varius consequat, sapien dolor imperdiet risus, a consequat mauris magna
                        sit amet orci. Curabitur a lacus vitae erat molestie laoreet. Maecenas sed risus eu justo aliquam varius vitae
                        in est. Phasellus finibus turpis elit, vitae sollicitudin est luctus nec. Aliquam consectetur turpis magna, eu
                        pellentesque sapien bibendum eu. Ut magna lacus, viverra vitae sem et, tempor faucibus erat. Maecenas finibus
                        consectetur quam. Sed ut iaculis ligula. Etiam fringilla congue vestibulum. In imperdiet lacus cursus justo
                        ultricies, ac porttitor metus tempor. Integer bibendum lectus at justo pulvinar molestie. Phasellus malesuada
                        ipsum sed dolor vestibulum, eu aliquam nibh eleifend. Vivamus id feugiat lacus.</p>
                </div>
            </div>
        </div>
    </div>

    <? include '_bottom.php';?>
    <script>
        jQuery(function($){
            $('.tab-title').on('click', function() {
                $(this).parent().toggleClass('active');
            });
            $('.tab-toggle div').on('click', function() {
                var tab = $(this).closest('.tabs').find('.tab');
                var i = $(this).index();
                $(this).addClass('active').siblings().removeClass('active');
                tab.eq(i).siblings('.tab:visible').fadeOut(function() {
                    tab.eq(i).fadeIn();
                });
                $(this).closest('.tab-nav').removeClass('active').find('.tab-title').text($(this).text());
            });
        });
    </script>
</body>
</html>