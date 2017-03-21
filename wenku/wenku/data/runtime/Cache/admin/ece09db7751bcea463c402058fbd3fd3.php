<?php if (!defined('THINK_PATH')) exit();?><!--添加栏目-->
<div class="dialog_content">
	<form id="info_form" action="<?php echo u('doc_cate/add');?>" method="post">
	<table width="100%" class="table_form">
		<tr> 
			<th width="120">上级分类 :</th>
			<td>
				<select class="J_cate_select mr10" data-pid="0" data-uri="<?php echo U('doc_cate/ajax_getchilds');?>" data-selected="<?php echo ($spid); ?>"></select>
				<input type="hidden" name="pid" id="J_cate_id" />
			</td>
		</tr>
		<tr>
			<th>分类名称 :</th>
			<td><input type="text" name="name" id="name" class="input-text" size="30"></td>
		</tr>
        <tr>
            <th>分类图片 :</th>
            <td>
            		<input type="hidden" name="img" id="J_img" class="input-text fl mr10" size="30" value="<?php echo ($info["img"]); ?>">
            	<input type="text" name="img1" id="J_img1" class="input-text fl mr10" disabled="disabled" size="30" value="<?php echo ($info["img"]); ?>">
            	<div id="J_upload_img" class="upload_btn"><span><?php echo L('upload');?></span></div>
            </td>
        </tr>

        <tr>
		<th><?php echo L('enabled');?> :</th>
            <td>
                <label><input type="radio" name="status" value="1" checked> <?php echo L('yes');?></label>&nbsp;&nbsp;
                <label><input type="radio" name="status" value="0"> <?php echo L('no');?></label>
            </td>
        </tr>

	</table>
	</form>
</div>
<script src="__PUBLIC__/js/ajaxupload.js"></script>

<script>
var uploadimgurl="<?php echo U('doc_cate/ajax_upload_img');?>";
$(function(){
	$.formValidator.initConfig({formID:"info_form",theme:'mt_theme',mode:'AutoTip',inIframe:true,ajax:true});
	$("#name").formValidator({onshow:"请输入分类名称",onfocus:"请输入分类名称"}).inputValidator({min:1,onerror:"请输入分类名称"});
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
	$('.J_cate_select').cate_select();
	var ajaxupload = new AjaxUpload('#J_upload_img',{
		action: uploadimgurl,
		name:"file",
		responseType:'json',
		onSubmit:function(file,ext){
			if(ext && /^(jpg|jpeg|png|gif)$/.test(ext)){
				//ext是后缀名
				//oBtn.value = "正在上传…";
				
			}else{	
				//oRemind.style.color = "#ff3300";
				//oRemind.innerHTML = "不支持非图片格式！";
				
				return false;
			}
		},
		onComplete:function(file,response){
			
			
			if(response.status){
			$('#J_img1').val(response.info);
			$('#J_img').val(response.info);
			$('#J_upload_img').html("<span><?php echo L('hasupload');?></span>");
			$('#J_upload_img').prop({disabled:true});
			}
			else
			{
             
				$.mtceo.tip({content:response.info, icon:'error'});
			}
			
		}
	});
	

});
</script>