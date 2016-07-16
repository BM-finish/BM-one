<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/repair.css">
    <link rel="stylesheet" href="../css/common_footer.css">
    <script src="../js/zepto.min.js"></script>
    <script src="../js/common.js"></script>
</head>
<body>
    <div class="htl-repair">
        <header>
            <a href="repair.php"></a>
            <em>小区物业</em>
            <span>报修</span>
        </header>
        <!-- 主体 -->
        <div class="htl-repMas-main">
            <h1>报修信息</h1>
            <div class="htl-repMas-goods">
                <div>
                    <span>报修产品:</span>
                    <em>洗衣机</em>
                </div>
                <div>
                    <span>要求服务日期:</span>
                    <em>2014-03-25</em>
                    <strong>10:00-12:00</strong>
                </div>
                <div class="htl-repMas-des">
                    <span>要求描述:</span>
                    <em>洗衣机甩干桶不转</em>
                </div>
            </div>
            <div class="htl-repMas-user">
                <div>
                    <span>用户姓名:</span>
                    <em>笑笑</em>
                </div>
                <div>
                    <span>手机号码:</span>
                    <em>13681312547</em>
                </div>
                <div class="htl-repMas-place">
                    <span>详细地址:</span>
                    <em>A单元40</em>
                </div>
            </div>
        </div>
        <!-- 未处理 -->
        <div class="htl-repMas-untre">
            <span>物业回复：</span>
            <em>检修师傅请假未处理</em>
        </div>
        <!-- 弹窗 -->
        <div class="htl-repMas-tc">
            恭喜您的表单提交成功
        </div>
        <?php 
            include 'common_footer.html';
        ?>
    </div>
    <script type="text/javascript" src="../js/event.js"></script>
    <script type="text/javascript" src="../js/touch.js"></script>
    <script type="text/javascript" src="../js/fx.js"></script>
    <script type="text/javascript" src="../js/fx_methods.js"></script>
    <script type="text/javascript" src="../js/repair_message.js"></script>
</body>
</html>