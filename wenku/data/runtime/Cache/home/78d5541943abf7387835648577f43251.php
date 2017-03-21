<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($seoconfig["title"]); ?></title>
<meta content="<?php echo ($seoconfig["description"]); ?>" name="description">
<meta content="<?php echo ($seoconfig["keywords"]); ?>" name="keywords">
<meta property="wb:webmaster" content="92c397dc51ce7300" />
<script>
	var URL = '__URL__';
	var SELF = '__SELF__';
	var ROOT_PATH = '__ROOT__';
	var PUBLIC_PATH = '__PUBLIC__';
	var APP	 =	 '__APP__';
	//语言项目
	var lang = new Object();
	<?php $_result=L('js_lang');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>lang.<?php echo ($key); ?> = "<?php echo ($val); ?>";<?php endforeach; endif; else: echo "" ;endif; ?>
	
</script>
<link href="__PUBLIC__/theme/baidu/css/base.css" rel="stylesheet" media="screen" />
<link href="__PUBLIC__/theme/baidu/css/mtceodialogtip.css" rel="stylesheet" media="screen" />
<link href="__PUBLIC__/theme/baidu/css/bootstrap.css" rel="stylesheet" media="screen" />
<link href="__PUBLIC__/theme/baidu/css/mp.css" rel="stylesheet" media="screen" />
<link href="__PUBLIC__/theme/baidu/css/style.css" rel="stylesheet" media="screen" />
<link href="__PUBLIC__/theme/baidu/css/main.css" rel="stylesheet" media="screen" />
<link href="__PUBLIC__/theme/baidu/css/es-icon.css" rel="stylesheet" media="screen" />
<script src="__PUBLIC__/js/jquery-1.8.3.js"></script>
<script src="__PUBLIC__/js/jquery.tools.min.js"></script>
<script src="__PUBLIC__/js/mtceo.js"></script>
<script src="__PUBLIC__/js/home.js"></script>
<script src="__PUBLIC__/js/home_extend.js"></script>
<script src="__PUBLIC__/js/jquery.form.js"></script>
<script src="__PUBLIC__/js/jquery.flash.js"></script>
<script src="__PUBLIC__/js/raphael.js"></script>
<link rel="shortcut icon" href="__PUBLIC__/images/favicon.ico" >


</head>

<body>
<div class="bar-top clearfix">
        <div class="mainContent auto clearfix">
            <div class="site-bar1-wrap">
                <div class="site-bar1 clearfix">
                    <div class="site-bar1-l left">
                        <em class="hidden-xs site-welcome left">欢迎光临访问乐育谷！</em>
                        <span style="" id="siteAccount" class="site-account ml10">
                            <span class="js-login-acts">
<?php if($visitor['uid'] == ''): ?><a class="site-login-link st-notice" href="<?php echo U('user/login');?>">登录</a><a class="ml5" href="<?php echo U('user/register');?>">注册</a><?php endif; ?>
<?php if($visitor['uid'] > 0): ?><a href="<?php echo U('ucenter/index');?>" ><?php echo ($visitor['username']); ?></a> <em>|</em>
<a href="<?php echo U('user/logout');?>" >[退出]</a> <em>|</em>
<a href="<?php echo U('ucenter/index');?>" >个人文库</a><?php endif; ?>
</span></span></div>
    <div class="site-bar1-r right">
    <span class="site-nav-links clearfix">
            <a class="site-nav-link site-home left" href="http://www.loyanet.com">乐育谷首页</a>
            <span style="display:none" id="siteMine" class="site-pull site-mine left">
            <a rel="nofollow" class="site-pull-link site-icon-link site-mine-link" href="http://www.lyg.lh/user"><em>我的乐育谷</em><i></i></a>
            <div id="siteMyLinks" class="site-pull-pane site-pull-menu">
            <a rel="nofollow" target="_blank" href="http://www.lyg.lh/user/dingdan">我的订单</a>
            <a data-need-id="" rel="nofollow" target="_blank" href="http://www.lyg.lh/user/news">我的资讯</a>
            <a data-need-id="" rel="nofollow" target="_blank" href="http://www.lyg.lh/user/jingyan">我的经验</a>
            <span style="display:none" class="mine-area">
            <a data-need-id="" rel="nofollow" target="_blank" href="http://fuwu.juesheng.com">我的乐育谷通</a>
            <a data-need-id="" rel="nofollow" class="mina-dianpu" target="_blank" href="http://www.juesheng.cn/shop/">我的店铺</a>
            </span>
            </div>
            </span>
         
                </div>
            </div>
        </div></div>
        </div>
