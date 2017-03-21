<?php	return '
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


美景_百度图片搜索
<div class="forFlow">
		
<div id="post_detail">
<!--done-->
<div id="topics">
	<div class="post">
		<h1 class="postTitle">
			<a id="cb_post_title_url" class="postTitle2" href="http://www.cnblogs.com/laov/p/3541414.html">【Linux】Linux中常用操作命令</a>
		</h1>
		<div class="clear"></div>
		<div class="postBody">
			<div id="cnblogs_post_body"><p>&nbsp;</p>
<p><span style="font-size: 14pt; color: #ff0000; font-family: \'Microsoft YaHei\';"><a title="大牛笔记" href="http://www.weixuehao.com/archives/25"><span style="color: #ff0000;"><span style="line-height: 27px;"><strong>博客已转移，请借一步说话，http://www.weixuehao.com/archives/25</strong></span></span></a></span></p>
<p>&nbsp;</p>
<p><a href="#Linux"><span style="font-size: 18px; font-family: \'comic sans ms\', sans-serif;"><strong>Linux简介及</strong><strong>Ubuntu安装</strong></span></a></p>
<p><a href="#zhiling"><span style="font-family: \'comic sans ms\', sans-serif; font-size: 18px;"><strong>常见指令</strong></span></a></p>
<p><a href="#systemManager"><span style="font-family: \'comic sans ms\', sans-serif; font-size: 18px;"><strong><strong>系统管理命令</strong></strong></span></a></p>
<p><a href="#tar"><span style="font-family: \'comic sans ms\', sans-serif; font-size: 18px;"><strong><strong><strong>打包压缩相关命令</strong></strong></strong></span></a></p>
<p><a href="#shutdown"><span style="font-family: \'comic sans ms\', sans-serif; font-size: 18px;"><strong><strong><strong><strong>关机/重启机器</strong></strong></strong></strong></span></a></p>
<p><a href="#grep"><span style="font-family: \'comic sans ms\', sans-serif; font-size: 18px;"><strong><strong><strong><strong><strong>Linux管道</strong></strong></strong></strong></strong></span></a></p>
<p><a href="#dpkg"><span style="font-size: 18px; font-family: \'comic sans ms\', sans-serif;"><strong>Linux软件包管理</strong></span></a></p>
<p><a href="#vim"><span style="font-family: \'comic sans ms\', sans-serif; font-size: 18px;"><strong>vim使用</strong></span></a></p>
<p><a href="#usergroup"><span style="font-size: 18px; font-family: \'comic sans ms\', sans-serif;"><strong>用户及用户组管理</strong></span></a></p>
<p><a href="#chmod"><span style="font-family: \'comic sans ms\', sans-serif; font-size: 18px;"><strong>文件权限管理</strong></span></a></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp;大牛笔记-www.weixuehao.com</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">来自：http://www.weixuehao.com/archives/25</span></p>
<p><span style="font-size: 18px; font-family: \'comic sans ms\', sans-serif;"><strong><a name="Linux"></a>Linux简介及</strong><strong>Ubuntu安装</strong></span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">Linux，免费开源，多用户多任务系统。基于Linux有多个版本的衍生。RedHat、Ubuntu、Debian</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">安装VMware或VirtualBox虚拟机。具体安装步骤，找百度。</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">再安装Ubuntu。具体安装步骤，找百度。</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">安装完后，可以看到Linux系统的目录结构，见链接<a href="http://www.cnblogs.com/laov/p/3409875.html" target="_blank">http://www.cnblogs.com/laov/p/3409875.html</a></span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif;">&nbsp;</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp;</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif;"><strong><span style="font-size: 18px;"><a name="zhiling"></a>常用指令</span></strong></span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">ls　　 &nbsp; &nbsp; &nbsp; &nbsp;显示文件或目录</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;-l &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 列出文件详细信息l(list)</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;-a &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;列出当前目录下所有文件及目录，包括隐藏的a(all)</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">mkdir &nbsp; &nbsp; &nbsp; &nbsp; 创建目录</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;-p &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 创建目录，若无父目录，则创建p(parent)</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">cd &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 切换目录</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">touch &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;创建空文件</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">echo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;创建带有内容的文件。</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">cat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;查看文件内容</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">cp &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;拷贝</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">mv &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 移动或重命名</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">rm &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 删除文件</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;-r &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;递归删除，可删除子目录及文件</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;-f &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;强制删除</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">find &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;在文件系统中搜索某文件</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">wc &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;统计文本中行数、字数、字符数</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">grep &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 在文本文件中查找某个字符串</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">rmdir &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 删除空目录</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">tree &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 树形结构显示目录，需要安装tree包</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">pwd &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;显示当前目录</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">ln &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;创建链接文件</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">more、less &nbsp;分页显示文本文件内容</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">head、tail &nbsp; &nbsp;显示文件头、尾内容</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">ctrl+alt+F1 &nbsp;命令行全屏模式</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp;</span></p>
<p><span style="font-size: 18px; font-family: \'comic sans ms\', sans-serif;"><strong><a name="systemManager"></a>系统管理命令</strong></span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">stat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;显示指定文件的详细信息，比ls更详细</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">who &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 显示在线登陆用户</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">whoami &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;显示当前操作用户</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">hostname &nbsp; &nbsp; &nbsp;显示主机名</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">uname &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 显示系统信息</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">top &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;动态显示当前耗费资源最多进程信息</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">ps &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;显示瞬间进程状态 ps -aux</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">du &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;查看目录大小 du -h /home带有单位显示目录信息</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">df &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;查看磁盘大小 df -h 带有单位显示磁盘信息</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">ifconfig &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;查看网络情况</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">ping &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;测试网络连通</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">netstat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;显示网络状态信息</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">man &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;命令不会用了，找男人&nbsp; 如：man ls</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">clear &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;清屏</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">alias &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 对命令重命名 如：alias showmeit="ps -aux" ，另外解除使用unaliax showmeit</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">kill &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 杀死进程，可以先用ps 或 top命令查看进程的id，然后再用kill命令杀死进程。</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp;</span></p>
<p><span style="font-size: 18px; font-family: \'comic sans ms\', sans-serif;"><strong><a name="tar"></a>打包压缩相关命令</strong></span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">gzip：</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">bzip2：</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">tar: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;打包压缩</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;-c &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;归档文件</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;-x &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;压缩文件</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;-z &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;gzip压缩文件</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;-j &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;bzip2压缩文件</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;-v &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;显示压缩或解压缩过程 v(view)</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;-f &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;使用档名</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">例：</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">tar -cvf /home/abc.tar /home/abc &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;只打包，不压缩</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">tar -zcvf /home/abc.tar.gz /home/abc &nbsp; &nbsp; &nbsp; &nbsp;打包，并用gzip压缩</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">tar -jcvf /home/abc.tar.bz2 /home/abc &nbsp; &nbsp; &nbsp;打包，并用bzip2压缩</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">当然，如果想解压缩，就直接替换上面的命令&nbsp; tar -cvf&nbsp; / tar -zcvf&nbsp; / tar -jcvf 中的“c” 换成“x” 就可以了。</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp;</span></p>
<p><span style="font-size: 18px; font-family: \'comic sans ms\', sans-serif;"><strong><a name="shutdown"></a>关机/重启机器</strong></span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">shutdown</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;-r &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 关机重启</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;-h &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 关机不重启</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;now &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;立刻关机</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">halt &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 关机</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">reboot &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;重启</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp;</span></p>
<p><span style="font-size: 18px; font-family: \'comic sans ms\', sans-serif;"><strong><a name="grep"></a>Linux管道</strong></span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">将一个命令的标准输出作为另一个命令的标准输入。也就是把几个命令组合起来使用，后一个命令除以前一个命令的结果。</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">例：grep -r "close" /home/* | more &nbsp; &nbsp; &nbsp; 在home目录下所有文件中查找，包括close的文件，并分页输出。</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp;</span></p>
<p><span style="font-size: 18px; font-family: \'comic sans ms\', sans-serif;"><strong><a name="dpkg"></a>Linux软件包管理</strong></span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;"><strong>dpkg</strong> (Debian Package)管理工具，软件包名以.deb后缀。这种方法适合系统不能联网的情况下。</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">比如安装tree命令的安装包，先将tree.deb传到Linux系统中。再使用如下命令安装。</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">sudo dpkg -i tree_1.5.3-1_i386.deb &nbsp; &nbsp; &nbsp; &nbsp; 安装软件</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">sudo dpkg -r tree &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 卸载软件</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp;</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">注：将tree.deb传到Linux系统中，有多种方式。VMwareTool，使用挂载方式；使用winSCP工具等；</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;"><strong>APT</strong>（Advanced Packaging Tool）高级软件工具。这种方法适合系统能够连接互联网的情况。</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">依然以tree为例</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">sudo apt-get install tree &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 安装tree</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">sudo apt-get remove tree &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 卸载tree</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">sudo apt-get update &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 更新软件</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">sudo apt-get upgrade &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp;</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">将.<strong>rpm</strong>文件转为.<strong>deb</strong>文件</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">.rpm为RedHat使用的软件格式。在Ubuntu下不能直接使用，所以需要转换一下。</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">sudo alien abc.rpm</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp;</span></p>
<p><span style="font-size: 18px; font-family: \'comic sans ms\', sans-serif;"><strong><a name="vim"></a>vim使用</strong></span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">vim三种模式：命令模式、插入模式、编辑模式。使用ESC或i或：来切换模式。</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">命令模式下：</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">:q &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;退出</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">:q! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 强制退出</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">:wq &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 保存并退出</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">:set number &nbsp; &nbsp; 显示行号</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">:set nonumber &nbsp;隐藏行号</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">/apache &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;在文档中查找apache 按n跳到下一个，shift+n上一个</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">yyp &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 复制光标所在行，并粘贴</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">h(左移一个字符←)、j(下一行↓)、k(上一行↑)、l(右移一个字符→)</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">&nbsp;</span></p>
<p><span style="font-size: 18px; font-family: \'comic sans ms\', sans-serif;"><strong><a name="usergroup"></a>用户及用户组管理</strong></span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">/etc/passwd &nbsp; &nbsp;存储用户账号</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">/etc/group &nbsp; &nbsp; &nbsp; 存储组账号</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">/etc/shadow &nbsp; &nbsp;存储用户账号的密码</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">/etc/gshadow &nbsp;存储用户组账号的密码</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">useradd 用户名</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">userdel 用户名</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">adduser 用户名</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">groupadd 组名</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">groupdel 组名</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">passwd root &nbsp; &nbsp; 给root设置密码</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">su root</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">su - root&nbsp;</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">/etc/profile &nbsp; &nbsp; 系统环境变量</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">bash_profile &nbsp; &nbsp; 用户环境变量</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">.bashrc &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;用户环境变量</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">su user &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;切换用户，加载配置文件.bashrc</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">su - user &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;切换用户，加载配置文件/etc/profile ，加载bash_profile</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif;"><strong>更改文件的用户及用户组</strong></span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif;">sudo chown [-R] owner[:group] {File|Directory}</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif;">例如：还以jdk-7u21-linux-i586.tar.gz为例。属于用户hadoop，组hadoop</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif;">要想切换此文件所属的用户及组。可以使用命令。</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif;">sudo chown root:root&nbsp;jdk-7u21-linux-i586.tar.gz</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif;">&nbsp;</span></p>
<p><span style="font-size: 18px; font-family: \'comic sans ms\', sans-serif;"><strong><a name="chmod"></a>文件权限管理</strong></span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">三种基本权限</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">R &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 读 &nbsp; &nbsp; &nbsp; &nbsp; 数值表示为4</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">W &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;写 &nbsp; &nbsp; &nbsp; &nbsp; 数值表示为2</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">X &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 可执行 &nbsp;数值表示为1</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;"><img src="http://images.cnitblog.com/blog/352072/201402/091549405142313.png" alt=""></span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">如图所示，jdk-7u21-linux-i586.tar.gz文件的权限为-rw-rw-r--</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">-rw-rw-r--一共十个字符，分成四段。</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">第一个字符“-”表示普通文件；这个位置还可能会出现“l”链接；“d”表示目录</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">第二三四个字符“rw-”表示当前所属用户的权限。 &nbsp; 所以用数值表示为4+2=6</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">第五六七个字符“rw-”表示当前所属组的权限。 &nbsp; &nbsp; &nbsp;所以用数值表示为4+2=6</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">第八九十个字符“r--”表示其他用户权限。 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;所以用数值表示为2</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif;"><span style="font-size: 14px;">所以操作此文件的权限用数值表示为662</span><span style="font-size: 14px;">&nbsp;</span></span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif;"><strong><span style="font-size: 14px;">更改权限</span></strong></span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">sudo chmod [u所属用户 &nbsp;g所属组 &nbsp;o其他用户 &nbsp;a所有用户] &nbsp;[+增加权限 &nbsp;-减少权限] &nbsp;[r &nbsp;w &nbsp;x] &nbsp; 目录名&nbsp;</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">例如：有一个文件filename，权限为“-rw-r----x” ,将权限值改为"-rwxrw-r-x"，用数值表示为765</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">sudo chmod u+x g+w o+r &nbsp;filename</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">上面的例子可以用数值表示</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif; font-size: 14px;">sudo chmod 765 filename</span></p>
<p><span style="font-family: \'comic sans ms\', sans-serif;">&nbsp;</span></p></div><div id="MySignature"><p>如果，您认为阅读这篇博客让您有些收获，不妨点击一下右下角的【<strong>推荐</strong>】按钮。<br>如果，您希望更容易地发现我的新博客，不妨点击一下右下角的【<strong>关注 老魏</strong>】。<br>因为，我的写作热情也离不开您的肯定支持。</p><p>感谢您的阅读，如果您对我的博客所讲述的内容有兴趣，请继续关注我的后续博客，我是【<strong>老魏</strong>】 。</p></div>
<div class="clear"></div>
<div id="blog_post_info_block">
<div id="BlogPostCategory"></div>
<div id="EntryTag"></div>
<div id="blog_post_info"><div id="green_channel">
<a href="javascript:void(0);" id="green_channel_digg" onclick="DiggIt(3541414,cb_blogId,1);green_channel_success(this,\'谢谢推荐！\');">好文要顶</a>
<a id="green_channel_follow" onclick="c_follow();" href="javascript:void(0);">关注我</a>
<a id="green_channel_favorite" onclick="AddToWz(cb_entryId);return false;" href="javascript:void(0);">收藏该文</a><a id="green_channel_contact" href="//msg.cnblogs.com/send/weifield" target="_blank">联系我</a>
<a id="green_channel_weibo" href="javascript:void(0);" title="分享至新浪微博" onclick="ShareToTsina()"><img src="//common.cnblogs.com/images/icon_weibo_24.png" alt=""></a>
<a id="green_channel_wechat" href="javascript:void(0);" title="分享至微信" onclick="shareOnWechat()"><img src="//common.cnblogs.com/images/wechat.png" alt=""></a>
</div>
<div id="author_profile">
<div id="author_profile_info" class="author_profile_info">
<a href="http://home.cnblogs.com/u/laov/" target="_blank"><img src="http://pic.cnblogs.com/face/u352072.gif?id=18105439" class="author_avatar" alt=""></a>
<div id="author_profile_detail" class="author_profile_info">
<a href="http://home.cnblogs.com/u/laov/">weifield</a><br>
<a href="http://home.cnblogs.com/u/laov/followees">关注 - 23</a><br>
<a href="http://home.cnblogs.com/u/laov/followers">粉丝 - 89</a>
</div>
</div>
<div class="clear"></div>
<div id="author_profile_honor"></div>
<div id="author_profile_follow">
    <a href="javascript:void(0);" onclick="c_follow();return false;">+加关注</a>
</div>
</div>
<div id="div_digg">										
    <div class="diggit" onclick="votePost(3541414,\'Digg\')">
        <span class="diggnum" id="digg_count">10</span>
    </div>
	<div class="buryit" onclick="votePost(3541414,\'Bury\')"> 
		<span class="burynum" id="bury_count">0</span>
	</div>
	<div class="clear"></div>	
	<div class="diggword" id="digg_tips">
    (请您对文章做出评价)
    </div>	
</div>
</div>
<div class="clear"></div>
<div id="post_next_prev"><a href="http://www.cnblogs.com/laov/p/3541213.html" class="p_n_p_prefix">« </a> 上一篇：<a href="http://www.cnblogs.com/laov/p/3541213.html" title="发布于2014-02-09 08:46">【Linux】SecureCRT连接Linux乱码</a><br><a href="http://www.cnblogs.com/laov/p/4134351.html" class="p_n_p_prefix">» </a> 下一篇：<a href="http://www.cnblogs.com/laov/p/4134351.html" title="发布于2014-12-01 09:56">JAVA开发第一步——JDK 安装</a><br></div>
</div>


		</div>
		<div class="postDesc">posted @ <span id="post-date">2014-02-09 16:33</span> <a href="http://www.cnblogs.com/laov/">weifield</a> 阅读(<span id="post_view_count">76726</span>) 评论(<span id="post_comment_count">2</span>)  <a href="http://i.cnblogs.com/EditPosts.aspx?postid=3541414" rel="nofollow">编辑</a> <a href="#" onclick="AddToWz(3541414);return false;">收藏</a></div>
	</div>
	<script type="text/javascript">var allowComments=true,isLogined=false,cb_blogId=102317,cb_entryId=3541414,cb_blogApp=currentBlogApp,cb_blogUserGuid=\'d08689df-8f11-e111-b422-842b2b196315\',cb_entryCreatedDate=\'2014/2/9 16:33:00\';loadViewCount(cb_entryId);</script>
	
</div><!--end: topics 文章、评论容器-->
</div><a name="!comments"></a><div id="blog-comments-placeholder"><div id="comments_pager_top"></div>
<!--done-->
<div class="feedback_area_title">评论列表</div>
<div class="feedbackNoItems"></div>
	

		<div class="feedbackItem">
			<div class="feedbackListSubtitle">
				<div class="feedbackManage">
					&nbsp;&nbsp;<span class="comment_actions"></span>
				</div>
				<a href="#2872017" class="layer">#1楼</a><a name="2872017" id="comment_anchor_2872017"></a>  <span class="comment_date">2014-02-09 18:41</span> <a id="a_comment_author_2872017" href="http://www.cnblogs.com/codezyc/" target="_blank">codezyc</a> <a href="http://msg.cnblogs.com/send/codezyc" title="发送站内短消息" class="sendMsg2This">&nbsp;</a>
			</div>
			<div class="feedbackCon">
				<div id="comment_body_2872017" class="blog_comment_body">谢谢楼主的分享，学习了。</div><div class="comment_vote"><a href="javascript:void(0);" class="comment_digg" onclick="return voteComment(2872017,\'Digg\',this)">支持(0)</a><a href="javascript:void(0);" class="comment_bury" onclick="return voteComment(2872017,\'Bury\',this)">反对(0)</a></div>
			</div>
		</div>
	
		<div class="feedbackItem">
			<div class="feedbackListSubtitle">
				<div class="feedbackManage">
					&nbsp;&nbsp;<span class="comment_actions"></span>
				</div>
				<a href="#3279544" class="layer">#2楼</a><a name="3279544" id="comment_anchor_3279544"></a><span id="comment-maxId" style="display:none;">3279544</span><span id="comment-maxDate" style="display:none;">2015/10/7 19:51:21</span>  <span class="comment_date">2015-10-07 19:51</span> <a id="a_comment_author_3279544" href="http://home.cnblogs.com/u/764957/" target="_blank">ice-cream</a> <a href="http://msg.cnblogs.com/send/ice-cream" title="发送站内短消息" class="sendMsg2This">&nbsp;</a>
			</div>
			<div class="feedbackCon">
				<div id="comment_body_3279544" class="blog_comment_body">xiexie lz</div><div class="comment_vote"><a href="javascript:void(0);" class="comment_digg" onclick="return voteComment(3279544,\'Digg\',this)">支持(0)</a><a href="javascript:void(0);" class="comment_bury" onclick="return voteComment(3279544,\'Bury\',this)">反对(0)</a></div>
			</div>
		</div>
	<div id="comments_pager_bottom"></div></div><script type="text/javascript">var commentManager = new blogCommentManager();commentManager.renderComments(0);</script>
<div id="comment_form" class="commentform">
<a name="commentform"></a>
<div id="divCommentShow"></div>
<div id="comment_nav"><span id="span_refresh_tips"></span><a href="javascript:void(0);" onclick="return RefreshCommentList();" id="lnk_RefreshComments" runat="server" clientidmode="Static">刷新评论</a><a href="#" onclick="return RefreshPage();">刷新页面</a><a href="#top">返回顶部</a></div>
<div id="comment_form_container"><div class="login_tips">注册用户登录后才能发表评论，请 <a rel="nofollow" href="javascript:void(0);" class="underline" onclick="return login(\'commentform\');">登录</a> 或 <a rel="nofollow" href="javascript:void(0);" class="underline" onclick="return register();">注册</a>，<a href="http://www.cnblogs.com">访问</a>网站首页。</div></div>
<div class="ad_text_commentbox" id="ad_text_under_commentbox"></div>
<div id="ad_t2"><a href="http://www.ucancode.com/index.htm" target="_blank">【推荐】50万行VC++源码: 大型组态工控、电力仿真CAD与GIS源码库</a><br><a href="http://www.rongcloud.cn/" target="_blank">【推荐】融云即时通讯云－豆果美食、Faceu等亿级APP都在用</a><br></div>
<div id="opt_under_post"></div>
<div id="ad_c1" class="c_ad_block"><a href="http://www.gcpowertools.com.cn/products/spreadjs/?utm_source=cnblogs&amp;utm_medium=blogpage&amp;utm_term=bottom&amp;utm_content=SpreadJS&amp;utm_campaign=community" target="_blank"><img src="http://images2015.cnblogs.com/news/24442/201603/24442-20160331135229801-1159021103.png" alt="" height="250" width="300"></a></div>
<div id="under_post_news"><div class="itnews c_ad_block"><b>最新IT新闻</b>:<br> ·  <a href="http://news.cnblogs.com/n/543709/" target="_blank">解密：戴上微软HoloLens之后看到的世界是怎样的？</a><br> ·  <a href="http://news.cnblogs.com/n/543708/" target="_blank">马航MH370飞机残片终于找到了！</a><br> ·  <a href="http://news.cnblogs.com/n/543707/" target="_blank">微信发布Web开发者工具V0.5.0新增X5 Blink内核调试功能</a><br> ·  <a href="http://news.cnblogs.com/n/543706/" target="_blank">康宁新技术亮相：即将迎来多彩LOGO时代</a><br> ·  <a href="http://news.cnblogs.com/n/543705/" target="_blank">我们所知的宇宙学都是错的?宇宙膨胀速度超预期</a><br>» <a href="http://news.cnblogs.com/" title="IT新闻" target="_blank">更多新闻...</a></div></div>
<div id="ad_c2" class="c_ad_block"><a href="https://www.jpush.cn/?from=cnblogs01" target="_blank"><img src="http://images2015.cnblogs.com/news/24442/201603/24442-20160307140747632-1210035054.jpg" alt="" height="60" width="468"></a></div>
<div id="under_post_kb"><div class="itnews c_ad_block" id="kb_block"><b>最新知识库文章</b>:<br><div id="kb_recent"> ·  <a href="http://kb.cnblogs.com/page/543110/" target="_blank">架构漫谈（九）：理清技术、业务和架构的关系</a><br> ·  <a href="http://kb.cnblogs.com/page/542725/" target="_blank">架构漫谈（八）：从架构的角度看如何写好代码</a><br> ·  <a href="http://kb.cnblogs.com/page/542257/" target="_blank">架构漫谈（七）：不要空设架构师这个职位，给他实权</a><br> ·  <a href="http://kb.cnblogs.com/page/541740/" target="_blank">架构漫谈（六）：软件架构到底是要解决什么问题？</a><br> ·  <a href="http://kb.cnblogs.com/page/541188/" target="_blank">架构漫谈（五）：什么是软件</a><br></div>» <a href="http://kb.cnblogs.com/" target="_blank">更多知识库文章...</a></div></div>
<div id="HistoryToday" class="c_ad_block"></div>
<script type="text/javascript">
$(function () {
    setTimeout(function () { incrementViewCount(cb_entryId); }, 50);
    deliverAdT2();
    deliverAdC1();
    deliverAdC2();    
    loadNewsAndKb();
    loadBlogSignature();
    LoadPostInfoBlock(cb_blogId, cb_entryId, cb_blogApp, cb_blogUserGuid);
    GetPrevNextPost(cb_entryId, cb_blogId, cb_entryCreatedDate);
    loadOptUnderPost();
    GetHistoryToday(cb_blogId, cb_blogApp, cb_entryCreatedDate);    
});
</script>
</div>


	</div>
';?>