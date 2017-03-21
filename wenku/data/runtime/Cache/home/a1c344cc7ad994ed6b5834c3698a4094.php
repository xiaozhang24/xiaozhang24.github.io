<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title>找回密码-<?php echo C('mtceo_site_title');?></title>
<meta content="<?php echo C('mtceo_site_description');?>" name="description">
<meta content="<?php echo C('mtceo_site_keyword');?>" name="keywords">

<link href="__PUBLIC__/theme/baidu/css/base.css" rel="stylesheet" media="screen" />
<link href="__PUBLIC__/theme/baidu/css/mtceodialogtip.css" rel="stylesheet" media="screen" />
<script src="__PUBLIC__/js/jquery-1.8.3.js"></script>
<script src="__PUBLIC__/js/mtceo.js"></script>
<script src="__PUBLIC__/js/home_extend.js"></script>
</head>
<body style="background:#eee;">
<div class="login">
	<div class="ltop"></div>
    <div class="fixed">
    	
        <!--left-->
        <div class="rgt fl">
        <a href="<?php echo U('user/login');?>" style="display:block; padding-left:10px;">>>返回登录</a>
        	<div class="parts" sel="true">

<form id="id_form" method="post" action="<?php echo U('findpwd/index');?>">
	
	
	
    <p>用户名：<input type="text" class="ins" name="username" id="username" />
    
    </p>
	<p>验证码：<input type="text" class="ins" name="captcha" id="captcha" />
	<img style="margin-left:5px;" title="点击刷新验证码"	class="verify_img" url="<?php echo U('common/code','time=');?>" onclick="javascript:newgdcode(this);"	src="<?php echo U('common/code');?>" /></p>
    
	
	
	
	
    <p class="pbtns">
    	<input id="id_login_btn" type="submit" class="btns" value="找回密码" tabindex="3"/>&nbsp;
    </p>
   

</form>

            </div>
            <!--parts-->
        </div>
        <!--right-->
    </div>
    
    <div class="lbot">&copy; mtceo.net Corporation.</div>
    
</div>




</body>
</html>