<div class="header clearfix">
<div class="site-bar2">
            <!-- LOGO -->
            <a title="找教育 上乐育谷" class="site-logo" href="/">
                <img class="img-responsive" alt="乐育谷" src="http://www.loyanet.com/assets/v2/img/lyg/index_logo.jpg?6.16.0" height="68" width="130">
            </a>
            <!-- 课程搜索 -->
            <form id="siteSearchForm" class="site-search-form" action="/search" method="get">
                <div id="siteSearchType" class="site-seach-type clearfix">
                    <a class="selected">课程</a>
                </div>
                <div class="site-search-iptbox1">
                    <input class="site-search-input  js-search" name="q" placeholder="搜索" type="text">
                    <button class="site-btn-search">搜索</button>
                </div>
            </form>
        </div>
        <div class="site-navbar sidebar ">
            <div class="site-navbar-in">
               
                <div id="siteNavbarLinks" class="site-navbar-links">
                    <?php if(is_array($navlist['main'])): $i = 0; $__LIST__ = $navlist['main'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="site-link-nav <?php if($vo['alias'] == 'wenkudoc'): ?>site-link-on<?php endif; ?>" href="<?php echo ($vo["link"]); ?>" alt="<?php echo ($vo["alias"]); ?>" <?php if($vo['target'] == 1): ?>target="_blank"<?php endif; ?>><em><?php echo ($vo["name"]); ?></em></a><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
    </div>
<div class="container<?php echo ($cssnum); ?>">

<div style="margin-top:20px;"></div>
<script src="__PUBLIC__/js/count/jQuery.artTxtCount.js"></script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/js/upload/uploadify.css" media="all">
<div class="cleft">
<div class="setinfo">
<div class="red_orange">填写文档信息</div>
<form id="info_form" action="<?php echo U('doc/doc_share',array('type'=>'edit'));?>" method="post" onsubmit="return formcheck();" >
<table width="100%" border="0">
<tr>
    <td align="right"><s>*</s>文档：</td>
   <td >
<div id="fileinfo"></div>

<input type="hidden" name="fileurl"  id="fileurl"  size="30" value="<?php echo ($info["fileurl"]); ?>">
<input type="hidden" name="ext"  id="ext"  size="30" value="<?php echo ($info["ext"]); ?>">
<input type="hidden" name="filesize"  id="filesize"  size="30" value="<?php echo ($info["filesize"]); ?>">
<input type="hidden" name="oldname"  id="oldname"  size="30" value="<?php echo ($info["oldname"]); ?>">
<input type="hidden" name="hash"  id="hash"  size="30" value="<?php echo ($info["hash"]); ?>">
<button id="J_upload_img">上传</button>

<input type="hidden" name="viewurl"  id="viewurl"  size="30" value="<?php echo ($info["viewurl"]); ?>">
</td>
    <td>支持office、wps等类型文档上传</td>
  </tr>

<tr>
    <td width="80" align="right"><s>*</s>标题：</td>
    <td><input type="text" name="title" id="title" class="ins w300" value="<?php echo ($info["title"]); ?>" /></td>
    <td id="titleTip">控制在50个字符以内</td>
  </tr>

    <tr>
    <td align="right">文档简介：</td>
    <td><textarea name="intro" id="intro" style="width:90%;height:100px;"class="txt" ><?php echo ($info["intro"]); ?></textarea></td>
    <td  id="intro_tips">控制在255个字符以内</td>
  </tr>
  <tr>
    <td width="80" align="right">标签：</td>
    <td><input type="text" name="tags" id="tags" class="ins w300" value="<?php echo ($info["tags"]); ?>" />&nbsp;&nbsp;
    <input type="button" value="自动获取" id="J_gettags" name="tags_btn" class="wk-btn2 minibtns"></td>
    <td>标签请用半角逗号,隔开</td>
  </tr>
  <tr>
    <td width="80" align="right"><s>*</s>售价：</td>
    <td><input type="text" name="score" id="score" class="ins" value="<?php echo ($info["score"]); ?>" /></td>
    <td>售价必须为数字且只能为整数</td>
  </tr>
    <tr>
    <td width="80" align="right"><s>*</s>选择分类：</td>
    <td><input type="hidden" name="cateid" id="J_cate_id" value="<?php echo ($info["cateid"]); ?>" />
<select size=10 class="J_cate_select iselect" data-pid="0" data-uri="<?php echo U('doc_cate/ajax_getsubcate');?>"  data-selected="<?php echo ($info["spid"]); ?>" style="margin-top:15px;">

</select></td>
    <td id="J_cate_idTip">&nbsp;</td>
  </tr>
 

  
  
    <tr>
    <td align="right"></td>
    
    
    <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" />
    
    <td> <input type="submit" class="wk-btn2 g-n-btns" value="修改文档" /></td>
    <td>&nbsp;</td>
  </tr>
 
</table>
	</form>

</div>
</div>

<div class="cright">

<div class="singlea"><a href="javascript:history.go(-1)">>返回上一页面</a></div>




</div>
<div class="clear">

</div>
  <script src="__PUBLIC__/js/count/jQuery.artTxtCount.js"></script>
  <script src="__PUBLIC__/js/upload/jquery.uploadify.js"></script>
 
<script type="text/javascript">
var uploadimgurl="<?php echo ($uploadimgurl); ?>";
var rooturl="<?php echo ($rooturl); ?>";
var fileext="<?php echo ($attachext); ?>";
var filesize="<?php echo ($attachsize); ?>";


function formcheck(){

	var flag;
	var mess;

	//alert($('#title').val());

	if($('#title').val() == ''){

		flag=1;
		mess='标题必填';
        
	}
	
	
	if($('#fileurl').val() == ''){

		flag=1;
		mess='请上传文档';
        
	}

	if(isNaN(parseInt($('#score').val()))){
		flag=1;
		mess='必须为整数且大于等于0';
			
	}
	
	
		
	if(flag==1){
		flag=0;
		//alert(mess);
		$.mtceo.tip({content:mess, icon:'error'});	
		return false;
	}

			
		
	return true;

	}


$(function(){
	




	
	$('.J_cate_select').cate_select('请选择');

		// 单个
		
		$('#intro').artTxtCount($('#intro_tips'), 255);
		$('#title').artTxtCount($('#titleTip'), 50);
		$('#J_gettags').live('click', function() {
			var title = $.trim($('#title').val());
			
			if(title == ''){
				$.mtceo.tip({content:'标题为空', icon:'alert'});
				return false;
			}
			$.getJSON('<?php echo U("doc/ajax_gettags");?>', {title:title}, function(result){
				if(result.status == 1){
					$('#tags').val(result.data);
				}else{
					$.mtceo.tip({content:result.msg});
				}
			});
		});
			//插件调用
	
		$('#J_upload_img').uploadify({
			'formData'     : {'url':rooturl},
			'swf'      : PUBLIC_PATH+"/js/upload/uploadify.swf",
			'uploader': uploadimgurl,
			'scriptAccess'   : 'always',
			'multi'    : false,
			'buttonText' 	: '文档上传',
			'width':'78',
			'height':'26',
			'fileTypeExts'	: fileext,
			'fileSizeLimit'   : filesize, 
			'uploadLimit'     : 1,    
			'queueSizeLimit' : 1,
            



			
			'onUploadSuccess' : function(file,data,response){

				var data = $.parseJSON(data);
				
                if(data.status==1){

				 
				$('#fileurl').val(data.info.name);
				$('#oldname').val(data.info.oldname);
				$('#title').val(data.info.oldname);
				$('#filesize').val(data.info.size);
				$('#viewurl').val(data.info.ycname);
				
				$('#hash').val(data.info.hash);
				
				$('#tags').val(data.info.ext);
				$('#ext').val(data.info.ext);

				$('#J_upload_img').hide();
				$('#fileinfo').text(data.info.oldname+'.'+data.info.ext);
				$('#fileinfo').show();

				
                }else{
				$.mtceo.tip({content:data.info, icon:'error'});
				window.location.reload();
                }
        }
		});
		



});
</script>
</div>
<div style="clear:both;"></div>
<div class="footer clearfix mt100 pt20 be ">
    <!-- 脚底目录 -->
    <!-- <div style="border: 1px solid red;overflow: hidden;text-align: center;margin: auto;width: 1300px;height: 300px;padding-left: 100px;background-color: #000;"> -->
        
<div class=" footer-main clearfix">
  <div class="link-item ">
  <h3 style="color: #333">快捷链接</h3>
  <ul>
          <li>
        <a style="color:#868686;" href="loginLyg" target="_blank">登录入口</a>
      </li>
          <li>
        <a style="color:#868686;" href="register" target="_self">注册入口</a>
      </li>
          <li>
        <a style="color:#868686;" href="" target="_self">我的课程</a>
      </li>
      </ul>
</div>

  <div class="link-item ">
  <h3 style="color: #333">课程管理</h3>
  <ul>
          <li>
        <a style="color:#868686;" href="http://www.loyanet.com/course/create" target="_blank">发布课程</a>
      </li>
          <li>
        <a style="color:#868686;" href="http://www.loyanet.com/admin/course/data" target="_blank">课程统计</a>
      </li>
          <li>
        <a style="color:#868686;" href="http://www.loyanet.com/admin/course/category" target="_blank">课程分类</a>
      </li>
      </ul>
</div>

  <div class="link-item ">
  <h3 style="color: #333">我是管理员</h3>
  <ul>
          <li>
        <a style="color:#868686;" href="http://www.loyanet.com/page/help#13" target="_self">修改底部链接</a>
      </li>
          <li>
        <a style="color:#868686;" href="http://www.loyanet.com/course/429" target="_blank">系统设置</a>
      </li>
          <li>
        <a style="color:#868686;" href="http://www.loyanet.com/course/429" target="_blank">课程设置</a>
      </li>
      </ul>
</div>

  <div class="link-item hidden-xs">
  <h3 style="color: #333">资讯动态</h3>
  <ul>
          <li>
        <a style="color:#868686;" href="" target="_self">课外活动</a>
      </li>
          <li>
        <a style="color:#868686;" href="" target="_self">校园通知</a>
      </li>
          <li>
        <a style="color:#868686;" href="" target="_self">校园动态</a>
      </li>
      </ul>
</div>

  <div class="link-item hidden-xs">
  <h3 style="color: #333">关于我们</h3>
  <ul>
          <li>
        <a style="color:#868686;" href="" target="_blank">关于我们</a>
      </li>
          <li>
        <a style="color:#868686;" href="" target="_self">历史事迹</a>
      </li>
          <li>
        <a style="color:#868686;" href="" target="_self">职位招聘</a>
      </li>
      </ul>
</div>

</div>

    <!-- </div> -->
    <div class="footerNav mainContent auto clearfix mt50">
    </div>
    <!-- 脚底声明 -->
    <div class="auto mt20 bt1 bf4">
        <div class="copy tac mainContent auto p20">
            <p>© Copyright 2010-2015 <a href="#">www.loyanet.com</a> 乐育网 All Rights Reserved
                </p>
        </div>
    </div>
</div>
<script> 
//初始化弹窗
(function (d) {
    d['okValue'] = lang.dialog_ok;
    d['cancelValue'] = lang.dialog_cancel;
    d['title'] = lang.dialog_title;
})($.dialog.defaults);

$(function(){
  $('#fold').toggle(function(){
    $(this).css('background','url(Public/theme/baidu/images/leftpage.png) no-repeat')
    $('.ucleft').show(150);
    showshade();
  },function(){
    $(this).css('background','url(Public/theme/baidu/images/rightpage.png) no-repeat') 
    $('.ucleft').hide(150);
    hideshade();
  })
})

function showshade(){
   $("#shade").css("height",$(document).height());     
        $("#shade").css("width",$(document).width());     
        $("#shade").show();
}
 function hideshade(){     
          
        $("#shade").hide();     
    } 
</script>
<script src="__PUBLIC__/js/var.js"></script>
</body>
</html>