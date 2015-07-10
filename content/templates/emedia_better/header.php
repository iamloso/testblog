<?php
/*
Template Name:eMedia媒体范儿[尊享版]
Description:<br>当前模板需配合模板设置<a href="http://www.emlog.net/plugin/144" title="点击前往下载" target="_blank">插件</a>使用，模板相关问题可参阅模板压缩包内文本说明文件或点<a href="http://www.ewceo.com/emedia.html" target="_blank">这里</a>，如有其它定制修改需求可点击上方作者链接，若无疑问可点击下方设置开始<br>
Version:2.4
Author:易玩稀有-尔今
Author Url:http://www.ewceo.com
Sidebar Amount:1
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
if(function_exists('emLoadJQuery')) {
    emLoadJQuery();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
<link href="<?php echo TEMPLATE_URL; ?>css/base.css" rel="stylesheet" type="text/css" />
<link href="<?php echo TEMPLATE_URL; ?>css/style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
<?php doAction('index_head'); ?>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/script.js"></script>
</head>
<body>
<div class="wrapper-outer">
<div class="topBar">
  <div class="wrapper">
    <div class="t-fl"><?php echo $bloginfo; ?></div>
    <div class="t-fr"><?php if(ROLE == 'admin' || ROLE == 'writer'): ?><a href="<?php echo BLOG_URL; ?>admin/">管理</a><a href="<?php echo BLOG_URL; ?>admin/?action=logout">退出</a><?php else: ?><a href="<?php echo BLOG_URL; ?>admin/">登录</a><?php endif; ?><a href="<?php echo BLOG_URL; ?>m/">简洁手机版</a><a href="<?php echo BLOG_URL; ?>rss.php" target="_blank">RSS</a></div>
  </div>
</div>
<!--topBar end-->
<div class="header clearfix">
	<div class="logo">
        <?php if (_g('logotype') == image) :?>
			<a href="<?php echo BLOG_URL; ?>"><img src="<?php echo _g('logopic'); ?>" alt="<?php echo $blogname; ?>" /></a>
		<?php else: ?>
        	<a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a>
        <?php endif;?>
	</div>
    <div class="search-fr">
        <div class="ah_nav_zuo_lim">
        <form action="<?php echo BLOG_URL; ?>index.php" method="get" id="search">
        <input name="keyword" value="请输入关键字" onblur="if(this.value==''){this.value='请输入关键字';}" onfocus="if(this.value=='请输入关键字'){this.value=''}" class="seach_cha" type="text">
        <input value="搜索" class="seach_dian" type="submit">
        </form>
        </div>
    </div>
</div>
<!--header end-->
<div class="wrapper">
<div class="navbar clearfix">
  <div class="pull-left"> 
    <div class="navbg">
      <div class="col960">
        <ul id="navul" class="cl">
        	<?php blog_navi();?>
        </ul>
      </div>
    </div>
  </div>
  <div class="pull-right">
	<ul>
    <li class="weixin"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo _g('ctqq'); ?>&site=qq&menu=yes" title="QQ联系" target="_blank">QQ联系</a></li>
    <ul/>
    	
  </div>
</div>
<!--navbar end-->  