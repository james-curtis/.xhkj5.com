/*feifeicms js plus 
email: 271513820@qq.com
update:2017.10.18*/
var feifei_plus = {
	'm':{
		'nav_goback':function(){//goback
			if($('.ff-goback').css('display') == 'inline'){
				$(".glyphicon-home").hide();
			}
		},
		'nav_active':function(){//滑动导航高亮
			$id = $('.nav-gallery[data-dir]').attr('data-dir');
			$($id).addClass("active");
		},
		'nav_gallery':function(){//滑动导航
			if($(".nav-gallery").length){
				var $index = $(".nav-gallery").find('.active').index()*1;
				if($index > 3){
					$index = $index-3;
				}else{
					$index = 0;
				}
				$(".nav-gallery").flickity({
					cellAlign: 'left',
					freeScroll: true,
					prevNextButtons: false,
					resize: true,
					initialIndex: $index,
					pageDots: false
				});
			}
		},
		'type_gallery':function(){//筛选页滑动
			if($(".type-gallery").length){
				$(".type-gallery").each(function(i){
					$index = $(this).find('.active').index()*1;
					if($index > 3){
						$index = $index-3;
					}else{
						$index = 0;
					}
					$(this).flickity({
						cellAlign: 'left',
						freeScroll: true,
						prevNextButtons: false,
						resize: true,
						initialIndex: $index,
						pageDots: false
					});
				});
			}			
		},
		'type_scroll':function(){//筛选页滚动fixed
			if($(".type-gallery").length){
				var offset = $('.dl-fixed').offset();
				$(window).bind('scroll', function(){
					if($(this).scrollTop() > offset.top){
						$('.dl-fixed').addClass("fixed");
					}else{
						$('.dl-fixed').removeClass("fixed");
					}
				});
			}
		},
		'news_content':function(){//资讯详情页图片
			$('.news-detail .news-content img').addClass("img-responsive");
		},
		'user_login':function(){//静态登录处理
			if($('.ff-user').length && (cms.urlhtml == 1)){
				$('.ff-user').html($('.ff-user').html().replace('登录','我的'));
			}
		}
	}
}
$(document).ready(function(){
	feifei_plus.m.nav_goback();
	feifei_plus.m.nav_active();
	feifei_plus.m.nav_gallery();
	feifei_plus.m.type_gallery();
	//feifei_plus.m.type_scroll();
	feifei_plus.m.news_content();
	feifei_plus.m.user_login();
});