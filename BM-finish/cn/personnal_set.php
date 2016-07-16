<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>个人中心</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/repair.css">
    <link rel="stylesheet" href="../css/htl_second.css">
    <link rel="stylesheet" href="../css/common_footer.css">
    <script src="../js/zepto.min.js"></script>
    <script src="../js/common.js"></script>
    <script src="../js/htl_first.js"></script>
</head>
<body>
    <div class="htl-perset">
        <?php 
            include 'person_head.html';
         ?>
        <!-- 个人信息设置 -->
        <ul class="htl-perset-mass">
            <li>个人信息</li>
            <li>
                <span>性别</span>
                <em>女</em>
            </li>
            <li>
                <span>手机</span>
                <em>123456</em>
            </li>
            <li>
                <span>邮箱</span>
                <em>1234567@128.com</em>
            </li>
            <li>
                <span>地址</span>
                <em>四惠大厦6001</em>
            </li>
            <a href="">             
                <li class="htl-perset-change">修改</li>
            </a>
        </ul>
    </div>
    <script type="text/javascript" src="../js/event.js"></script>
    <script type="text/javascript" src="../js/touch.js"></script>
</body>
</html>