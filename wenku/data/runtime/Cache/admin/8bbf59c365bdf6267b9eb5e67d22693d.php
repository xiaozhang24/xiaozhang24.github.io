<?php if (!defined('THINK_PATH')) exit(); if(is_array($left_menu)): $i = 0; $__LIST__ = $left_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><h3 class="f14"><span class="J_switchs cu on"
	title="<?php echo L('expand_or_contract');?>"></span><?php echo ($val["name"]); ?></h3>
<ul>
	<?php if(is_array($val['sub'])): $i = 0; $__LIST__ = $val['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sval): $mod = ($i % 2 );++$i;?><li class="sub_menu">
	<a href="javascript:;"	data-uri="<?php echo U($sval['module_name'].'/'.$sval['action_name'], array('menuid'=>$sval['id'])); echo ($sval["data"]); ?>" data-id="<?php echo ($sval["id"]); ?>" hidefocus="true"><?php echo ($sval["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul><?php endforeach; endif; else: echo "" ;endif; ?>