<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>注册</title>
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
    <div class="htl-regis">
        <header>
            <a href="enter.php"></a>
            <em>注册</em>
        </header>
        <!-- 主体 -->
        <form action="" class="htl-regisF">
            <div class="htl-regis-njudge"></div>
            <div class="htl-regis-bg">
                <!-- 用户名 -->
                <div class="htl-regis-user clearfix">
                     <label for="htl-regis-username ">用户名</label>
                     <div class="htl-regisF-zj">
                         <input type="text" id="htl-regis-username" name="username" />
                     </div>
                </div>
                <!-- 性别 -->
                <div class="htl-regis-sex clearfix">
                    <span>性别</span>
                    <em class="htl-man-sel">
                        <b></b>
                    </em>
                    <span class="htl-man">男</span>
                    <em class="htl-woman-sel">
                        <b></b>
                    </em>
                    <span class="htl-woman">女</span>
                </div>
                <!-- 密码 -->
                <div class="htl-regis-passw clearfix">
                    <label for="htl-regis-password">密码</label>
                    <div class="htl-regisF-zj">
                        <input type="password" placeholder="6-16位" id="htl-regis-password" name="password" />
                    </div>
                </div>
            </div>  
            <div class="htl-regis-pjudge"></div>        
            <div class="htl-regis-remb clearfix">
                <span></span>
                <em>记住密码</em>
            </div>
            <div class="htl-regis-agree clearfix">
                <span></span>
                <em>我已经同意协议</em>
            </div>
            <div class="htl-regis-btn">注册</div>
        </form>
        <div class="cyr-register-succeed">
            <input type="button" value="确定" />
        </div>
        <?php 
            include 'common_footer.html';
        ?>
    </div>
    <script type="text/javascript" src="../js/event.js"></script>
    <script type="text/javascript" src="../js/touch.js"></script>
</body>
</html>