<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>修改密码</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/repair.css">
    <link rel="stylesheet" href="../css/common_footer.css">
    <script src="../js/zepto.min.js"></script>
    <script src="../js/common.js"></script>
    <script src="../js/htl_first.js"></script>
    <script src="../js/htl_back.js"></script>
</head>
<body>
    <div class="htl-changew">
        <header>
            <a class="htl-fav-a"></a>
            <em>修改密码</em>
            <span class="htl-changew-bc">保存</span>
        </header>
        <!-- 主体 -->
        <form action="" class="htl-changewF">
            <div class="htl-chageF-old clearfix">
                <label for="oldpass">旧密码</label>
                <div class="htl-changeF-zj">
                    <input type="password" id="oldpass" />
                </div>
            </div>
            <div class="htl-chageF-new clearfix">
                <label for="newpass">新密码</label>
                <div class="htl-changeF-zj">
                    <input type="password" id="newpass" />
                </div>
            </div>
            <div class="htl-chageF-comf clearfix">
                <label for="comfpass">确认密码</label>
                <div class="htl-changeF-zj">
                    <input type="password" id="comfpass" />
                </div>
            </div>
        </form>
        <div>
            <div class="htl-changeF-oldcue">密码错误!</div>
            <div class="htl-changeF-newcue">
                以字母开头，长度在6~16之间，只能包含字符、数字和下划线
            </div>
            <div class="htl-changeF-comcue">密码不一致!</div>
        </div>
        <?php 
            include 'common_footer.html';
        ?>
    </div>
    <script type="text/javascript" src="../js/event.js"></script>
    <script type="text/javascript" src="../js/touch.js"></script>
</body>
</html>