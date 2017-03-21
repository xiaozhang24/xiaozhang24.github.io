<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title>登录-<?php echo ($seoconfig["title"]); ?></title>
<meta content="<?php echo ($seoconfig["description"]); ?>" name="description">
<meta content="<?php echo ($seoconfig["keywords"]); ?>" name="keywords">

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
        	<div class="parts" sel="true">

<form id="id_form" method="post" action="<?php echo U('user/login');?>">
	
	
	
    <p>用户名：<input type="text" tabindex="1" class="ins" name="username" id="id_username" />
    	&nbsp;<a href="<?php echo U('user/register');?>" tabindex="4">注册</a>
    </p>
    <p>密　码：<input type="password" tabindex="2" class="ins" name="password" id="id_password" /></p>
    <p class="pbtns">
    	<input id="id_login_btn" type="submit" class="btns" value="登录" tabindex="3"/>&nbsp;
    	<a href="<?php echo U('findpwd/index');?>" id="lost" tabindex="5">忘记密码</a>
    </p>
   
   <input  type="hidden" id="ret_url" name="ret_url" value="<?php echo ($ret_url); ?>"  />
    <p class="ol">
  
    	<?php if( $oauth_list['sina']!=''): ?><a href="<?php echo U('oauth/index',array('mod'=>'sina'));?>" class="sina">从新浪微博登录</a><?php endif; ?>
    	<?php if( $oauth_list['qq']!=''): ?><a href="<?php echo U('oauth/index',array('mod'=>'qq'));?>" class="qq">从腾讯QQ登录</a><?php endif; ?>
    	<?php if( $oauth_list['taobao']!=''): ?><a href="<?php echo U('oauth/index',array('mod'=>'taobao'));?>" class="taobao">从淘宝登录</a><?php endif; ?>
    	
       
    </p>
</form>

            </div>
            <!--parts-->
        </div>
        <!--right-->
    </div>
    
    <div class="lbot">&copy; www.mtceo.net Corporation.</div>
    
</div>


</body>
</html>