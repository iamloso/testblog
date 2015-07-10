<?php 
/**
 * 站点列表模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
if($pageurl == Url::logPage()){
	include View::getView('index');
	exit;
}
?>
<div class="bk8"></div>
<div class="wrapper clearfix pt10">
  <div class="con-left">
    <div class="positionbar">
      <ul  class="bread clearfix">
        <li class="ico"><img src="<?php echo TEMPLATE_URL; ?>images/ico_07.png" /></li>
        <li><a href="<?php echo BLOG_URL; ?>">首页</a></li>
        <li class="last">
<?php if ($params[1]=='sort'){ ?>
		<?php echo '<a href="'.Url::sort($sortid).'">'.$sortName.'</a>';?>
<?php }elseif ($params[1]=='tag'){ ?>
			包含标签 <b><?php echo urldecode($params[2]);?></b> 的所有文章
<?php }elseif($params[1]=='author'){ ?>
			作者 <b><?php echo blog_author($author);?></b> 的所有文章
<?php }elseif($params[1]=='keyword'){ ?>
            搜索 <b><?php echo urldecode($params[2]);?></b> 的结果
<?php }else{?><?php }?>
        </li>
      </ul>
    </div>
<?php doAction('index_loglist_top'); ?>
    <!--articleList begin-->
    <ul class="articleCon">
<?php 
if (!empty($logs)):
foreach($logs as $key=>$value): 
$search_pattern = '%<img[^>]*?src=[\'\"]((?:(?!\/admin\/|>).)+?)[\'\"][^>]*?>%s';
preg_match($search_pattern, $value['content'], $img);
$value['img'] = isset($img[1])?$img[1]:TEMPLATE_URL.'pic/ap'.rand(1,10).'.jpg';
?>
       <li class="clearfix">
        <div class="thumb"><a href="<?php echo $value['log_url']; ?>" target="_blank"> <img src="<?php echo $value['img']; ?>" width="200" height="131" /> </a></div>
        <div class="mark">
          <h3><a href="<?php echo $value['log_url']; ?>" target="_blank"><?php echo $value['log_title']; ?></a></h3>
          <p class="icogroup"><span class="ico-list"><span class="icon icon-01"></span>作者：<?php blog_author($value['author']); ?></span><span class="ico-list"><span class="icon icon-02"></span><?php echo gmdate('Y.n.j', $value['date']); ?></span><span class="ico-list"><span class="icon icon-03"></span><?php blog_sort($value['logid']); ?></span><span class="ico-list"><span class="icon icon-00"></span><?php echo $value['views']; ?>(<?php echo $value['comnum']; ?>)</span></p>
          <p class="info"><?php echo subString(strip_tags($value['log_description']),0,100,"..."); ?></p>
        </div>
        <a href="<?php echo $value['log_url']; ?>" class="more" target="_blank">阅读全文</a>
    </li>
<?php 
endforeach;
?>
          </ul>
<?php 
else:
?>
		<div class="nolog">
            <h2>暂无内容</h2>
            <p><br />抱歉，没有符合您查询条件的结果。</p>
		</div>
<?php endif;?>
    <div class="bk15"></div>
    <div class="pagination">
    	<?php echo $page_url;?>
    </div>
  </div>
  <!--con-left end-->
  <div class="con-right">
<?php
include View::getView('side');
?>
	</div>
</div>
<div class="bk8"></div>
<div class="wrapper ibtad">
    <?php echo _g('bvad'); ?>
</div>
<!--wrapper end-->
<?php if($pageurl == Url::logPage()): ?>
    <div class="frend-link">
      <h1><span class="fl">友情链接</span><span class="fr"><a href="<?php echo _g('flinkp'); ?>">申请&amp;说明</a></span></h1>
      <dl class="clearfix">
          <?php ilinks(); ?>
      </dl>
    </div>
<?php endif; ?>
</div>
<?php
include View::getView('footer');
?>