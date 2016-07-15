<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/repair.css">
    <link rel="stylesheet" href="../css/common_footer.css">
    <script src="../js/zepto.min.js"></script>
    <script src="../js/common.js"></script>
    <script src="../js/htl_first.js"></script>
</head>
<body>
    <div class="htl-enter">
        <header>
            <a href="index1.php"></a>
            <em>登入</em>
            <span class="htl-create">注册</span>
        </header>
        <!-- 主体 -->
        <form action="" class="htl-enterF">
            <div class="htl-enter-njudge"></div>
            <div class="htl-enter-bg">
                <div class="htl-enter-user clearfix">
                     <label for="htl-enter-username ">用户名</label>
                     <div class="htl-enterF-zj">
                         <input type="text" id="htl-enter-username" />
                     </div>
                </div>
                <div class="htl-enter-passw clearfix">
                    <label for="htl-enter-password">密码</label>
                    <div class="htl-enterF-zj">
                        <input type="password" placeholder="6-16位" id="htl-enter-password" />
                    </div>
                </div>
            </div>
            <div class="htl-enter-remb clearfix">
                <span></span>
                <em>记住密码</em>
            </div>
            <div class="htl-enter-pjudge"></div>
            <div class="htl-enter-btn">登录</div>
        </form>
        <?php 
            include 'common_footer.html';
        ?>
    </div>
    <script type="text/javascript" src="../js/event.js"></script>
    <script type="text/javascript" src="../js/touch.js"></script>
</body>
</html>