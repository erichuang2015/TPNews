<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>新闻登录</title>
    <link href="/TPNews/Public/css/login.css" type="text/css" rel="stylesheet">
</head>
<body>

<div class="login">
    <div class="message">后台登录</div>
    <div id="darkbannerwrap"></div>

    <form method="post">
        <input name="action" value="login" type="hidden">

        <input name="user" placeholder="用户名" required type="text">
        <hr class="hr15">
        <input name="pwd" placeholder="密码" required type="password">
        <hr class="hr15">
        <input value="登录" style="width:100%;" type="submit">
        <hr class="hr20">
        <!-- 帮助 <a onClick="alert('请联系管理员')">忘记密码</a> -->
        <a href="<?php echo U('New/index');?>">返回首页</a>
    </form>

</div>

</body>
</html>