<?php 
/**
 * 微语部分
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<!--wrapper begin-->
<div class="wrapper clearfix pt10">
  <div class="con-left">
    <div class="positionbar">
      <ul  class="bread clearfix">
        <li class="ico"><img src="<?php echo TEMPLATE_URL; ?>images/ico_07.png" /></li>
        <li><a href="<?php echo BLOG_URL; ?>">首页</a></li>
        <li class="last">微语</li>
      </ul>
    </div>
    <div class="art-content">
		<div id="tw">
    		<ul>
    <?php 
    foreach($tws as $val):
    $author = $user_cache[$val['author']]['name'];
    $avatar = empty($user_cache[$val['author']]['avatar']) ? 
                BLOG_URL . 'admin/views/images/avatar.jpg' : 
                BLOG_URL . $user_cache[$val['author']]['avatar'];
    $tid = (int)$val['id'];
    $img = empty($val['img']) ? "" : '<a title="查看图片" href="'.BLOG_URL.str_replace('thum-', '', $val['img']).'" target="_blank"><img src="'.BLOG_URL.str_replace('thum-', '', $val['img']).'" class="tp" /></a>';
    ?> 
    <li>
        <div class="tupic"><img src="<?php echo $avatar; ?>" /></div>
        <div class="tpost f14">
			<?php echo $val['t'].$img; ?>
            <div class="twter f12"><?php echo '#'.$tid.'#&emsp;'.$author.'&emsp;'.$val['date'];?></div>
        </div>
    </li>
    <?php endforeach;?>
        </ul>
        <div class="pagination box">
            <?php echo $pageurl;?>
        </div>
    </div>
    </div>
    <!--内容结束-->
    <div class="bk30"></div>
    <!--articleList end-->
  </div>
  <!--con-left end-->
  <div class="con-right">
<?php
include View::getView('side');
?>
   </div>
  <!--con-left end-->
</div>
<!--wrapper end-->
</div>
<?php
include View::getView('footer');
?>