var FUNCS = {
	replyCommentPage: function (tId, pos, pId, author) {
		var pId = pId || '';
		var author = author || '';
		var extra = '';
		extra += '&viewpid=' + pId || '';
		extra += author ? '&author=' + encodeURIComponent(author) : '';
		TOOLS.openNewPage('?a=' + pos + '&tid=' + tId + '&login=yes&pos=yes' + extra);
	},
	newThreadPage: function (uid, fId) {
		TOOLS.openNewPage('?a=newthread' + '&fid=' + fId + '&login=yes');
	},
	jumpToLoginPage: function (url) {
		TOOLS.openNewPage('?' + url + '&login=yes');
	}
};

var initWXShare = function (opts) {
	if(SITE_INFO.openApi.wx != undefined){
		wx.config({
		    debug: false, // ��������ģʽ,���õ�����api�ķ���ֵ���ڿͻ���alert��������Ҫ�鿴����Ĳ�����������pc�˴򿪣�������Ϣ��ͨ��log���������pc��ʱ�Ż��ӡ��
		    appId: SITE_INFO.openApi.wx.appid, // ������ںŵ�Ψһ��ʶ
		    timestamp: SITE_INFO.openApi.wx.js_timestamp, // �������ǩ����ʱ���
		    nonceStr: SITE_INFO.openApi.wx.js_noncestr, // �������ǩ���������
		    signature: SITE_INFO.openApi.wx.js_signature,// ���ǩ��������¼1
		    jsApiList: ['onMenuShareTimeline','onMenuShareAppMessage','onMenuShareQQ','onMenuShareWeibo','onMenuShareQZone'] // �����Ҫʹ�õ�JS�ӿ��б�����JS�ӿ��б����¼2
		});
		wx.ready(function(){
			var url = window.location.href + '&siteid=' + SITE_ID;
			if (member_uid) {
				url += '&fromuid=' + member_uid;
			}
			url += '&source=';
			wx.onMenuShareTimeline({
			    title: opts.title, // �������
			    link: url + 'pyq', // ��������
			    imgUrl: opts.img, // ����ͼ��
			    success: function () { 
			        // �û�ȷ�Ϸ����ִ�еĻص�����
			    	$('.tipInfo').hide();
					$('.maskLayer').hide();
			    },
			    cancel: function () { 
			        // �û�ȡ�������ִ�еĻص�����
			    	$('.tipInfo').hide();
					$('.maskLayer').hide();
			    }
			});
			wx.onMenuShareAppMessage({
			    title: opts.title, // �������
			    desc: opts.desc, // ��������
			    link: url + 'wxhy', // ��������
			    imgUrl: opts.img, // ����ͼ��
			    type: '', // ��������,music��video��link������Ĭ��Ϊlink
			    dataUrl: '', // ���type��music��video����Ҫ�ṩ�������ӣ�Ĭ��Ϊ��
			    success: function () { 
			        // �û�ȷ�Ϸ����ִ�еĻص�����
			    	$('.tipInfo').hide();
					$('.maskLayer').hide();
			    },
			    cancel: function () { 
			        // �û�ȡ�������ִ�еĻص�����
			    	$('.tipInfo').hide();
					$('.maskLayer').hide();
			    }
			});
			wx.onMenuShareQQ({
			    title: opts.title, // �������
			    desc: opts.desc, // ��������
			    link: url + 'qq', // ��������
			    imgUrl: opts.img, // ����ͼ��
			    success: function () { 
			       // �û�ȷ�Ϸ����ִ�еĻص�����
			    	$('.tipInfo').hide();
					$('.maskLayer').hide();
			    },
			    cancel: function () { 
			       // �û�ȡ�������ִ�еĻص�����
			    	$('.tipInfo').hide();
					$('.maskLayer').hide();
			    }
			});
			wx.onMenuShareWeibo({
				title: opts.title, // �������
			    desc: opts.desc, // ��������
			    link: url + 'wb', // ��������
			    imgUrl: opts.img, // ����ͼ��
			    success: function () { 
			       // �û�ȷ�Ϸ����ִ�еĻص�����
			    	$('.tipInfo').hide();
					$('.maskLayer').hide();
			    },
			    cancel: function () { 
			       // �û�ȡ�������ִ�еĻص�����
			    	$('.tipInfo').hide();
					$('.maskLayer').hide();
			    }
			});
			wx.onMenuShareQZone({
				title: opts.title, // �������
			    desc: opts.desc, // ��������
			    link: url + 'qzone', // ��������
			    imgUrl: opts.img, // ����ͼ��
			    success: function () { 
			       // �û�ȷ�Ϸ����ִ�еĻص�����
			    	$('.tipInfo').hide();
					$('.maskLayer').hide();
			    },
			    cancel: function () { 
			       // �û�ȡ�������ִ�еĻص�����
			    	$('.tipInfo').hide();
					$('.maskLayer').hide();
			    }
			});
		});
	}
	
	/*
	WeixinJSBridge.on('menu:share:timeline', function (argv) {
		var url = window.location.href + '&source=pyq&siteid=' + SITE_ID;
		if (member_uid) {
			url += '&fromuid=' + member_uid;
		}
		setTimeout(
			function () {
				WeixinJSBridge.invoke('shareTimeline', {
					'img_url': opts.img,
					'img_width': '120',
					'img_height': '120',
					'link': url,
					'desc': opts.desc,
					'title': opts.title
				}, function (res) {
					$('.tipInfo').hide();
					$('.maskLayer').hide();
				});
			}
		, 300
			);
	});
	WeixinJSBridge.on('menu:share:appmessage', function (argv) {
		var url = window.location.href + '&source=wxhy&siteid=' + SITE_ID;
		setTimeout(
			function () {
				WeixinJSBridge.invoke('sendAppMessage', {
					//'appid': 'wx9324b266aa4818d0',
					'img_url': opts.img,
					'img_width': '120',
					'img_height': '120',
					'link': url,
					'desc': opts.desc,
					'title': opts.title
				}, function (res) {
					$('.tipInfo').hide();
					$('.maskLayer').hide();
				});
			}
		, 300
			);
	});
	WeixinJSBridge.on('menu:share:weibo', function (argv) {
		var url = window.location.href + '&source=wb&siteid=' + SITE_ID;
		setTimeout(
			function () {
				WeixinJSBridge.invoke('shareWeibo', {
					'img_url': opts.img,
					'img_width': '120',
					'img_height': '120',
					'link': url,
					'desc': opts.desc,
					'title': opts.title,
					'url': url,
					'content': opts.desc
				}, function (res) {
					$('.tipInfo').hide();
					$('.maskLayer').hide();
				});
			}
		, 300
			);
	});
	WeixinJSBridge.on('menu:share:qq', function (argv) {
		var url = window.location.href + '&source=qq&siteid=' + SITE_ID;
		setTimeout(
			function () {
				WeixinJSBridge.invoke('shareQQ', {
					'img_url': opts.img,
					'img_width': '120',
					'img_height': '120',
					'link': url,
					'desc': opts.desc,
					'title': opts.title,
					'url': url,
					'content': opts.desc
				}, function (res) {
					$('.tipInfo').hide();
					$('.maskLayer').hide();
				});
			}
		, 300
			);
	});
	WeixinJSBridge.on('menu:share:qzone', function (argv) {
		var url = window.location.href + '&source=qz&siteid=' + SITE_ID;
		setTimeout(
			function () {
				WeixinJSBridge.invoke('shareQZone', {
					'img_url': opts.img,
					'img_width': '120',
					'img_height': '120',
					'link': url,
					'desc': opts.desc,
					'title': opts.title,
					'url': url,
					'content': opts.desc
				}, function (res) {
					$('.tipInfo').hide();
					$('.maskLayer').hide();
				});
			}
		, 300
			);
	});
	*/
};