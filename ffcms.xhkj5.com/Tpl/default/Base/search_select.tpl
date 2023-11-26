<form class="form-horizontal ff-search" data-sid="{$site_sid}" data-limit="{:C('ui_search_limit')}" role="search" action="{$root}index.php?s=vod-search-name" method="post">
  <div class="input-group">
    <div class="input-group-btn">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="title">视频</span>
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="javascript:;" data-action="{:ff_url('news/search',array('name'=>'FFWD'), true)}">资讯</a></li>
        <li><a href="javascript:;" data-action="{:ff_url('vod/search',array('name'=>'FFWD'), true)}">视频</a></li>
      </ul>
    </div>
    <input type="text" class="form-control ff-wd" name="wd" placeholder="Search">
    <div class="input-group-btn">
      <button type="submit" class="btn btn-default btn-success" data-action="{:ff_url('vod/search',array('name'=>'FFWD'), true)}">搜索</button>
    </div>
  </div>   
</form>