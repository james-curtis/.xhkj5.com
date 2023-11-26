<?php if (!defined('THINK_PATH')) exit();?><?php $item_list = ff_mysql_list('sid:1;limit:5;cache_name:default;cache_time:default;order:list_pid asc,list_oid;sort:asc'); ?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="renderer" content="webkit">
<link rel="shortcut icon" href="<?php echo ($root); ?>favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo ($public_path); ?>bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo ($tpl_path); ?>system.css?<?php echo L("feifeicms_version");?>">
<script type="text/javascript">var cms = {
root:"<?php echo ($root); ?>",urlhtml:"<?php echo (C("url_html")); ?>",sid:"<?php echo ($site_sid); ?>",id:"<?php echo ($vod_id); ?><?php echo ($news_id); ?><?php echo ($special_id); ?>",userid:"<?php echo ($site_user_id); ?>",username:"<?php echo ($site_user_name); ?>",userforum:"<?php echo (C("user_forum")); ?>",page:"<?php echo (($list_page)?($list_page):1); ?>",domain_m:"<?php echo ($site_domain_m); ?>"
};</script><script type="text/javascript" src="<?php echo ($public_path); ?>jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo ($public_path); ?>bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo ($public_path); ?>js/system.js?<?php echo L("feifeicms_version");?>"></script>
<script type="text/javascript" src="<?php echo ($tpl_path); ?>system.js?<?php echo L("feifeicms_version");?>"></script>
<!--[if lt IE 9]>
<script src="<?php echo ($public_path); ?>html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="<?php echo ($public_path); ?>respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php $list_dir = 'index'; ?>
<title><?php echo ($site_title); ?></title>
<meta name="keywords" content="<?php echo ($site_keywords); ?>">
<meta name="description" content="<?php echo ($site_description); ?>">
</head>
<body class="index">
<nav class="navbar navbar-inverse" role="navigation" data-dir="#nav-<?php echo ($list_dir); ?>">
  <div class="container">
  	<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-feifeicms">
        <span class="glyphicon glyphicon-align-justify"></span>
      </button>      
      <?php if(($site_user_id)  >  "0"): ?><a class="navbar-toggle btn" href="<?php echo ff_url('user/center');?>">
          <span class="glyphicon glyphicon-user"></span>
        </a>
      <?php else: ?>
      	<a class="navbar-toggle btn ff-user user-login-modal" href="<?php echo ff_url('user/login');?>" data-href="<?php echo ff_url('user/center');?>">
          <span class="glyphicon glyphicon-user"></span>
        </a><?php endif; ?>
      <a class="navbar-toggle btn" href="<?php echo ff_url('ajax/search');?>">
        <span class="glyphicon glyphicon-search"></span>
      </a>
			<?php if(($model)  !=  "index"): ?><a class="navbar-toggle btn ff-goback" href="javascript:;"><span class="glyphicon glyphicon-chevron-left"></span></a><?php endif; ?>      
      <a class="navbar-brand" href="<?php echo ($root); ?>"><?php echo ($site_name); ?></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-feifeicms">
    	<ul class="nav navbar-nav navbar-left">
  <?php $_result=ff_mysql_nav('field:*;limit:0;cache_name:default;cache_time:default;order:nav_pid asc,nav_oid;sort:asc');if(is_array($_result)): $i = 0; $__LIST__ = array_slice($_result,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><?php if(!empty($feifei["nav_son"])): ?><li class="dropdown">
      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><?php echo ($feifei["nav_title"]); ?><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <?php if(is_array($feifei["nav_son"])): $i = 0; $__LIST__ = $feifei["nav_son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifeison): ++$i;$mod = ($i % 2 )?><?php if(($feifeison["nav_target"])  ==  "1"): ?><li><a href="<?php echo ($feifeison["nav_link"]); ?>" target="_blank"><?php echo ($feifeison["nav_title"]); ?></a></li>
         <?php else: ?>
          <li><a href="<?php echo ($feifeison["nav_link"]); ?>"><?php echo ($feifeison["nav_title"]); ?></a></li><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </li>
  <?php else: ?>
     <?php if(($feifei["nav_target"])  ==  "1"): ?><li id="nav-<?php echo ($feifei["nav_tips"]); ?>"><a href="<?php echo ($feifei["nav_link"]); ?>" target="_blank"><?php echo ($feifei["nav_title"]); ?></a></li>
    <?php else: ?>
      <li id="nav-<?php echo ($feifei["nav_tips"]); ?>"><a href="<?php echo ($feifei["nav_link"]); ?>"><?php echo ($feifei["nav_title"]); ?></a></li><?php endif; ?><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
  <li class="hidden-xs"><a class="ff-record-get" href="javascript:;" data-toggle="popover" data-container="body" data-html="true" data-trigger="manual" data-placement="bottom" data-content="loading...">看过</a></li>
  <li class="visible-sm"><a href="<?php echo ff_url('user/center');?>"><span class="glyphicon glyphicon-user"></span></a></li>
  <li class="visible-sm"><a href="<?php echo ff_url('ajax/search');?>"><span class="glyphicon glyphicon-search"></span></a></li>
</ul>
      <div class="visible-md visible-lg">
      	<form class="navbar-form navbar-right ff-search" data-sid="<?php echo ($site_sid); ?>" data-limit="<?php echo C('ui_search_limit');?>" role="search" action="<?php echo ($root); ?>index.php?s=vod-search-name" method="post">
  <div class="input-group input-group-sm">
    <span class="input-group-addon">
    	<?php if(($site_user_id)  >  "0"): ?><a class="text-muted" href="<?php echo ff_url('user/center');?>" data-toggle="tooltip" data-placement="bottom" title="我的用户中心"><span class="glyphicon glyphicon-user"></span></a>
      <?php else: ?>
      	<a class="text-muted ff-user user-login-modal" href="<?php echo ff_url('user/login');?>" data-href="<?php echo ff_url('user/center');?>" data-toggle="tooltip" data-placement="bottom" title="点击登录"><span class="glyphicon glyphicon-user"></span></a><?php endif; ?>
    </span>
    <input type="text" class="form-control ff-wd" id="ff-wd" name="wd" placeholder="请输入影片名称">
    <div class="input-group-btn">
      <button type="submit" class="btn btn-default" data-action="<?php echo ff_url('vod/search',array('name'=>'FFWD'), true);?>">
        <span class="glyphicon glyphicon-search"></span>
      </button>
    </div>
  </div>
</form>
      </div>
    </div>
  </div><!-- /.container -->
</nav><!-- /.navbar -->
<!-- -->
<div class="container ff-bg">
  <div class="row ff-row slide">
    <div class="col-md-8 ff-col">
      <?php $item_slide = ff_mysql_slide('limit:8;cache_name:default;cache_time:default;order:slide_oid;sort:asc'); ?>
<div class="carousel ff-slide" id="ff-slide" data-interval="<?php echo (C("ui_slide_index")); ?>">
  <!-- 轮播（Carousel）指标 -->
  <ol class="carousel-indicators">
    <?php if(is_array($item_slide)): $i = 0; $__LIST__ = array_slice($item_slide,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><?php if(($key)  ==  "0"): ?><li data-target="#ff-slide" data-slide-to="<?php echo ($key); ?>" class="active"></li>
    <?php else: ?>
    <li data-target="#ff-slide" data-slide-to="<?php echo ($key); ?>"></li><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
  </ol>   
  <!-- 轮播（Carousel）项目 -->
  <div class="carousel-inner">
    <?php if(is_array($item_slide)): $i = 0; $__LIST__ = array_slice($item_slide,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><?php if(($key)  ==  "0"): ?><div class="item active">
        <a href="<?php echo ($feifei["slide_url"]); ?>">
        <img src="<?php echo (ff_url_img($feifei["slide_pic"])); ?>" alt="<?php echo ($feifei["slide_name"]); ?>">
        <div class="carousel-caption"><?php echo ($feifei["slide_name"]); ?></div>
        </a>
      </div>
    <?php else: ?>
      <div class="item">
        <a href="<?php echo ($feifei["slide_url"]); ?>">
        <img src="<?php echo (ff_url_img($feifei["slide_pic"])); ?>" alt="<?php echo ($feifei["slide_name"]); ?>">
        <div class="carousel-caption"><?php echo ($feifei["slide_name"]); ?></div>
        </a>
      </div><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
  <!-- 轮播（Carousel）导航 -->
  <a class="carousel-control left" href="#ff-slide" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="carousel-control right" href="#ff-slide" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
    </div>
    <ul class="list-unstyled col-md-4 ff-col vod-item-img ff-img-90 visible-lg visible-md">
      <?php if(is_array($item_slide)): $i = 0; $__LIST__ = array_slice($item_slide,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><li class="col-md-6">
      	<p class="image">
          <a href="<?php echo ($feifei["slide_url"]); ?>">
            <img class="img-responsive img-thumbnail ff-img" data-original="<?php echo (ff_url_img($feifei["slide_logo"])); ?>" alt="<?php echo ($feifei["slide_name"]); ?>">
          </a>
        </p>
        <h4 class="ff-text-right">
          <a href="<?php echo ($feifei["slide_url"]); ?>"><?php echo (msubstr($feifei["slide_name"],0,22,true)); ?></a>
        </h4>
      </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <div class="clearfix"></div>
    <div class="col-xs-12 ff-col ff-text-right text-nowrap search-hot">
    	<strong>热门搜索：</strong><?php echo ($site_hot); ?>
    </div>
  </div>
</div>
<!-- -->
<div class="clearfix clearfix-ads"></div>
<div class="container ff-bg">
  <p class="text-center ff-ads">
    <?php echo ff_url_ads('960_90');?>
  </p>
</div>
<div class="clearfix clearfix-ads"></div>
<!-- -->
<?php if(is_array($item_list)): $i = 0; $__LIST__ = array_slice($item_list,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifeilist): ++$i;$mod = ($i % 2 )?><div class="container ff-bg">
<div class="page-header">
  <h2 class="ff-text-right">
    <span class="glyphicon glyphicon-film ff-text"></span>
    <a href="<?php echo ff_url_vod_show($feifeilist['list_id'],$feifeilist['list_dir'],1);?>"><?php echo ($feifeilist["list_name"]); ?></a>
    <span class="hidden-xs pull-right">
    <?php $list_extend = json_decode($feifeilist['list_extend'],true); ?>
    <?php $_result=explode(',',$list_extend['type']);if(is_array($_result)): $i = 0; $__LIST__ = array_slice($_result,0,12,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifeitype): ++$i;$mod = ($i % 2 )?><a href="<?php echo ff_url('vod/type',array('id'=>$feifeilist['list_id'],'type'=>urlencode($feifeitype),'area'=>'','year'=>'','star'=>'','state'=>'','order'=>'addtime','p'=>1),true);?>"><?php echo ($feifeitype); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
    <a class="ff-text" href="<?php echo ff_url('vod/type',array('id'=>$feifeilist['list_id'],'type'=>'','area'=>'','year'=>'','star'=>'','state'=>'','order'=>'addtime','p'=>1),true);?>">更多</a>
    </span>
    <small class="visible-xs pull-right">
    <a class="btn btn-success btn-xs" href="<?php echo ff_url('vod/type',array('id'=>$feifeilist['list_id'],'type'=>'','area'=>'','year'=>'','star'=>'','state'=>'','order'=>'addtime','p'=>1),true);?>">更多</a>
    </small>
  </h2>
</div>
<div class="row ff-row">
  <div class="col-md-8 ff-col">
    <ul class="list-unstyled vod-item-img ff-img-215">
      <?php $_result=ff_mysql_vod('cid:'.$feifeilist['list_id'].';limit:12;cache_name:default;cache_time:default;order:vod_stars desc,vod_addtime;sort:desc');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><li class="col-sm-3 col-xs-4">
	<p class="image">
    <a href="<?php echo ff_url_vod_read($feifei['list_id'],$feifei['list_dir'],$feifei['vod_id'],$feifei['vod_ename'],$feifei['vod_jumpurl']);?>">
      <img class="img-responsive img-thumbnail ff-img" data-original="<?php echo ff_url_img($feifei['vod_pic'],$feifei['vod_content']);?>" alt="<?php echo ($feifei["vod_name"]); ?>">
      <span class="continu"><?php switch($feifei["list_name"]): ?><?php case "电影":  ?><?php echo ($feifei["vod_gold"]); ?>分<?php break;?>
<?php case "电视剧":  ?><?php if(($feifei["vod_isend"])  ==  "1"): ?><?php if(($feifei["vod_total"])  >  "0"): ?><?php echo ($feifei["vod_total"]); ?>集全
    <?php else: ?>
      <?php echo (($feifei["vod_continu"])?($feifei["vod_continu"]):'全'); ?>集<?php endif; ?>
  <?php else: ?>
    <?php if($feifei['vod_continu'] == $feifei['vod_total']): ?><?php if(($feifei["vod_total"])  >  "0"): ?><?php echo ($feifei["vod_total"]); ?>集全
      <?php else: ?>
        <?php echo (($feifei["vod_continu"])?($feifei["vod_continu"]):'全'); ?>集<?php endif; ?>
    <?php elseif($feifei['vod_continu'] < $feifei['vod_total']): ?>
   	 <?php if(($feifei["vod_continu"])  >  "0"): ?>更新至<?php echo ($feifei["vod_continu"]); ?>集
      <?php else: ?>
        全集<?php endif; ?>
     <?php elseif($feifei['vod_continu'] > $feifei['vod_total']): ?>
     	全<?php echo (($feifei["vod_continu"])?($feifei["vod_continu"]):''); ?>集<?php endif; ?><?php endif; ?><?php break;?>
<?php case "动漫":  ?><?php if(($feifei["vod_isend"])  ==  "1"): ?><?php if(($feifei["vod_total"])  >  "0"): ?><?php echo ($feifei["vod_total"]); ?>集全
    <?php else: ?>
      <?php echo (($feifei["vod_continu"])?($feifei["vod_continu"]):'全'); ?>集<?php endif; ?>
  <?php else: ?>
    <?php if($feifei['vod_continu'] == $feifei['vod_total']): ?><?php if(($feifei["vod_total"])  >  "0"): ?><?php echo ($feifei["vod_total"]); ?>集全
      <?php else: ?>
        <?php echo (($feifei["vod_continu"])?($feifei["vod_continu"]):'全'); ?>集<?php endif; ?>
    <?php elseif($feifei['vod_continu'] < $feifei['vod_total']): ?>
      <?php if(($feifei["vod_continu"])  >  "0"): ?>更新至<?php echo ($feifei["vod_continu"]); ?>集
      <?php else: ?>
        全集<?php endif; ?>
     <?php elseif($feifei['vod_continu'] > $feifei['vod_total']): ?>
     	全<?php echo (($feifei["vod_continu"])?($feifei["vod_continu"]):''); ?>集<?php endif; ?><?php endif; ?><?php break;?>
<?php case "综艺":  ?><?php if(strlen($feifei['vod_continu']) > 6): ?><?php echo (date('Y-m-d',strtotime($feifei["vod_continu"]))); ?>
  <?php else: ?>
    <?php echo ($feifei["vod_continu"]); ?>期<?php endif; ?><?php break;?>
<?php default: ?>
高清<?php endswitch;?></span>
      <i class="playbg"></i>
      <i class="playbtn"></i>
    </a>
  </p>
  <h2 class="text-nowrap ff-text-right">
    <a href="<?php echo ff_url_vod_read($feifei['list_id'],$feifei['list_dir'],$feifei['vod_id'],$feifei['vod_ename'],$feifei['vod_jumpurl']);?>" title="<?php echo ($feifei["vod_name"]); ?>"><?php echo ($feifei["vod_name"]); ?></a>
  </h2>
  <h4 class="text-nowrap ff-text-right">
  	<?php if(!empty($feifei["vod_actor"])): ?><?php if(!empty($feifei["vod_actor"])): ?><?php $_result=explode(',',$feifei['vod_actor']);if(is_array($_result)): $i = 0; $__LIST__ = array_slice($_result,0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifeiactor): ++$i;$mod = ($i % 2 )?><a href="<?php echo ff_url('vod/search',array('actor'=>urlencode($feifeiactor)),true);?>"><?php echo ($feifeiactor); ?></a><?php endforeach; endif; else: echo "" ;endif; ?><?php endif; ?>
     <?php else: ?>
     	<?php if(!empty($feifei["vod_type"])): ?><?php $_result=explode(',',$feifei['vod_type']);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifeitype): ++$i;$mod = ($i % 2 )?><a href="<?php echo ff_url('vod/type',array('id'=>$feifei['list_id'],'type'=>urlencode($feifeitype),'area'=>'','year'=>'','star'=>'','state'=>'','order'=>'hits'),true);?>">
<?php echo ($feifeitype); ?>
</a><?php endforeach; endif; else: echo "" ;endif; ?><?php endif; ?>
      <?php if(!empty($feifei["vod_area"])): ?><?php $_result=explode(',',$feifei['vod_area']);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifeiarea): ++$i;$mod = ($i % 2 )?><a href="<?php echo ff_url('vod/type',array('id'=>$feifei['vod_cid'],'type'=>'','area'=>urlencode($feifeiarea),'year'=>'','star'=>'','state'=>'','order'=>'addtime'),true);?>">
<?php echo ($feifeiarea); ?>
</a><?php endforeach; endif; else: echo "" ;endif; ?><?php endif; ?><?php endif; ?>
  </h4>
</li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
  </div><!--md-8end -->
  <div class="col-md-4 ff-col visible-lg visible-md">
    <ol class="vod-item-ol">
      <?php $_result=ff_mysql_vod('cid:'.$feifeilist['list_id'].';limit:20;cache_name:default;cache_time:default;order:vod_gold desc');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><li>
  <a href="<?php echo ff_url_vod_read($feifei['list_id'],$feifei['list_dir'],$feifei['vod_id'],$feifei['vod_ename'],$feifei['vod_jumpurl']);?>"><?php echo (msubstr($feifei["vod_name"],0,14,'utf-8',true)); ?></a>
  <small class="pull-right"><?php echo (ff_gold($feifei["vod_gold"])); ?></small>
</li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ol>
  </div><!--md-4 end -->
</div><!--row end -->
</div><!--container end-->
<div class="clearfix ff-clearfix"></div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</div>
<!-- 短视频 样式-->
<?php if(is_array($item_list)): $i = 0; $__LIST__ = array_slice($item_list,4,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifeilist): ++$i;$mod = ($i % 2 )?><div class="container ff-bg">
  <div class="page-header">
    <h2 class="ff-text-right">
      <span class="glyphicon glyphicon-film ff-text"></span>
      <a href="<?php echo ff_url_vod_show($feifeilist['list_id'],$feifeilist['list_dir'],1);?>"><?php echo ($feifeilist["list_name"]); ?></a>
      <span class="hidden-xs pull-right">
      <?php $list_extend = json_decode($feifeilist['list_extend'],true); ?>
      <?php $_result=explode(',',$list_extend['type']);if(is_array($_result)): $i = 0; $__LIST__ = array_slice($_result,0,12,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifeitype): ++$i;$mod = ($i % 2 )?><a href="<?php echo ff_url('vod/type',array('id'=>$feifeilist['list_id'],'type'=>urlencode($feifeitype),'area'=>'','year'=>'','star'=>'','state'=>'','order'=>'addtime','p'=>1),true);?>"><?php echo ($feifeitype); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
      <a class="ff-text" href="<?php echo ff_url('vod/type',array('id'=>$feifeilist['list_id'],'type'=>'','area'=>'','year'=>'','star'=>'','state'=>'','order'=>'addtime','p'=>1),true);?>">更多</a>
      </span>
      <small class="visible-xs pull-right">
      <a class="btn btn-success btn-xs" href="<?php echo ff_url('vod/type',array('id'=>$feifeilist['list_id'],'type'=>'','area'=>'','year'=>'','star'=>'','state'=>'','order'=>'addtime','p'=>1),true);?>">更多</a>
      </small>
    </h2>
  </div>
  <ul class="list-unstyled vod-item-img ff-img-90">
    <?php $_result=ff_mysql_vod('cid:'.$feifeilist['list_id'].';limit:18;cache_name:default;cache_time:default;order:vod_addtime;sort:desc');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><li class="col-md-2 col-sm-3 col-xs-6">
	<p class="image">
    <a href="<?php echo ff_url_vod_read($feifei['list_id'],$feifei['list_dir'],$feifei['vod_id'],$feifei['vod_ename'],$feifei['vod_jumpurl']);?>">
      <img class="img-responsive img-thumbnail ff-img" data-original="<?php echo ff_url_img($feifei['vod_pic'],$feifei['vod_content']);?>" alt="<?php echo ($feifei["vod_name"]); ?>">
      <span class="continu"><?php switch($feifei["list_name"]): ?><?php case "电影":  ?><?php echo ($feifei["vod_gold"]); ?>分<?php break;?>
<?php case "电视剧":  ?><?php if(($feifei["vod_isend"])  ==  "1"): ?><?php if(($feifei["vod_total"])  >  "0"): ?><?php echo ($feifei["vod_total"]); ?>集全
    <?php else: ?>
      <?php echo (($feifei["vod_continu"])?($feifei["vod_continu"]):'全'); ?>集<?php endif; ?>
  <?php else: ?>
    <?php if($feifei['vod_continu'] == $feifei['vod_total']): ?><?php if(($feifei["vod_total"])  >  "0"): ?><?php echo ($feifei["vod_total"]); ?>集全
      <?php else: ?>
        <?php echo (($feifei["vod_continu"])?($feifei["vod_continu"]):'全'); ?>集<?php endif; ?>
    <?php elseif($feifei['vod_continu'] < $feifei['vod_total']): ?>
   	 <?php if(($feifei["vod_continu"])  >  "0"): ?>更新至<?php echo ($feifei["vod_continu"]); ?>集
      <?php else: ?>
        全集<?php endif; ?>
     <?php elseif($feifei['vod_continu'] > $feifei['vod_total']): ?>
     	全<?php echo (($feifei["vod_continu"])?($feifei["vod_continu"]):''); ?>集<?php endif; ?><?php endif; ?><?php break;?>
<?php case "动漫":  ?><?php if(($feifei["vod_isend"])  ==  "1"): ?><?php if(($feifei["vod_total"])  >  "0"): ?><?php echo ($feifei["vod_total"]); ?>集全
    <?php else: ?>
      <?php echo (($feifei["vod_continu"])?($feifei["vod_continu"]):'全'); ?>集<?php endif; ?>
  <?php else: ?>
    <?php if($feifei['vod_continu'] == $feifei['vod_total']): ?><?php if(($feifei["vod_total"])  >  "0"): ?><?php echo ($feifei["vod_total"]); ?>集全
      <?php else: ?>
        <?php echo (($feifei["vod_continu"])?($feifei["vod_continu"]):'全'); ?>集<?php endif; ?>
    <?php elseif($feifei['vod_continu'] < $feifei['vod_total']): ?>
      <?php if(($feifei["vod_continu"])  >  "0"): ?>更新至<?php echo ($feifei["vod_continu"]); ?>集
      <?php else: ?>
        全集<?php endif; ?>
     <?php elseif($feifei['vod_continu'] > $feifei['vod_total']): ?>
     	全<?php echo (($feifei["vod_continu"])?($feifei["vod_continu"]):''); ?>集<?php endif; ?><?php endif; ?><?php break;?>
<?php case "综艺":  ?><?php if(strlen($feifei['vod_continu']) > 6): ?><?php echo (date('Y-m-d',strtotime($feifei["vod_continu"]))); ?>
  <?php else: ?>
    <?php echo ($feifei["vod_continu"]); ?>期<?php endif; ?><?php break;?>
<?php default: ?>
高清<?php endswitch;?></span>
      <i class="playbg"></i>
      <i class="playbtn"></i>
    </a>
  </p>
  <h4 class="ff-text-right">
    <a href="<?php echo ff_url_vod_read($feifei['list_id'],$feifei['list_dir'],$feifei['vod_id'],$feifei['vod_ename'],$feifei['vod_jumpurl']);?>" title="<?php echo ($feifei["vod_name"]); ?>"><?php echo (msubstr($feifei["vod_name"],0,20,true)); ?></a>
  </h4>
</li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
</div>
<div class="clearfix ff-clearfix"></div><?php endforeach; endif; else: echo "" ;endif; ?>
<!-- 文章最新 -->
<?php $item_news = ff_mysql_news('limit:20;cache_name:default;cache_time:default;order:news_addtime;sort:desc'); ?>
<?php if(!empty($item_news)): ?><div class="container ff-bg">
  <div class="page-header">
    <h2><span class="glyphicon glyphicon-list-alt ff-text"></span> 最新资讯</h2>
  </div>
  <ul class="news-item-ul ff-row">
    <?php if(is_array($item_news)): $i = 0; $__LIST__ = $item_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><li class="col-sm-6 ff-col">
<a href="<?php echo ff_url_news_read($feifei['list_id'],$feifei['list_dir'],$feifei['news_id'],$feifei['news_name'],$feifei['news_jumpurl'],1);?>"><?php echo (msubstr($feifei["news_name"],0,27,true)); ?></a>
</li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
</div>
<div class="clearfix ff-clearfix"></div><?php endif; ?>
<!-- -->
<div class="container ff-bg hidden-xs">
  <div class="page-header">
    <h2><span class="glyphicon glyphicon-link ff-text"></span> 友情链接</h2>
  </div>
  <p class="ff-text-right">
  <?php $_result=ff_mysql_link('limit:20;cache_name:default;cache_time:default;order:link_order;sort:asc');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><a href="<?php echo ($feifei["link_url"]); ?>" target="_blank"><?php echo ($feifei["link_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
  </p>
</div>
<div class="clearfix ff-clearfix"></div>
<div class="container ff-bg">
  <div class="clearfix"></div>
<div class="row ff-footer">
  <div class="col-xs-12 text-center">
  	<p class="text-center hidden-xs hidden-sm">
    	<span class="glyphicon glyphicon-phone ff-text" data-toggle="popover" data-trigger="hover" data-placement="top" data-container="body" data-title="手机浏览请扫瞄二维码"></span>
    </p>
    <p><?php echo ($site_description); ?></p>
    <p><?php echo ($site_copyright); ?></p>
    <p>
      <a href="<?php echo ff_url('map/show',array('id'=>'rss','limit'=>100,'p'=>1),true);?>" target="_blank">rss</a>
      <a href="<?php echo ff_url('map/show',array('id'=>'baidu','limit'=>100,'p'=>1),true);?>" target="_blank">baidu</a>
      <a href="<?php echo ff_url('map/show',array('id'=>'google','limit'=>100,'p'=>1),true);?>" target="_blank">google</a>
      <a href="<?php echo ff_url('map/show',array('id'=>'360','limit'=>100,'p'=>1),true);?>" target="_blank">360</a>
      <a href="<?php echo ff_url('forum/guestbook', array('p'=>1), true);?>">网站留言</a>
      <a href="http://www.feifeicms.com/" target="_blank">feifeicms <?php echo L("feifeicms_version");?></a>
      <?php echo ($site_icp); ?>
    </p>
    <p class="tj"><?php echo ($site_tongji); ?></p>
  </div>
</div>
</div>
</body>
</html>