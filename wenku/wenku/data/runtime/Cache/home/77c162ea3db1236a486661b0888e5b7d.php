<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
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
<script src="__PUBLIC__/js/jquery-1.8.3.js"></script>

<link rel="shortcut icon" href="__PUBLIC__/images/favicon.ico" >
</head>
<body style="text-align:center;">


<div class="container1" style="padding-bottom:20px;">

<div class="reader-container" id="reader-container-6" style="text-align:left;">

<a class="ic isFullScreen top-right-fullScreen" href="<?php echo U('doc/doccon',array('id'=>$info['id']));?>"	title="返回内容页"></a>

<?php echo ($ipstr); ?>
</div>







</div>

<script src="__PUBLIC__/js/var.js"></script>

<script type="text/javascript">
$(function(){






//if(xls==1){
//$('.stl_04').children().each(function(i){


//ttop=parseInt($(this).css('top'));
//ttop1=parseInt($(this).children().css('font-size'));

//$(this).css('top',(ttop-ttop1*2-50)+'px');


	
//});



//}
});
</script>
</body>
</html>