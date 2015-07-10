<?php 
/**
 * 侧边栏
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<?php if (_g('sidetop') == 1){ ?>
<div class="mail-box xyshare mb10">
	<h3>欢迎分享<?php echo $blogname; ?></h3>
	<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a></div>
<script>
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
  <div class="icogroup">
	<ul class="clearfix">
	  <li><img src="<?php echo TEMPLATE_URL; ?>images/ico_04.png" /><a href="<?php echo BLOG_URL; ?>rss.php" target="_blank">订阅RRS</a></li>
	  <li><img src="<?php echo TEMPLATE_URL; ?>images/ico_05.png" /><a href="<?php echo _g('weibourl'); ?>" target="_blank">新浪微博</a></li>
	  <li style="padding:0;"><img src="<?php echo TEMPLATE_URL; ?>images/ico_06.png" /><a href="<?php echo _g('qqturl'); ?>" target="_blank">腾讯微博</a></li>
	</ul>
  </div>
</div>
<?php }elseif(_g('sidetop') == 2){ ?>
<div class="mail-box mb10">
  <h3>欢迎订阅<?php echo $blogname; ?></h3>
  <div class="pt15 mb15"><script >var nId = "<?php echo _g('mlistkey'); ?>",nWidth="auto",sColor="light",sText="填写您的邮件地址，订阅我们的精彩内容：" ;</script> 
	<script src="http://list.qq.com/zh_CN/htmledition/js/qf/page/qfcode.js" charset="gb18030"></script></div>
  <div class="icogroup">
	<ul class="clearfix">
	  <li><img src="<?php echo TEMPLATE_URL; ?>images/ico_04.png" /><a href="<?php echo BLOG_URL; ?>rss.php" target="_blank">订阅RRS</a></li>
	  <li><img src="<?php echo TEMPLATE_URL; ?>images/ico_05.png" /><a href="<?php echo _g('weibourl'); ?>" target="_blank">新浪微博</a></li>
	  <li style="  padding:0;"><img src="<?php echo TEMPLATE_URL; ?>images/ico_06.png" /><a href="<?php echo _g('qqturl'); ?>" target="_blank">腾讯微博</a></li>
	</ul>
  </div>
</div>
<?php }else{?><?php }?>
<?php if(_g('trad')!=""): ?>
<div class="ad-box mb20"><?php echo _g('trad'); ?></div>
<?php endif;?>
<?php if(_g('sidepid')!=""&&_g('sidepid')!=0): ?>
<div class="rtpic">
	<div class="xyti">
        <h3><?php echo _g('sidepti'); ?></h3>
        <div class="tline"></div>
    </div>
    <ul class="tc">
    	<?php sideplist(_g('sidepid'),_g('sidepnum')); ?>
    </ul>
</div>
<div class="bk20"></div>
<?php endif;?>
<ul id="sidebar">
<?php 
$widgets = !empty($options_cache['widgets1']) ? unserialize($options_cache['widgets1']) : array();
doAction('diff_side');
foreach ($widgets as $val)
{
	$widget_title = @unserialize($options_cache['widget_title']);
	$custom_widget = @unserialize($options_cache['custom_widget']);
	if(strpos($val, 'custom_wg_') === 0)
	{
		$callback = 'widget_custom_text';
		if(function_exists($callback))
		{
			call_user_func($callback, htmlspecialchars($custom_widget[$val]['title']), $custom_widget[$val]['content']);
		}
	}else{
		$callback = 'widget_'.$val;
		if(function_exists($callback))
		{
			preg_match("/^.*\s\((.*)\)/", $widget_title[$val], $matchs);
			$wgTitle = isset($matchs[1]) ? $matchs[1] : $widget_title[$val];
			call_user_func($callback, htmlspecialchars($wgTitle));
		}
	}
}
?>
</ul>
<!--当前模板制作：易玩稀有 www.ewceo.com-->
