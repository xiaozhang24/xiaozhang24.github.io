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

<div class="mainNavs site-vnav-list">
  <div class="course_bar">
  <ul class="sub_nav">
<?php if(is_array($cate)): $i = 0; $__LIST__ = array_slice($cate,0,9,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="course_sub_nav"><a class="course_sub_nav_a"  href="<?php echo U('doc/doclist',array('id'=>$vo['id']));?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> 
</ul>                                      
    </div>
</div>

<div class="cleft">




<div class="l-mid">
<div class="ppt-box hidden-xs">
<div id="focus_img">
		<div class="nbox">
		<?php $tag_doc_class = new docTag;$data = $tag_doc_class->lists(array('type'=>'lists','status'=>'5','cache'=>'0','return'=>'data',)); if(is_array($data['list'])): $i = 0; $__LIST__ = array_slice($data['list'],0,9,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="focus_box">
				<div class="pbox">
					<a href="<?php echo U('doc/doccon',array('id'=>$vo['id']));?>" class="t">
						<img src="<?php echo docimg($vo['model'],$vo['id']);?>"  alt="<?php echo ($vo["title"]); ?>" />
					</a>
				</div>
				<div class="descs">
					<a href="<?php echo U('doc/doccon',array('id'=>$vo['id']));?>" class="t"><?php echo (msubstr($vo["title"],0,15)); ?></a>
					<p class="intro">
						<?php echo (msubstr($vo["intro"],0,60)); ?><span class="fgrey">(<?php echo ($vo["hits"]); ?>人路过)</span>
					</p>
					
					<p class="rmd_read">
                        <a href="<?php echo U('member/mydoclist',array('uid'=>$vo['uid']));?>">发布人：<?php echo (getusername($vo["uid"])); ?></a><br>
                        
                    </p>
                    
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
			
		</div>
	</div>
<div id="focus_links">
    	<ul>
        	<li><a href="javascript:void(0)" target="_self" class="cur"></a></li>
        	
        	<li><a href="javascript:void(0)" target="_self"></a></li>
        	
        	<li><a href="javascript:void(0)" target="_self"></a></li>
        	
        	<li><a href="javascript:void(0)" target="_self"></a></li>
</ul></div>


</div>

<div class="catedoclist">
<div class="c-d-title"><b>精品文档</b><div class="fr"><a href="<?php echo U('doc/doclist',array('c'=>'wytj'));?>">更多</a></div></div>
<div class="dochlist">

<?php $tag_doc_class = new docTag;$data = $tag_doc_class->lists(array('type'=>'lists','how'=>'rate','cache'=>'0','return'=>'data',)); if(is_array($data['list'])): $i = 0; $__LIST__ = array_slice($data['list'],0,9,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
<dt>
<a href="<?php echo U('doc/doccon',array('id'=>$vo['id']));?>"><img class="img-responive" src="<?php echo docimg($vo['model'],$vo['id']);?>" /></a>
<span class="icon <?php echo ($vo["ext"]); ?>"></span>

</dt>
<dd><a href="<?php echo U('doc/doccon',array('id'=>$vo['id']));?>"><?php echo (msubstr($vo["title"],0,14)); ?></a></dd>
<dd class="gray"><?php echo ($vo["hits"]); ?>人阅读</dd>

</dl><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</div>
</div>
<div class="clear ad74688"></div>
<div class="catedoclist">
<div class="c-d-title"><b>文档速递</b>
<div class="fr">
<a href="<?php echo U('doc/doclist',array('c'=>'newdoc'));?>">更多</a>
</div>
</div>
<div class="dochlist">
<?php $tag_doc_class = new docTag;$data = $tag_doc_class->lists(array('type'=>'lists','order'=>'add_time desc','cache'=>'0','return'=>'data',)); if(is_array($data['list'])): $i = 0; $__LIST__ = array_slice($data['list'],0,9,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
<dt>
<a href="<?php echo U('doc/doccon',array('id'=>$vo['id']));?>"><img src="<?php echo docimg($vo['model'],$vo['id']);?>" /></a>
<span class="icon <?php echo ($vo["ext"]); ?>"></span>
</dt>
<dd><a href="<?php echo U('doc/doccon',array('id'=>$vo['id']));?>"><?php echo (msubstr($vo["title"],0,13)); ?></a></dd>
<dd class="gray"><?php echo (fdate($vo["add_time"])); ?>上传</dd>
</dl><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div class="textlist">
<ul>
<?php if(is_array($data['list'])): $i = 0; $__LIST__ = array_slice($data['list'],5,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>[<a href="<?php echo U('doc/doclist',array('id'=>$vo['cateid']));?>"><?php echo (getcatename("doc",$vo["cateid"])); ?></a>]<a class="hei" href="<?php echo U('doc/doccon',array('id'=>$vo['id']));?>"><?php echo (msubstr($vo["title"],0,11)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</div>
<div class="catedoclist">
<div class="c-d-title"><b>热门文档</b>

<div class="fr">
<a href="<?php echo U('doc/doclist',array('c'=>'hotdoc'));?>">更多</a>
</div>
</div>
<div class="dochlist" style="margin:0px 10px">
<?php $tag_doc_class = new docTag;$data = $tag_doc_class->lists(array('type'=>'lists','order'=>'hits desc','cache'=>'0','return'=>'data',)); if(is_array($data['list'])): $i = 0; $__LIST__ = array_slice($data['list'],0,9,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
<dt>
<a href="<?php echo U('doc/doccon',array('id'=>$vo['id']));?>"><img src="<?php echo docimg($vo['model'],$vo['id']);?>" /></a>
<span class="icon <?php echo ($vo["ext"]); ?>"></span>

</dt>
<dd><a href="<?php echo U('doc/doccon',array('id'=>$vo['id']));?>"><?php echo (msubstr($vo["title"],0,14)); ?></a></dd>
<dd class="gray"><?php echo ($vo["hits"]); ?>人阅读</dd>

</dl><?php endforeach; endif; else: echo "" ;endif; ?>

</div>
<div class="textlist">
<ul>
<?php if(is_array($data['list'])): $i = 0; $__LIST__ = array_slice($data['list'],5,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>[<a href="<?php echo U('doc/doclist',array('id'=>$vo['cateid']));?>"><?php echo (getcatename("doc",$vo["cateid"])); ?></a>]<a class="hei" href="<?php echo U('doc/doccon',array('id'=>$vo['id']));?>"><?php echo (msubstr($vo["title"],0,11)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</div>
</div>
<div class="cright fr">
<div class="r-list">
<div class="totalcount">已有<s><?php echo ($totaldocnum); ?></s>份文档</div>
<div class="indexup"><a href="<?php echo U('doc/doc_share');?>" class="cateicons midupbtn"></a></div>


<div class="indextitle">文档下载排行</div>
<div class="tabmenu">
<ul class="ranktab">

<li class="cur col-sm-6">本日</li>
<li class="tab2 col-sm-6">本周</li>
<li class="tab2 col-sm-6">本月</li>
</ul>
</div>
<div class="rank">
<ul>
<?php $tag_doc_class = new docTag;$data = $tag_doc_class->lists(array('type'=>'lists','order'=>'hits desc','how'=>'down','day'=>'4','cache'=>'0','return'=>'data',)); if(is_array($data['list'])): $i = 0; $__LIST__ = array_slice($data['list'],0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('doc/doccon',array('id'=>$vo['id']));?>"><?php echo (msubstr($vo["title"],0,12)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<ul style="display:none;">
<?php $tag_doc_class = new docTag;$data = $tag_doc_class->lists(array('type'=>'lists','order'=>'hits desc','how'=>'down','day'=>'7','cache'=>'0','return'=>'data',)); if(is_array($data['list'])): $i = 0; $__LIST__ = array_slice($data['list'],0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('doc/doccon',array('id'=>$vo['id']));?>"><?php echo (msubstr($vo["title"],0,12)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<ul style="display:none;">
<?php $tag_doc_class = new docTag;$data = $tag_doc_class->lists(array('type'=>'lists','order'=>'hits desc','how'=>'down','day'=>'30','cache'=>'0','return'=>'data',)); if(is_array($data['list'])): $i = 0; $__LIST__ = array_slice($data['list'],0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('doc/doccon',array('id'=>$vo['id']));?>"><?php echo (msubstr($vo["title"],0,12)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>

<div class="indextitle">用户排行榜</div>
<div class="tabmenu">
<ul class="userrank">

<li class="cur col-sm-10">用户积分榜</li>
<li class="tab2 col-sm-10">用户贡献榜</li>

</ul>
</div>


<div class="tablerank">
<table width="100%" border="0">
  <tr>
    <th width="30"></th>
    <th width="110">用户名</th>
    <th width="80">积分</th>
  </tr>
  <?php $tag_user_class = new userTag;$data = $tag_user_class->lists(array('type'=>'lists','how'=>'score','order'=>'roleid desc','cache'=>'0','return'=>'data',)); if(is_array($data['list'])): $i = 0; $__LIST__ = array_slice($data['list'],0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td width="30"></td>
    <td width="110"><a href="<?php echo U('member/mydoclist',array('uid'=>$vo['uid']));?>"><?php echo (getusername($vo['uid'])); ?></a></td>
    <td width="80"><?php echo ($vo["comcount"]); ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
 
</table>
<table width="100%" border="0" style="display:none;">
  <tr>
    <th width="30"></th>
    <th width="110">用户名</th>
    <th width="80">上传文档</th>
  </tr>
  <?php $tag_user_class = new userTag;$data = $tag_user_class->lists(array('type'=>'lists','how'=>'doc','order'=>'roleid desc','cache'=>'0','return'=>'data',)); if(is_array($data['list'])): $i = 0; $__LIST__ = array_slice($data['list'],0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td width="30"></td>
    <td width="110"><a href="<?php echo U('member/mydoclist',array('uid'=>$vo['uid']));?>"><?php echo (getusername($vo['uid'])); ?></a></td>
    <td width="80"><?php echo ($vo["comcount"]); ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</div>

</div>
<div class="ad21070"></div>


</div>

<div class="clear">

</div>
<div class="flink">
友情链接：

<div class="flinktext">
<?php if(is_array($flink['text'])): $i = 0; $__LIST__ = $flink['text'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>" target="_blank" alt="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>


<div class="flinkimg">
<ul>
<?php if(is_array($flink['img'])): $i = 0; $__LIST__ = $flink['img'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["url"]); ?>" target="_blank"><img src="<?php echo attach($vo['img'],'flink');?>" alt="<?php echo ($vo["name"]); ?>" /></a>
<a href="<?php echo ($vo["url"]); ?>" target="_blank" alt="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul></div>
</div>


<script>

$(function(){


var t=n=length=count=0;
var length=$("#focus_img").find(".focus_box").length;

$("#focus_links").find("li").click(function (){
										 
var num=$(this).index();


$("#focus_links li a").removeClass('cur');
$(this).find("a").addClass('cur');
count=(-1)*(num)*500+'px';

//$("#focus_img").css("left",count);
$("#focus_img").animate({left: count}, "slow");

//alert($("#focus_img").attr("left"));

});
$("#focus_links").find("li").hover(function (){

clearInterval(t);										 
var num=$(this).index();
count=(-1)*(num)*500+'px';
$("#focus_links li a").removeClass('cur');
$(this).find("a").addClass('cur');
//$("#focus_img").css("left",count);
$("#focus_img").animate({left: count}, "slow");
//alert($("#focus_img").attr("left"));

},function(){t=setInterval(showAuto,3000);});

t=setInterval(showAuto,3000);



function showAuto(){
   n=n>=(length-1)?0:n+1;
   $("#focus_links").find("li").eq(n).trigger("click");
}



$('.catelist1 li').each(function(){

$(this).mouseover(function(){


var id=$(this).attr('dataid');


$(this).find('.cateview').removeClass('disnone');

	
}).mouseout(function(){


	$(this).find('.cateview').addClass('disnone');
	
});



	
});


$('.ranktab li').click(function(){

$('.ranktab li').removeClass('cur');
$('.ranktab li').addClass('tab2');
$(this).removeClass('tab2');
$(this).addClass('cur');

});
$('.userrank li').click(function(){

	$('.userrank li').removeClass('cur');
	$('.userrank li').addClass('tab2');
	$(this).removeClass('tab2');
	$(this).addClass('cur');

	});

$('ul.ranktab').tabs('div.rank > ul');
$('ul.userrank').tabs('div.tablerank > table');

});


</script>
</div>
<div style="clear:both;"></div>
<div class="footer clearfix mt100 pt20 be " style="background:#262626;">
    <!-- 脚底目录 -->
    <!-- <div style="border: 1px solid red;overflow: hidden;text-align: center;margin: auto;width: 1300px;height: 300px;padding-left: 100px;background-color: #000;"> -->
        
<div class=" footer-main clearfix">
  <div class="link-item ">
  <h3 style="color: #fff">合作伙伴</h3>
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
  <h3 style="color: #fff">课程管理</h3>
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

  <div class="link-item hidden-xs">
  <h3 style="color: #fff">乐育谷APP下载</h3>
  <img style="width:110px; padding-top:10px" src="http://edusoho-demo.b0.upaiyun.com/files/system/block_picture_1441521835.png" alt="">
</div>

  <div class="link-item hidden-xs">
  <h3 style="color: #fff">微信公众号</h3>
 <img style="width:110px;padding-top:10px" src="/files/system/block_picture_1458123877.jpg?6.16.0" alt="">
</div>
</div>

    <!-- </div> -->
    <div class="footerNav mainContent auto clearfix mt50">
    </div>
    <!-- 脚底声明 -->
    <div class="auto mt20  bf4" style="background:#23282D">
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