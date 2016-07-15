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
            <a href=""></a>
            <em>小区物业</em>
            <span>报修</span>
        </header>
        <!-- 主体 -->
        <div class="htlRepair-main">
            <p class="htl-rep-ts">
                尊敬的用户:您好!请您协助填写一下的各项信息,
                在您完成提交后我们将及时安排处理,谢谢!
            </p>
            <div class="htl-rep-tit">报修产品信息</div>
            <form action="" class="htl-rep-message clearfix">
                <div class="htl-rep-goodspar clearfix">
                    <label for="htl-rep-goods" class="htl-rep-gLab">
                        <b>报修产品</b>
                        <i>*</i>
                    </label>
                    <div>                       
                        <input type="text" id="htl-rep-goods" />
                    </div>
                </div>
                <div class="htl-rep-datepar clearfix">
                    <span class="htl-rep-dLab">
                        <b>要求服务日期</b>
                        <i>*</i>
                    </span>
                    <div class="htl-rep-date"></div>
                </div>
                <div class="htl-rep-date-hour"></div>
                <div class="htl-rep-serve">要求服务描述</div>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <div class="htl-rep-fBtn clearfix">
                    <input type="submit" />
                    <span>取消</span>
                </div>
            </form>
        </div>
        <?php 
            include 'common_footer.html';
        ?>
    </div>
    <script type="text/javascript" src="../js/event.js"></script>
    <script type="text/javascript" src="../js/touch.js"></script>
</body>
</html>