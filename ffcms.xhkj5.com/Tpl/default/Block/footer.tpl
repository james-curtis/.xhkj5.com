<div class="clearfix"></div>
<div class="row ff-footer">
  <div class="col-xs-12 text-center">
  	<p class="text-center hidden-xs hidden-sm">
    	<span class="glyphicon glyphicon-phone ff-text" data-toggle="popover" data-trigger="hover" data-placement="top" data-container="body" data-title="手机浏览请扫瞄二维码"></span>
    </p>
    <p>{$site_description}</p>
    <p>{$site_copyright}</p>
    <p>
      <a href="{:ff_url('map/show',array('id'=>'rss','limit'=>100,'p'=>1),true)}" target="_blank">rss</a>
      <a href="{:ff_url('map/show',array('id'=>'baidu','limit'=>100,'p'=>1),true)}" target="_blank">baidu</a>
      <a href="{:ff_url('map/show',array('id'=>'google','limit'=>100,'p'=>1),true)}" target="_blank">google</a>
      <a href="{:ff_url('map/show',array('id'=>'360','limit'=>100,'p'=>1),true)}" target="_blank">360</a>
      <a href="{:ff_url('forum/guestbook', array('p'=>1), true)}">网站留言</a>
      <a href="http://www.feifeicms.com/" target="_blank">feifeicms {%feifeicms_version}</a>
      {$site_icp}
    </p>
    <p class="tj">{$site_tongji}</p>
  </div>
</div>