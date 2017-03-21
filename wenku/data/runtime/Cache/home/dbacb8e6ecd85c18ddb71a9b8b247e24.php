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
<span id="fold" class="fold"></span>
<div id="shade"></div>
<div class="ucleft">
<div class="avatar">
<p><b><?php echo (getusername($uid)); ?></b></p>
<p><?php echo (getrolename($uid)); ?></p>
<div class="vip"></div>

<div><img src="<?php echo avatar($uid,'120');?>" /></div>

<?php if($isadmin == 0): ?><p>积分:<s style="color:orange"><b><?php echo (getuserscore($uid)); ?></b></s><em>/</em><?php echo (getusersjscore($uid)); ?></p>
<div class="user-exp">
<span style="width:<?php echo (getusersjper($uid)); ?>%"></span>

</div>

<?php else: ?>
<p>积分:<s style="color:orange"><b><?php echo (getuserscore($uid)); ?></b></s></p><?php endif; ?>
</div>
<div class="uc-menu">
<ul>
<li <?php if($actionname == 'index'): ?>class="cur"<?php endif; ?>><a href="<?php echo U('ucenter/index');?>"><b class="ucmenuicon ucicon"></b>个人中心</a></li>
<li <?php if($actionname == 'mydoclist'): ?>class="cur"<?php endif; ?>><a href="<?php echo U('ucenter/mydoclist');?>"><b class="ucmenuicon gxicon"></b>我的贡献</a></li>
<li <?php if($actionname == 'xhdoclist'): ?>class="cur"<?php endif; ?>><a href="<?php echo U('ucenter/xhdoclist');?>"><b class="ucmenuicon scicon"></b>我的收藏</a></li>
<li <?php if($actionname == 'downdoclist'): ?>class="cur"<?php endif; ?>><a href="<?php echo U('ucenter/downdoclist');?>"><b class="ucmenuicon downicon"></b>我的下载</a></li>
<li <?php if($actionname == 'usermail'): ?>class="cur"<?php endif; ?>><a href="<?php echo U('ucenter/usermail');?>"><b class="ucmenuicon mailicon"></b>我的消息</a></li>
<li <?php if($actionname == 'tongji'): ?>class="cur"<?php endif; ?>><a href="<?php echo U('ucenter/tongji');?>"><b class="ucmenuicon scoreicon"></b>积分明细</a></li>
<li <?php if($actionname == 'fensi'): ?>class="cur"<?php endif; ?>><a href="<?php echo U('ucenter/fensi');?>"><b class="ucmenuicon gzicon"></b>粉丝·关注</a></li>
<li <?php if($actionname == 'bangding'): ?>class="cur"<?php endif; ?>><a href="<?php echo U('ucenter/bangding');?>"><b class="ucmenuicon gzicon"></b>账号绑定</a></li>

</ul>


</div>

</div>

<div class="ucright">
<div class="menuname">
<ul><li class="cur"><a href="#">文档贡献</a></li>

</ul>
<div class="fr"><a href="<?php echo U('doc/doc_share');?>" class="ucbtn ucupbtn">上传我的文档</a></div>

<b><s></s></b>

</div>
<div class="submenu">
<ul>
<li><a href="<?php echo U('ucenter/mydoclist');?>" <?php if($type == ''): ?>class="cur"<?php endif; ?>>已审核文档</a></li>
<li><a href="<?php echo U('ucenter/mydoclist',array('type'=>1));?>" <?php if($type == 1): ?>class="cur"<?php endif; ?>>未审核文档</a></li>
</ul>


<div class="fr">
<?php $tag_doctotalnum_class = new doctotalnumTag;$data = $tag_doctotalnum_class->lists(array('type'=>'lists','uid'=>$uid,'own'=>'1','status'=>$status,'order'=>'add_time desc','cache'=>'0','return'=>'data',));?><s>文档：</s><i><?php echo ($data["doc"]); ?>份</i><em>|</em>
<s>下载：</s><i><?php echo ($data["down"]); ?>次</i><em>|</em>
<s>评分：</s><i><?php echo ($data["raty"]); ?>人</i><em>|</em>
<s>积分：</s><i><?php echo ($data["score"]); ?></i>

</div>

</div>

<div class="clear"></div>

<table width="100%" border="0" id="ucform">
  <tr>
    <th>文档名称</th>
    <th>用户评分</th>
    <th class="hidden-xs">浏览数</th>
    <th  class="hidden-xs">下载量</th>
    <th  class="hidden-xs" style="border-right:1px solid #e5e5e5;">发布时间</th>
    <th width="35">操作</th>
  </tr>
  <?php $tag_doc_class = new docTag;$data = $tag_doc_class->lists(array('type'=>'lists','uid'=>$uid,'own'=>'1','status'=>$status,'order'=>'add_time desc','pagenum'=>'15','cache'=>'0','return'=>'data',)); if(is_array($data['list'])): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td><div class="icon <?php echo ($vo["ext"]); ?>"></div><a href="<?php echo U('doc/doccon',array('id'=>$vo['id']));?>"><?php echo (msubstr($vo["title"],0,14)); ?></a></td>
    <td><span class="ratyimg raty<?php echo (getratyint($vo["raty"])); ?>"><?php echo ($vo["raty"]); ?>分</span><?php echo ($vo["ratynum"]); ?>人评分</td>
    <td class="hidden-xs"><?php echo ($vo["hits"]); ?></td>
    <td  class="hidden-xs"><?php echo ($vo["downnum"]); ?></td>
    
    <td  class="hidden-xs"><?php echo (fdate($vo["add_time"])); ?></td>
    <td><a href="<?php echo U('doc/editdoc',array('id'=>$vo['id']));?>">编辑</a></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  
</table>




<div class="page-nav page-center"> 
<div class="page-inner"> 
<div class="page-content">
<?php echo ($data['page']); ?>
</div> </div></div>
</div>

<div class="clear">

</div>

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