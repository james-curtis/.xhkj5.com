<?php exit;?>
<!--{eval if(!function_exists('init_n5app'))include DISCUZ_ROOT.'./source/plugin/zhikai_n5appgl/common.php'; if(!function_exists('init_n5app')) exit('Authorization error!');}-->
<!--{eval include_once DISCUZ_ROOT.'./source/plugin/zhikai_n5appgl/nvbing5.php'}-->
<div class="n5ss_sslb cl">
	<h2><!--{if $keyword}-->{lang search_result_keyword}<!--{else}-->{lang search_result}<!--{/if}--></h2>
	<!--{if empty($articlelist)}-->
		<div class="n5qj_wnr" style="padding: 40px 0 80px 0;">
			<img src="template/zhikai_n5app/images/n5sq_gzts.png">
			<p>{$n5app['lang']['ssghgjcss']}</p>
		</div>
	<!--{else}-->
		<ul>
			<!--{loop $articlelist $article}-->
				<li>
					<a href="{echo fetch_article_url($article);}">$article[title]</a>
				</li>
			<!--{/loop}-->
		</ul>
	<!--{/if}-->
</div>
<style type="text/css">
.page {margin-top: 30px;}
</style>
$multipage