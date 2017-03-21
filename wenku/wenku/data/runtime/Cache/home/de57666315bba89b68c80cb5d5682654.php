<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
                        <em class="site-welcome left">欢迎光临访问乐育谷！</em>
                        <span style="" id="siteAccount" class="site-account ml10">
                            <span class="js-login-acts">
<?php if($visitor['uid'] == ''): ?><a class="site-login-link st-notice" href="<?php echo U('user/login');?>">登录</a><a class="ml5" href="<?php echo U('user/register');?>">注册</a><?php endif; ?>
<?php if($visitor['uid'] > 0): ?><a href="<?php echo U('ucenter/index');?>" ><?php echo ($visitor['username']); ?></a> <em>|</em>
<a href="<?php echo U('user/logout');?>" >[退出]</a> <em>|</em>
<a href="<?php echo U('ucenter/index');?>" >个人文库</a><?php endif; ?>
</span></span></div>
    <div class="site-bar1-r right">
    <span class="site-nav-links clearfix">
            <a class="site-nav-link site-home left" href="/">乐育谷首页</a>
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
            <span class="site-pull site-mine left">
            <a rel="nofollow" class="site-pull-link site-icon-link site-mine-link" href="http://fuwu.juesheng.com"><em>商家平台</em><i></i></a>
            <div id="siteMyLinks" class="site-pull-pane site-pull-menu">
            <a rel="nofollow" target="_blank" href="http://fuwu.juesheng.com">商家登录</a>
            <a rel="nofollow" target="_blank" href="http://news.juesheng.com/detail/144923.html">商家帮助</a>
            </div>
            </span>
                    <a style="display:none" rel="nofollow" class="site-nav-link left" target="_blank" href="http://fuwu.juesheng.com">商家平台</a>
                    <a rel="nofollow" class="site-nav-link left" href="http://www.lyg.lh/help/zhuce.html">帮助中心</a>
                    <a class="site-icon-link site-tel left" href="tel:4000028080"><i></i><em>400-002-8080</em></a>
                    </span>
                </div>
            </div>
        </div></div>
        </div>
