<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <title>意见投诉</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css" />
    <link rel="stylesheet" type="text/css" href="../css/common_footer.css" />
    <link rel="stylesheet" type="text/css" href="../css/cyr-one.css" />
    <script type="text/javascript" src="../js/zepto.min.js"></script>
    <script type="text/javascript" src="../js/common.js"></script>
    <script type="text/javascript" src="../js/touch.js"></script>
</head>
<body>
    <div class="cyr-wrap">
        <header class="cyr-top">
            <a class="cyr-top-return" href=""></a>
            <h2>意见投诉</h2>
        </header>
        <form class="cyr-yjts-form" action="">
            <p class="cyr-yjts-title">欢迎您是要xx物业投诉意见。您可以对我们的工作提出意见和建议，也可以向我们咨询和投诉！
                <a class="cyr-yjts-tel" href="tel:123456789"></a>
            </p>
            <div class="cyr-yjts-detail clearfix">
                <h2>类别</h2>
                <p class="cyr-yjts-show">请选择投诉类别</p>
                <ul>
                    <li>卫生</li>
                    <li>邻里</li>
                    <li>态度</li>
                    <li>其他</li>
                </ul>
                <textarea name="" id="cyr-yjts-content" placeholder="我的意见投诉建议"></textarea>
                <div class="cyr-yjts-submit-outer">
                    <input class="cyr-yjts-submit" type="submit" />
                </div>  
            </div>
        </form>   
        <?php
            include("common_footer.html");
        ?>
    </div>
    <script type="text/javascript" src="../js/js-one.js"></script>
</body>
</html>