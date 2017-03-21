<?php if (!defined('THINK_PATH')) exit();?><p>
	尊敬的<?php echo ($username); ?>:
</p>
<p style="padding-left:30px;">
	您好, 您刚才在 <?php echo ($site_name); ?> 申请了重置密码，请点击下面的链接进行重置：
</p>
<p style="padding-left:30px;">
	<a href="<?php echo ($reset_url); ?>"><?php echo ($reset_url); ?></a> 
</p>
<p style="padding-left:30px;">
	此链接只能使用一次, 如果失效请重新申请. 如果以上链接无法点击，请将它拷贝到浏览器(例如IE)的地址栏中。
</p>
<p style="text-align:right;">
	<?php echo ($site_name); ?>
</p>
<p style="text-align:right;">
	<?php echo ($send_time); ?>
</p>