<div class="header clearfix">
<div class="site-bar2">
            <!-- LOGO -->
            <a title="找教育 上乐育谷" class="site-logo" href="/">
                <img alt="乐育谷" src="http://www.loyanet.com/assets/v2/img/lyg/logo.png?6.16.0" height="68" width="130">
                
                <strong>乐育谷</strong>
            </a>
            <!-- 课程搜索 -->
            <form id="siteSearchForm" class="site-search-form" action="/search" method="get">
                <div id="siteSearchType" class="site-seach-type clearfix">
                    <a class="selected">课程</a>
                </div>
                <div class="site-search-iptbox1">
                    <input class="site-search-input  js-search" name="q" placeholder="搜索机构名称、地址等" type="text">
                    <button class="site-btn-search">搜索</button>
                </div>
            </form>
        </div>
        <div class="site-navbar sidebar ">
            <div class="site-navbar-in">
                <div class="site-vnav">
                    <div class="site-vnav-head">
                        <a href="/course/explore"><em>课程分类</em></a>
                        <i></i>
                    </div>

                </div>
                <div id="siteNavbarLinks" class="site-navbar-links">
                    <?php if(is_array($navlist['main'])): $i = 0; $__LIST__ = $navlist['main'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="site-link-nav <?php if($vo['alias'] == 'wenkudoc'): ?>site-link-on<?php endif; ?>" href="<?php echo ($vo["link"]); ?>" alt="<?php echo ($vo["alias"]); ?>" <?php if($vo['target'] == 1): ?>target="_blank"<?php endif; ?>><em><?php echo ($vo["name"]); ?></em></a><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
    </div>
<div class="container<?php echo ($cssnum); ?>">

<div style="margin-top:20px;"></div>
<div class="menu"><a href="<?php echo U('index/index');?>">文库首页</a><em class="bgcur"></em><?php echo getnavlist($info['cateid']);?></div>
<div class="conbox">
<div class="conleft">
<div class="contitle">

<div class="icon <?php echo ($info["ext"]); ?>"></div>
<div class="titlename"><?php echo ($info["title"]); ?></div>
<div class="titleinfo"><?php echo ($info["hits"]); ?>人阅读</div>
</div>

<div class="coninfo">
<p><?php echo ($intro); ?></p>

</div>
<div class="reader-tools-bar-wrap">
<div class="reader-tools-bar" style="width: 1000px;">
<div class="left">
<div style="float:left;">
<a class="ic reader-fullScreen"	href="<?php echo U('doc/docconview',array('id'=>$info['id']));?>"	title="全屏显示" ></a></div>
<div class="reader-tools-zoom">
<a	style="display:none" href="javascript:void(0);"	class="ic zoom-decrease" title="缩小" ></a>
<a style="display:none"	 href="javascript:void(0);"	class="ic zoom-add" title="放大"></a></div>
</div>

<div class="center" style="width: 880px;">
<div class="centerLeft">
<div class="reader-tools-page">
<a	href="javascript:void(0);"	class="ic page-prev" title="上一页"></a>
	<input type="text"	class="page-input" style="font-weight:bold;" />
	<span class="page-count" style="font-weight:bold;">/&nbsp;<?php echo ($realstrcount); ?></span>
	<a	href="javascript:void(0);"	class="ic page-next" title="下一页"></a>
	
	
	
	
	</div>

<div class="reader-tools-page">
	
	<a href="javascript:void(0);" <?php if($hasxh != 1): ?>class="ic reader-favo" data-uri="<?php echo U('common/operate',array('id'=>$info['id'],'typeid'=>1));?>"<?php else: ?> class="ic reader-has-favoed" data-uri=""<?php endif; ?> onclick="front_operate(2,this);">
	</a>
	</div>
	
<div class="reader-tools-btn-wrap">
<a href="javascript:void(0);" <?php if($download == 1): ?>class="J_shownoform ic reader-download"<?php else: ?>class="J_shownoform ic reader-pay"<?php endif; ?> data-fix="true" data-padding="30px" data-uid="<?php echo ($uid); ?>" data-uri="<?php echo U('doc/showdownload','id='.$info['id']);?>" data-title="文档下载" data-id="showdownload" data-width="400" data-height="250">
</a>

<span class="reader-download-price">
<span class="ic download-price-ic"></span>
<?php if($download == 1): ?>免费<?php else: echo ($info["score"]); ?>&nbsp;<?php echo C('mtceo_score_name'); endif; ?></span>
</div>
	
<a style="display:none" class="ic reader-bookmark" title="书签"	href="javascript:void(0);"></a>
	
	<a class="reader-addToAlbum ic reader-ic-addToAlbum" title="推荐该文档"  href="javascript:void(0);" <?php if($hastj != 1): ?>data-uri="<?php echo U('common/operate',array('id'=>$info['id'],'typeid'=>1));?>"<?php else: ?> data-uri=""<?php endif; ?> onclick="front_operate(3,this);">
</a>
</div>


</div>
</div>
</div>



<div class="main">



<div class="mod doc-main ">
<b class="top"><b class="tl"></b><b	class="tr"></b></b>
<div class="inner">
<div class="bd doc-reader">
<div class="reader-container" id="reader-container-6" style="width: 100%;">
<div class="reader-container-inner" id="reader-container-inner-6">


<?php echo ($ipstr); ?>






</div>



<?php if($download == 2): ?><div class="showbuy">

<p>该文档为付费文档，购买后可以下载或在线阅读全文<p>
<div class="J_shownoform iic reader-pay" data-fix="true" data-padding="30px" data-uid="<?php echo ($uid); ?>" data-uri="<?php echo U('doc/showdownload','id='.$info['id']);?>" data-title="文档下载" data-id="showdownload" data-width="400" data-height="250">
</div>
</div><?php endif; ?>


<a class="ic reader-fullScreen top-right-fullScreen" href="<?php echo U('doc/docconview',array('id'=>$info['id']));?>"	title="全屏显示"></a>



</div>


</div>
</div>
</div>
</div>




</div>
<div class="conright">
<div class="docupload">
<a href="<?php echo U('doc/doc_share');?>" class="viewbtn docupbtn"></a>

</div>

<div class="docinfotitle" style="border:0">文档信息</div>

<div class="docinfo">
<p><a href="<?php echo U('member/mydoclist',array('uid'=>$info['uid']));?>"><?php echo (getusername($info['uid'])); ?></a>贡献于<?php echo (fdate($info["add_time"])); ?></p>
<div class="rate">
     <div class="big_rate">
        <span rate="2">&nbsp;</span>
        <span rate="4">&nbsp;</span>
        <span rate="6">&nbsp;</span>
        <span rate="8">&nbsp;</span>
        <span rate="10">&nbsp;</span>
        <div style="width:45px;" class="big_rate_up"></div>
     </div>
     <p><span id="s" class="s"></span><span id="g" class="g"></span></p>
  </div>
  <p>(<?php if($ratydata['voter'] == null): ?>0<?php endif; echo ($ratydata['voter']); ?>人评分)</p>
  
  
  
  <p>下载：<s><?php echo ($downnum); ?></s><em>|</em>收藏：<s><?php echo ($xhnum); ?></s><em>|</em>推荐：<s><?php echo ($tuijiannum); ?></s></p>
  
  
  <p>(<?php echo ($commentcount); ?>人评论)&nbsp;&nbsp;<a href="<?php echo U('doc/docconcom',array('id'=>$info['id']));?>">查看所有评论</a></p>
  <p><a id="J_openDialog" uri="<?php echo ($uid); ?>" href="javascript:void(0)" class="userEva-btn2 mycomment-btn">
  <b class="userEva-btn2 iccomment"></b>我要评论</a></p>
  
</div>

<div class="docinfotitle">同类别文档</div>

<div class="docinfo">
<ul>
<?php $tag_doc_class = new docTag;$data = $tag_doc_class->lists(array('type'=>'lists','cateid'=>$info['cateid'],'exceptid'=>$info['id'],'how'=>'rate','order'=>'add_time desc','cache'=>'0','return'=>'data',)); if(is_array($data['list'])): $i = 0; $__LIST__ = array_slice($data['list'],0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('doc/doccon',array('id'=>$vo['id']));?>"><?php echo (msubstr($vo["title"],0,14)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>



</div>

<div class="docinfotitle">相关文档</div>

<div class="docinfo">
<ul>
<?php $tag_doc_class = new docTag;$data = $tag_doc_class->lists(array('type'=>'lists','similar'=>$info['id'],'exceptid'=>$info['id'],'how'=>'rate','order'=>'add_time desc','cache'=>'0','return'=>'data',)); if(is_array($data['list'])): $i = 0; $__LIST__ = array_slice($data['list'],0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('doc/doccon',array('id'=>$vo['id']));?>"><?php echo (msubstr($vo["title"],0,14)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

</ul>



</div>

<div class="conad1">

</div>

</div>

<div class="clear"></div>
</div>


<div id="nonegg"><div class='banner-wrap'><?php echo R('advert/index', array(3), 'Widget');?></div></div>





<script type="text/javascript">


$(function(){
	
	 
   //获得svg的document对象   


//if(xls==1){
//$('.stl_04').children().each(function(i){


//ttop=parseInt($(this).css('top'));
//ttop1=parseInt($(this).children().css('font-size'));

//$(this).css('top',(ttop-ttop1*2-50)+'px');


	
//});



//}








	
	//---------------------------在每个页面后面加上广告栏-----------------------------------------------------
	var str=$('#nonegg').html();
	
	//$(".reader-page").css('display','none');
	//$(".reader-page").eq(0).show();
	$(".reader-page").after(str);

	
	var ttp1=$('.stl_01').height();
	var ttp2=$('.banner-wrap').height();

	var totaltp=ttp1+ttp2+12;
	var count;
	var strcount=<?php echo ($strcount); ?>;
	var realstrcount=<?php echo ($realstrcount); ?>;
    var pnum;



    var winh=$(window).height();
    //未使用
    
    var pnum1=$(".reader-page").eq(0).offset().top;
  //---------------------------初始的页数-----------------------------------------------------
	var ttp=$(document).scrollTop();
	var nn=Math.ceil((ttp-pnum1)/totaltp);
	if(nn==0){nn=1;}
	$('.page-input').val(nn);
	

	

	//---------------------------向下滚动时触发-----------------------------------------------------
	$(window).scroll( function() { 

	var ttp=$(document).scrollTop();
	var nn=Math.ceil((ttp-pnum1)/totaltp);
	if(nn==0){nn=1;}
	$('.page-input').val(nn);
	} );




	//---------------------------上下翻页-----------------------------------------------------
	$('.zoom-add').click(function(){
	});
	$('.zoom-decrease').click(function(){
	});

	$('.page-next').click(function(){
	count=parseInt($('.page-input').val());
	if(count==strcount){

		if(realstrcount==strcount){


			$.mtceo.tip({content:"当前就是最后一页!", icon:'alert'});
			
		}else{

			$.mtceo.tip({content:"购买后可阅读全文!", icon:'alert'});
		}

		
		
		
	}else{

		pnum=$(".reader-page").eq(count).offset().top;
		$('.page-input').val(count+1);
		$(document).scrollTop(pnum);
	}
	});
	$('.page-prev').click(function(){
		count=parseInt($('.page-input').val());
		
		if (count==1){
			$(document).scrollTop(pnum1);
			$.mtceo.tip({content:"当前就是第一页!", icon:'alert'});
			
			
		}else{

			pnum=$(".reader-page").eq(count-2).offset().top;
			
			//pnum=204+(count-2)*totaltp;
			$('.page-input').val(count-1);
			$(document).scrollTop(pnum);
		}
		
		
		
	});





	
$('.page-input').keydown(function(event){
	//在输入框输入按下回车后
	
	

	event = window.event || event;//消除浏览器差异  
     
	if(event.keyCode == 13){

	var curr=$(this).val();
	
	
	if(isNaN(parseInt(curr))){

		
		$.mtceo.tip({content:"请输入有效整数!", icon:'alert'});
	}else{


	if(parseInt(curr)>strcount||parseInt(curr)<0){
//
		if(realstrcount==strcount){


			$.mtceo.tip({content:"超出范围!", icon:'error'});
			
		}else{

			$.mtceo.tip({content:"购买后可阅读全文!", icon:'alert'});
		}

        
		
	}
	else{	

		pnum=$(".reader-page").eq(curr-1).offset().top;
			$(document).scrollTop(pnum);
		
		
			
	}
	}
	}
});

//---------------------------评分系统-----------------------------------------------------	
 var rate="<?php echo ($raty['raty']); ?>";
	
	var s="<?php echo ($raty['s']); ?>";
	var g="<?php echo ($raty['g']); ?>";
	
	$("#g").show();
	$("#s").text(s);
	$("#g").text("."+ g);

	
	$(".big_rate_up").animate({width:(parseInt(s)+parseInt(g)/10) * 14,height:26},1000);
	$(".big_rate span").each(function(){
		$(this).mouseover(function(){
			$(".big_rate_up").width($(this).attr("rate") * 14 );
			$("#s").text($(this).attr("rate"));
			$("#g").text("");
		}).click(function(){
			var score = $(this).attr("rate");
			//
			$.getJSON("<?php echo U('doc/setscore',array('id'=>$info['id'],'uid'=>$uid));?>",
		      {score:score},
		      function(data){
		    	   
				  
				   if(data.status==0){
					   $.mtceo.tip({content:data.msg,icon:'error'});
				   }else if(data.status==1){
					   
					   s=data.msg.s;
					   g=data.msg.g;
					   $("#s").text(s);
						$("#g").text("."+ g);
					   $("#ratycount").text(data.msg.count);
					   $.mtceo.tip({content:"感谢您的评分!"});
					   setTimeout(function (){window.location.reload();},1000);

				   }
		       }
	        );
		})
	});
	$(".big_rate").mouseout(function(){
		$("#s").text(s);
		$("#g").text("."+ g);
		$(".big_rate_up").width((parseInt(s)+parseInt(g)/10) * 14);
	});
});
</script>
<div id="J_editorDialog" style="display:none;">
<form id="comment_form" method="post" action="<?php echo U('common/ajaxadd_comment');?>">
			<textarea name="info" style="width:100%;height:250px;"></textarea>
			 <input type="hidden" name="itemid" value="<?php echo ($id); ?>" />
 <input type="hidden" name="commentid" value="<?php echo ($commentcount); ?>" />
  <input type="hidden" name="toid" id="toid" value="0" />
 <input type="hidden" name="uid" value="<?php echo ($uid); ?>" />
 <input type="hidden" name="typeid" value="1" />

 
 <input style="margin-top:20px;" type="submit" class="wk-btn2 g-n-btns" value="发布" />
	</form>	</div>


 <script src="__PUBLIC__/js/kindeditor/kindeditor.js"></script>
  <script src="__PUBLIC__/js/kindeditor/lang/zh_CN.js"></script>
  <script charset="utf-8" src="__PUBLIC__/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<link rel="stylesheet" href="__PUBLIC__/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
  
<script>
$(function() {	





	$('#J_openDialog').click(function() {

		var uri=$(this).attr('uri');

		if(uri==''){
			  
			  $.mtceo.tip({content:'您还未登录',icon:'error'});
		  }else{


		
		$('#J_editorDialog').dialog({
			title : '评论',
			width : 500,
			open : function(event, ui) {
				// 打开Dialog后创建编辑器
				
				
				
				
				
				KindEditor.create('textarea[name="info"]', {
					resizeType : 0,
					themeType : 'simple',
					
					uploadJson : '<?php echo U("attachment/editer_upload");?>',
					fileManagerJson : '<?php echo U("attachment/editer_manager");?>',
					allowFileManager : true,
					items:['emoticons'],
					emotPath:'./public/images/emot/<?php echo ($emot); ?>/',
					emotwidth: '<?php echo ($emotwidth); ?>',
					emotnum:'<?php echo ($emotnum); ?>',
					afterBlur:function(){this.sync();}
				});
				 
			},
			beforeClose : function(event, ui) {
				// 关闭Dialog前移除编辑器
				KindEditor.remove('textarea[name="info"]');
			}
		});
		  }
	});


	$('#comment_form').ajaxForm({success:complate,dataType:'json'});

	 
	function complate(result){
		
		if(result.status == 1){
			
	        $.mtceo.tip({content:result.msg});
	        setTimeout(function (){window.location.reload();},1000);
		} else {
			$.mtceo.tip({content:result.msg, icon:'alert'});
		}
	}

	
});


</script>

</div>
<div style="clear:both;"></div>
<div class="footer clearfix mt50 pt20 be ">
    <!-- 脚底目录 -->
    <!-- <div style="border: 1px solid red;overflow: hidden;text-align: center;margin: auto;width: 1300px;height: 300px;padding-left: 100px;background-color: #000;"> -->
        
<div class=" footer-main clearfix" style="width: 1200px;margin: auto;text-align: center;">
  <div class="link-item " style="width: 20%;">
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

  <div class="link-item " style="width: 20%;">
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

  <div class="link-item " style="width: 20%;">
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

  <div class="link-item hidden-xs" style="width: 20%;">
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

  <div class="link-item hidden-xs" style="width: 20%;">
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
</script>
<script src="__PUBLIC__/js/var.js"></script>

</body>
</html>