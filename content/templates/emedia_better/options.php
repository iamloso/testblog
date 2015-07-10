<?php
/*
 * eMedia模板配置文件[尊享版]
/*@support tpl_options*/
!defined('EMLOG_ROOT') && exit('access deined!');
$options = array(
	'logotype' => array(
		'type' => 'radio',
		'name' => '设置LOGO类型',
		'values' => array(
			'image' => '图片',
			'text' => '文字'
		),
		'default' => 'image',
		'description' => '设置类型为文字时显示站点标题&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.ewceo.com/" target="_blank">联系模板作者</a>',
	),
	'logopic' => array(
        'type' => 'image',
        'name' => '上传LOGO图片',
        'values' => array(
            TEMPLATE_URL . 'images/emedialogo.png',
        ),
		'description' => '默认尺寸为280X60像素透明PNG图片',
    ),
	'ctqq' => array(
		'type' => 'text',
		'name' => '联系QQ号',
		'default' => '123456789',
	),
	'slidepid' => array(
		'type' => 'text',
		'name' => '首页轮播图分类ID',
		'default' => '1,2',
		'description' => '用英文逗号隔开可同时指定多个分类，<a href="http://www.ewceo.com/post-1082.html" target="_blank">分类ID查看方法</a>',
	),
	'slidepnum' => array(
		'type' => 'text',
		'name' => '首页轮播图片数量',
		'default' => '3',
	),
	'icmshowid' => array(
		'type' => 'text',
		'name' => '首页文字列表块分类ID',
		'default' => '1|2|3|4|5|6|7|8',
		'description' => '第一个数字即为第一块分类ID（以此类推），必须用 | 间隔！为空则不显示，<a href="http://www.ewceo.com/post-1082.html" target="_blank">分类ID查看方法</a>',
	),
	'inewshow' => array(
		'type' => 'radio',
		'name' => '首页最新内容列表',
		'values' => array(
			'yes' => '显示',
			'no' => '不显示'
		),
		'default' => 'yes',
	),
	'inewti' => array(
		'type' => 'text',
		'name' => '首页最新列表标题',
		'default' => '最新精彩内容',
	),
	'inewdes' => array(
		'type' => 'text',
		'name' => '首页最新列表描述',
		'default' => '专注行业与圈内动态，分享最具价值内容',
	),
	'sidetop' => array(
		'type' => 'radio',
		'name' => '右边栏上方模块',
		'values' => array(
			'1' => '显示分享模块',
			'2' => '显示订阅模块',
			'3' => '都不显示'
		),
		'default' => '2',
	),
	'mlistkey' => array(
		'type' => 'text',
		'name' => '邮箱订阅Key',
		'default' => '9e4134d3d890a95cce011a76e93b48d07035da3178bd1a6b',
		'description' => '如果有申请过腾讯邮件列表订阅组件，可直接填写专属Key字符串',
	),
	'weibourl' => array(
		'type' => 'text',
		'name' => '新浪微博地址',
		'default' => 'http://www.weibo.com/ewceo',
	),
	'qqturl' => array(
		'type' => 'text',
		'name' => '腾讯微博地址',
		'default' => 'http://t.qq.com/mxyctc',
	),
	'sidepti' => array(
		'type' => 'text',
		'name' => '右边栏图片分类标题',
		'default' => '图文推送',
	),
	'sidepid' => array(
		'type' => 'text',
		'name' => '右边栏图片分类ID',
		'default' => '1,2',
		'description' => '用英文逗号隔开可同时指定多个分类，为空则不显示，<a href="http://www.ewceo.com/post-1082.html" target="_blank">分类ID查看方法</a>',
	),
	'sidepnum' => array(
		'type' => 'text',
		'name' => '右边栏图片数量',
		'default' => '4',
		'description' => '建议为偶数不超过8为宜',
	),
	'flinkp' => array(
		'type' => 'text',
		'name' => '友链申请说明地址',
		'default' => 'http://www.ewceo.com/pr.html',
		'description' => '此项为空则不显示对应文字链接',
	),
	'trad' => array(
		'type' => 'text',
		'name' => '右边栏上广告',
		'multi' => true,
		'default' => '<a href="http://www.ewceo.com/" target="_blank"><img src="/content/templates/emedia_better/images/emad320.png" width="320" /></a>',
		'description' => '建议广告尺寸为320X120像素，为空则不显示，更多右侧广告可新建侧边栏自定义组件',
	),
	'bvad' => array(
		'type' => 'text',
		'name' => '底部通栏广告',
		'multi' => true,
		'default' => '<a href="http://www.ewceo.com/" target="_blank"><img src="/content/templates/emedia_better/images/emad950.gif" width="1000" /></a>',
		'description' => '建议广告尺寸为1000X100像素',
	),
	'logad' => array(
		'type' => 'text',
		'name' => '文章内容下广告',
		'multi' => true,
		'default' => '<a href="http://www.ewceo.com/" target="_blank"><img src="/content/templates/emedia_better/images/emad728.gif" width="650" /></a>',
		'description' => '建议广告尺寸为650X高100像素',
	),
	'footlink' => array(
		'type' => 'text',
		'name' => '页脚链接',
		'multi' => true,
		'default' => ' | <a href="http://www.ewceo.com/pr.html" target="_blank" >关于我们</a> | <a href="http://www.ewceo.com/pr.html" target="_blank" >联系我们</a> | <a href="http://www.ewceo.com/pr.html" target="_blank" >留言建议</a> | <a href="http://www.ewceo.com/pr.html" target="_blank" >广告合作</a>',
	),
	'qrcode' => array(
        'type' => 'image',
        'name' => '二维码图片',
        'values' => array(
            TEMPLATE_URL . 'images/ewqrcode.png',
        ),
		'description' => '<a href="http://www.baidu.com/s?wd=%B6%FE%CE%AC%C2%EB%C9%FA%B3%C9" target="_blank">二维码图生成？</a>',
    ),
	'qrtext' => array(
		'type' => 'text',
		'name' => '二维码说明文字',
		'default' => '欢迎使用手机扫描访问本站，还可以关注微信哦~',
	),
	'xycopyright' => array(
		'type' => 'text',
		'name' => '页脚版权信息',
		'multi' => true,
		'default' => 'Powered by <a href="http://www.emlog.net" target="_blank">emlog</a>&nbsp;&amp;&nbsp;Themes by <a href="http://www.ewceo.com" target="_blank">易玩稀有'
	),
);