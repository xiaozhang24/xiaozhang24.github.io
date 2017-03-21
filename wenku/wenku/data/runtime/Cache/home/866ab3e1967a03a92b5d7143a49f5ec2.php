<?php if (!defined('THINK_PATH')) exit();?><div class="showdownload">
<span class="icon <?php echo ($info["ext"]); ?>"></span>
<span class="doc_t"><?php echo (msubstr($info["title"],0,16)); ?></span>
<p>文档大小：<?php echo (byte_format($info["filesize"])); ?><p>
<p>下载所需积分：<span class="jinbi"><?php echo ($info["score"]); ?></span><p>
<p>下载后还剩积分：<span class="jinbi"><?php echo ($userscore); ?></span><p>


<p><font color="#0083db"><?php echo ($scoreinfo); ?></font><p>


</div>
<div class="doc_down">
<dl>
<dt class="down" id="download"><a href="<?php echo ($url); ?>" ></a></dt>
</dl>
</div>