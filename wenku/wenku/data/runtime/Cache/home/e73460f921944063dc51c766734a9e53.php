<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册-<?php echo ($seoconfig["title"]); ?></title>
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
    	<div class="lft fl">
        	<div class="logo">
        		<a href="<?php echo C('mtceo_site_url');?>">
				
				</a>
    		</div>
            <div id="sels">
            	<ul>
            		
<li><a href="<?php echo U('user/login');?>">用户登录</a></li>
<li><a href="#" class="cur">没有帐号？！免费注册</a></li>
<li><a href="<?php echo U('findpwd/index');?>">忘记密码</a></li>

               </ul>
            </div>
        </div>
        <!--left-->
        <div class="rgt fl">
        	<div class="parts" sel="true">

<form id="signupform" method="post" action="<?php echo U('user/register');?>" >
	
	
	
    <p><span>邮箱：</span><input type="text"  class="ins" name="email" id="email" />
    <s id="emailTip"></s>
    </p>
    
	<p><span>用户名：</span><input type="text"  class="ins" name="username" id="username" />
   <s id="usernameTip"></s>
    </p>
    <p><span>登录密码：</span><input type="password" class="ins" name="password" id="password" />
    <s id="passwordTip"></s></p>
	<p><span>确认密码：</span><input type="password" class="ins" name="repassword" id="repassword" />
	<s id="repasswordTip"></s></p>
	<p><span>验证码：</span><input type="text" class="ins" name="captcha" />
	<img style="margin-left:5px;" title="点击刷新验证码"	class="verify_img" id="captcha" url="<?php echo U('common/code','time=');?>" onclick="javascript:newgdcode(this);"	src="<?php echo U('common/code');?>" /></p>
    
	
	<input type="hidden" class="ins" name="iscaptcha" value="1" />
	<input  type="hidden" id="ret_url" name="ret_url" value="<?php echo ($ret_url); ?>"  />
	
    <p class="pbtns" style="padding-left:60px;">
    	<input id="id_login_btn" type="submit" class="btns" value="注册" tabindex="3"/>&nbsp;
    	
    </p>
   

</form>

            </div>
            <!--parts-->
        </div>
        <!--right-->
    </div>
    
    <div class="lbot">&copy; www.mtceo.net Corporation.</div>
    
</div>

<script src="__PUBLIC__/js/formvalidator.js"></script>
<script src="__PUBLIC__/js/formValidatorRegex.js"></script>
<script>
var check_name_url = "<?php echo U('common/ajax_check_name');?>";
var check_email_url = "<?php echo U('common/ajax_check_email');?>";

var htmlerror1="<s class='onError'>";
var htmlerror2="</s>";
var htmlright="<s class='onCorrect'></s>";


$(function(){

	

	
	$.formValidator.initConfig({formID:"signupform",theme:'mt_theme',mode:'FixTip' });
	$("#username").formValidator({onShow:"请输入用户名",onFocus:"3~16字符"}).inputValidator({min:3,max:16,onError:"3~16字符"});
$("#email").formValidator({onShow:"请填写邮箱",onFocus:"请填写邮箱"}).inputValidator({min:1,onerror:"请填写邮箱"}).regexValidator({regExp:"email",dataType:"enum",onError:"邮件格式错误"});
$("#password").formValidator({onShow:"请输入密码",onFocus:"6位~16位",onCorrect:"密码合法"}).inputValidator({min:6,max:16,empty:{leftEmpty:false,rightEmpty:false,emptyError:"密码两边不能有空符号"},onError:"密码长度错误,请确认"});
$("#repassword").formValidator({onShow:"再次输入密码",onFocus:"6位~16位",onCorrect:"密码一致"}).inputValidator({min:6,empty:{leftEmpty:false,rightEmpty:false,emptyError:"重复密码两边不能有空符号"},onError:"重复密码错误"}).compareValidator({desID:"password",operateor:"=",onError:"密码不一致"});


$("#username").blur(function(){


	var usernamecl=$('#usernameTip s').attr('class');

	if(usernamecl!='onError'){
		$.getJSON(check_name_url,{username:$(this).val()},function(data){



			if(data.status==1){

				$('#usernameTip').html(htmlright);
				
			}else{

				$('#usernameTip').html(htmlerror1+'用户名已存在'+htmlerror2);
			}



				
			});
	}

	});	
	$("#email").blur(function(){


		var emailcl=$('#emailTip s').attr('class');

		if(emailcl!='onError'){
		
		$.getJSON(check_email_url,{email:$(this).val()},function(data){



		if(data.status==1){

			$('#emailTip').html(htmlright);
			
		}else{

			$('#emailTip').html(htmlerror1+'邮箱已存在'+htmlerror2);
		}



			
		});
		}
		});		

	

	

});


</script>

</body>
</html>