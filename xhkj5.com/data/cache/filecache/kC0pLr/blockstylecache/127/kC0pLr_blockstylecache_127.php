<?php
$data = array (
  'exp' => 1518350981,
  'data' => 
  array (
    'styleid' => '127',
    'blockclass' => 'forum_thread',
    'name' => '克米设计-nby_头条列表',
    'template' => 
    array (
      'raw' => '<ul class="cl">
[loop]
	<li><span><a href="{forumurl}"{target}>{forumname}</a></span><em>|</em><a href="{url}" title="{title}"{target}>{title}</a></li>
[/loop]
</ul>
[order=1]
<li class="kmdbt"><a href="{url}" title="{title}"{target}>{title}</a></li>
[/order]',
      'footer' => '',
      'header' => '',
      'indexplus' => '
					',
      'index' => '
					',
      'orderplus' => '
					',
      'order' => 
      array (
        1 => '<li class="kmdbt"><a href="{url}" title="{title}"{target}>{title}</a></li>',
      ),
      'loopplus' => '
					',
      'loop' => '<li><span><a href="{forumurl}"{target}>{forumname}</a></span><em>|</em><a href="{url}" title="{title}"{target}>{title}</a></li>',
    ),
    'hash' => '832b3b90',
    'getpic' => '0',
    'getsummary' => '0',
    'makethumb' => '0',
    'settarget' => '1',
    'fields' => 
    array (
      0 => 'forumurl',
      1 => 'forumname',
      2 => 'url',
      3 => 'title',
    ),
    'moreurl' => '0',
  ),
);
