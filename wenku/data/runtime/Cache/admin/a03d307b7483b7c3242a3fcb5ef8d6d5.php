<?php if (!defined('THINK_PATH')) exit();?><div class="dialog_content">
<form id="info_form" action="<?php echo u('doc_con/edit');?>" method="post">
<div class="common-form">
	<table width="100%" cellpadding="2" cellspacing="1" class="table_form">
        <tr>
			<th width="100">链接分类 :</th>
			<td>
            <input type="hidden" name="cateid" id="J_cate_id" value="<?php echo ($info["cate_id"]); ?>" />
            <select class="J_cate_select mr10" data-pid="0" data-uri="<?php echo U('doc_cate/ajax_getchilds');?>" data-selected="<?php echo ($cateid); ?>"></select>
           </td>
		</tr>
        <tr>
			<th width="100">文档标题 :</th>
			<td><input type="text" name="title" id="title" class="input-text" size="30" value="<?php echo ($info["title"]); ?>"></td>
		</tr>
		<tr>
			<th width="100">文档简介 :</th>
			<td>
			<textarea name="intro" id="intro" style="width:240px;height:100px;"><?php echo ($info["intro"]); ?></textarea>
			</td>
		</tr>
		<tr>
			<th width="100">文档积分 :</th>
			<td>
			<input type="text" name="score" id="score" class="input-text" size="30" value="<?php echo ($info["score"]); ?>">
			</td>
		</tr>
         <tr>
			<th width="100">状态 :</th>
			<td>
            <select name="status" id="status">
            <option value="<?php echo ($info["status"]); ?>">--<?php echo (getstatusname($info["status"])); ?>--</option>
            <option value="0">--关闭--</option>
            <option value="1">--未审核--</option>
            <option value="2">--已审核--</option>
            <option value="3">--置顶--</option>
            <option value="4">--推荐--</option>
            <option value="5">--首页焦点--</option>
            
            </select></td>
		</tr>
	
	</table>
    <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" />
</div>
</form>
</div>

<script type="text/javascript">

$(function(){
	$('.J_cate_select').cate_select({top_option:lang.all});
	$('#info_form').ajaxForm({success:complate,dataType:'json'});
	function complate(result){
		if(result.status == 1){
			$.dialog.get(result.dialog).close();
			$.mtceo.tip({content:result.msg});
			window.location.reload();
		} else {
			$.mtceo.tip({content:result.msg, icon:'alert'});
		}
	}


});
</script>