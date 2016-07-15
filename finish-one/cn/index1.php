<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>小区助手</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/common_footer.css">
    <link rel="stylesheet" href="../css/repair.css">
    <script src="../js/zepto.min.js"></script>
    <script src="../js/common.js"></script>
</head>
<body>
    <div class="htl-index">
        <header>
            <em>小区助手</em>
            <a href=""></a>
        </header>
        <!-- 轮播图 -->
        <div class="htl-index-play">
            <img src="../images/demo/play1.jpg" alt="" />
        </div>
        <!-- 消息通知 -->
        <div class="htl-index-notice clearfix">
            <a href="zfx-tenement.php" class="htl-index-noticepic">
                <span>1</span>
            </a>
            <a href="zfx-tenement.php">
                <div class="htl-index-noticetext">
                    您有1条未读通知
                </div>
            </a>
        </div>
       <!-- 社区活动、物业服务等 -->
        <div class="htl-index-fourpar clearfix">
            <a href="zfx-community1.php" class="htl-index-active">
                <div></div>
                <span>社区活动</span>
            </a>
            <a href="complaint.php" class="htl-index-serve">
                <div></div>
                <span>物业客服</span>
            </a>
            <a href="zfx-favorable.php" class="htl-index-yh">
                <div></div>
                <span>今日优惠</span>
            </a>
            <a href="zfx-favorable.php" class="htl-index-jr">
                <div></div>
                <span>今日优惠</span>
            </a>
        </div>
        <!-- 社区头条、物业服务、生活小助手 -->
        <div class="htl-index-threepar clearfix">
            <a href="zfx-community.php" class="htl-index-sqtit">
                <div>社区头条</div>
                <p>热门头条 一手掌握</p>
            </a>
            <a href="myproperty.php" class="htl-index-wyfw">
                <div>物业服务</div>
                <p>业主权益 一站式解决</p>
            </a>
            <a href="zfx-assistant.php" class="htl-index-life">
                <div>生活小助手</div>
                <p>生活所需 触手可及</p>
            </a>
        </div>
        <!-- 大转盘 -->
        <a href="" class="htl-inedex-biground">
            <div>大转盘</div>
            <dl class="clearfix">
                <dt>
                    <img src="../images/demo/round.png" alt="" />
                </dt>
                <dd>
                    最低折扣！最大优惠！特价爆品！
                    更多惊喜优惠等您拿！
                </dd>
            </dl>
        </a>
        <?php 
            include 'common_footer.html';
        ?>
    </div>
    <script type="text/javascript" src="../js/event.js"></script>
    <script type="text/javascript" src="../js/touch.js"></script>
</body>
</html>