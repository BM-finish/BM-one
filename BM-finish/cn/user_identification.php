<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>业主认证信息</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/repair.css">
    <link rel="stylesheet" href="../css/common_footer.css">
    <script src="../js/zepto.min.js"></script>
    <script src="../js/common.js"></script>
    <script src="../js/htl_first.js"></script>
</head>
<body>
    <div class="htl-ident">
        <header>
            <a href=""></a>
            <em>业主认证信息</em>
        </header>
        <!-- 表单 -->
        <form action="" class="htl-identF">
            <div class="htl-identF-thr">
                <!-- 手机 -->
                <div class="htl-identF-old clearfix">
                    <label for="htl-phone">手机</label>
                    <div class="htl-changeF-zj">
                        <input type="password" id="htl-phone" />
                    </div>
                </div>
                <!-- 地址 -->
                <div class="htl-identF-new clearfix">
                    <label for="htl-place">地址</label>
                    <div class="htl-changeF-zj">
                        <input type="password" id="htl-place" />
                    </div>
                </div>
                <!-- 电子邮箱 -->
                <div class="htl-identF-comf clearfix">
                    <label for="htl-email">电子邮件</label>
                    <div class="htl-changeF-zj">
                        <input type="text" id="htl-email" />
                    </div>
                </div>
            </div>
            <!-- 确认 -->
            <div class="htl-identF-sure">
                <input type="submit" value="确认" />
            </div>
        </form>
        <div>
            <div class="htl-identF-phonecue">格式错误!</div>
            <div class="htl-identF-placecue">
                无效地址！
            </div>
            <div class="htl-identF-emailcue">邮箱格式错误!</div>
        </div>
        <?php 
            include 'common_footer.html';
        ?>
    </div>
    <script type="text/javascript" src="../js/event.js"></script>
    <script type="text/javascript" src="../js/touch.js"></script>
</body>
</html>