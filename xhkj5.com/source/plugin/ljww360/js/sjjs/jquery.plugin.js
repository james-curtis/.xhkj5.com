/**
 * ������ж�
 * $.m_borwser.safari
 */
(function($) {

    var userAgent = navigator.userAgent.toLowerCase();
    var borwser={};

    borwser.opera = userAgent.indexOf('opera') != -1 && opera.version();
    borwser.firefox = (navigator.product == 'Gecko') && userAgent.substr(userAgent.indexOf('firefox') + 8, 3);
    borwser.msie = (userAgent.indexOf('msie') != -1 && !is_opera) && userAgent.substr(userAgent.indexOf('msie') + 5, 3);
    borwser.chrome = userAgent.indexOf('chrome') != -1 && userAgent.substr(userAgent.indexOf('chrome') + 7, 3);
    borwser.safari = userAgent.indexOf('safari') != -1 && userAgent.substr(userAgent.indexOf('safari') + 7, 3);
    borwser.qq = userAgent.indexOf('qqbrowser') != -1 && userAgent.substr(userAgent.indexOf('qqbrowser') + 9, 5);
    borwser.uc = userAgent.indexOf('ucbrowser') != -1 && userAgent.substr(userAgent.indexOf('safari') + 9, 9);

    $.m_borwser = borwser;

})(jQuery);


/**
 * tab�л�
 * $('#id').m_nav({})
 * @author moufer<moufer@163.com>
 */
(function($) {

    $.fn.m_nav = function() {

        var navBox = $(this).find('.atab-box-nav');
        var areaBox = $(this).find('.atab-box-area');

        init = function() {
            var count = navBox.find('a').length;
            var width = Math.round(100/count);
            navBox.find('a').each(function()
            {
                var a = $(this);
                a.css({'width':width+'%'});
                if(areaBox[0]) {
                    a.click(function()
                    {
                        a_click(a);
                    }
                    ).attr('href','javascript:');
                }
            });
            if(!areaBox[0]) return;
            areaBox.find('.atab-box-area-dispay').hide();
            var current = navBox.find('a.atab-box-nav-current');
            if(current[0]) show_area(current.data('id'));
        }

        a_click = function(a) {
            navBox.find('a').each(function() {
                if(a.data('id') == $(this).data('id')) {
                    a.addClass('atab-box-nav-current');
                } else {
                    $(this).removeClass('atab-box-nav-current');
                }
            });
            areaBox.find('div.atab-box-area-dispay').hide();
            show_area(a.data('id'));
        }

        show_area = function(id) {
            areaBox.show();
            $('#'+id).show();
        }

        init();
    }

})(jQuery);

/**
 * ����ʽ������
 * new $.m_drawer('#id',{})
 * @author moufer<moufer@163.com>
 */
(function($) {

    $.m_drawer = function(selector, options, callbacks) {

        //Ĭ�����ò���
        var _d_options = {
            place:'center',                 //��ʾ��λ left, center, right 
            width:'100%',                   //���
            height:'auto',                  //�߶�
            type:'auto-top',                //��ʾ��ʽ
                                            //lock-top����ʾ��ҳ�涥��������������ƶ���
                                            //auto-top����ʾ�ڴ��ڶ���������������ƶ���
                                            //auto-center����ʾ�ڴ������룬����������ƶ���
                                            //auto-bottom���̶���ʾ��ҳ�涥��������������ƶ���
                                            //float-top����ʾ�ڴ��ڶ����������洰�ڸ�����
                                            //float-center����ʾ�ڴ������븡�����洰�ڸ�����
                                            //float-bottom����ʾ�ڴ��ڵײ��������洰�ڸ�����
            area_class: '',                 //�����������ʽ�ࣨ��ѡ��
            direction:'top',                //���뷽�� none��top��left��right
            speed:'fast'                    //�����ٶ� fast,normal,slow
        }

        //Ĭ�ϻص������б�
        var _d_callbacks = {
            onInit:null,
            onOpen:null,
            onClose:null,
            onSubmit:null
        }

        //��ǰ��
        var _drawer = this;
        //����������
        var _my = $(selector);
        //������ò���
        var _opts = $.extend({}, _d_options, options);
        //�ص�����
        var _callbacks = $.extend({}, _d_callbacks, callbacks);
        //������div
        var $box = $('<div></div>').addClass('drawer-box');
        //ģ̬��
        var $pattern = $('<div></div>').addClass('drawer-pattern');
        //���������
        var $area = $('<div></div>').addClass('drawer-area');
        //���ù����������ʽ��
        if(_opts.area_class) $area.addClass(_opts.area_class);

        //�Ƿ��һ�δ򿪶Ի���
        this.is_first_open = true;
        /*
        _opts.place = 'center'; // left,center,right
        _opts.width = 90;
        _opts.height = 'auto';
        _opts.type = 'float-top'; //lock-top,auto-top,auto-center,auto-bottom,float-top,float-center,float-bottom
        _opts.direction = 'top'; //none,top,left,right
        _opts.speed = 'slow'; //fast,normal,slow
        */

        //��ʼ���Ͱ�
        var _init = {

            //UI��װ
            create:function() {
                //��ܲ�
                $box.addClass('drawer-' + _opts.place).addClass('drawer-area-'+_opts.type);
                //�����
                //var maxwidth = _opts.sizeunit == 'px' ? $(document.body).width() : 100;
                var height = _opts.height=='auto' ? 'auto' : (_opts.height);
                //��������Ⱥ͸߶�
                $area.css (
                {
                    'width' : _opts.width,
                    'height' : height
                }).hide();
                //ģ̬�����ùر����Ͳ�����
                $pattern.attr('data-type','close').hide();
            },

            //��ʾʱλ�ó�ʼ��
            show:function() {
                //ģ̬��
                $pattern.height(Math.max($(window).height(),$(document.body).height())).width($(document.body).width());
                //����Ǿ�����ʾ���ݣ������left���ж�λ
                if(_opts.place == 'center') {
                    var left = Math.round(($(document.body).width() - $area.width()) / 2);
                    $area.css('left', left + 'px');
                }
                //�Ի�����ʾ��λ
                if(_opts.type == 'auto-top') {
                    $area.css('top', $(window).scrollTop() + 'px');
                } else if (_opts.type == 'auto-center') {
                    var top = 0;
                    var body_height = $(document.body).height();
                    var scrollTop = $(window).scrollTop();
                    var height = $(window).height()-$area.height();
                    //ҳ��ȴ��ڸ�
                    if(height < 0) {
                        if(scrollTop > 1) {
                            //���ڶ�����ҳ��ײ����ڶԻ����
                            if(body_height - scrollTop >= height) {
                                top = scrollTop;
                            } else {
                                top = body_height-$area.height();
                            }
                        }
                        if(top < 0) top = 0;
                    } else {
                        top = scrollTop + Math.round(height / 2);
                    }
                    $area.css('top', top + 'px');
                } else if (_opts.type == 'auto-bottom') {
                    var top = $(window).scrollTop() + $(window).height() - $area.height();
                    $area.css('top', top + 'px');
                } else if (_opts.type == 'lock-bottom') {
                    var top = $(document.body).height() - $area.height();
                    $area.css('top', top + 'px');
                    $(window).scrollTop(top);
                } else if (_opts.type == 'float-top') {
                    $area.css({
                        position: 'fixed',
                        top: 0
                    });
                } else if (_opts.type == 'float-center') {
                    top = Math.round(($(window).height() - $area.height()) / 2);
                    if(top < 0) top = 0;
                    $area.css({
                        position: 'fixed',
                        top : top
                    });
                } else if (_opts.type == 'float-bottom') {
                    $area.css({
                        position: 'fixed',
                        bottom : 0
                    });
                };
            },

            //����ʱ�ĳ�ʼ������
            hide:function() {
            },

            //����
            load:function() {

                //ҳ��Ԫ�س�ʼ��
                var d = _opts.place;
                _init.create();

                //������ҳ
                $box.append($pattern).append($area.append(_my.css('display','block')));
                $(document.body).append($box);

                //��ʼ���ص�
                if(_callbacks.onInit) {
                    _callbacks.onInit(_drawer, $area);
                }
                //�ύ��ť�ص�
                if(_callbacks.onSubmit) {
                    var submit = $area.find('[data-type="submit"]');
                    if(submit[0]) {
                        submit.click(function() {
                            return _callbacks.onSubmit(_drawer, $area);
                        });
                    }
                }

                //���¼�
                _event.bind();
            }
        };

        var _animate = {
            //��ʾ����
            show:function() {
                var attr = {};
                var speed = _opts.direction == 'none' ? 0 : _opts.speed;
                var overflowX = $(document.body).css('overflow-x');
                $box.show();
                //��ʾʱ��Ҫ��Ԫ��λ�ó�ʼ��
                _init.show();

                $area.show();
                if(_opts.place=='center') {
                    //lock-top,auto-top,auto-center,auto-bottom,float-top,float-center,float-bottom
                    if( _opts.type == 'lock-top' || _opts.type == 'float-top' || _opts.type == 'auto-top') {
                        attr.top = 0;
                        if(_opts.type == 'auto-top') {
                            attr.top = $area.offset().top;
                        }
                        $area.css({top:-$area.height()});
                    } else if(_opts.type == 'float-bottom' ) {
                        attr.bottom = 0;
                        $area.css({bottom:-$area.height()});
                    } else if(_opts.type == 'auto-bottom'||_opts.type == 'lock-bottom') {
                        attr.top = $area.offset().top;
                        attr.height = $area.height();
                        $area.css({top:attr.top + $area.height(), height:0});
                    } else {
                        attr.left = $area.offset().left;
                        if(parseInt(Math.random().toString().substr(2,1))%2==1) {
                            $area.css({left:$(window).width()});
                        } else {
                            $area.css({left:-$area.width()});
                        }
                        $(document.body).css('overflow-x','hidden');
                    }
                } else {
                    attr.left = $area.offset().left;
                    if(_opts.place == 'left') {
                        $area.css({left:-$area.width()});
                    } else {
                        $area.css({left:$(window).width()});
                    }
                    $(document.body).css('overflow-x','hidden');
                }

                //ִ�ж���
                $pattern.fadeIn(speed);
                $area.animate(
                    attr, speed, function() {
                        $(document.body).css('overflow-x', overflowX);
                });
            },
            //���ض���
            hide:function() {
                var attr = {};
                var speed = _opts.direction == 'none' ? 0 : _opts.speed;
                //$(document.body).css('overflow-x','hidden');
                //$(document.body).css('overflow-x','auto');
                $pattern.fadeOut('fast');
                $area.fadeOut('fast');
                $box.fadeOut('fast');
                _init.hide();
            }
        };

        //��Ϊ�¼�����
        var _event = {
            //�򿪳����
            open:function () {
                //�ص�����
                if(_callbacks.onOpen) {
                    var ret = _callbacks.onOpen(_drawer,_my);
                    if(ret==false) return;
                }
                _animate.show();
            },
            //�ر�
            close:function () {
                //�ص�����
                if(_callbacks.onClose) {
                    var ret = _callbacks.onClose(_drawer,_my);
                    if(ret == false) return;
                }
                _animate.hide();
            },
            //���¼�
            bind:function() {
                $pattern.click(function() {
                    _event.close();
                });

                $box.find('[data-type="close"]').click(function() {
                    _event.close();
                });
            }
        };

        //��
        this.open = function(callback) {
            if(callback) {
                _callbacks.onOpen = callback;
            }
            _event.open();
            this.is_first_open = false;
        }

        //�ر�
        this.close = function(callback) {
            if(callback) {
                _callbacks.onClose = callback;
            }
            _event.close();
        }

        //ɾ��
        this.remove = function(callback) {
            if(callback) {
                _callbacks.onRemove = callback;
            }
            //�ص�����
            if(_callbacks.onRemove) {
                var ret = _callbacks.onRemove(_drawer,$area);
                if(ret == false) return;
            }
            $box.remove();
        }

        //���ع���������
        this.area = function() {
            return $area;
        }

        _init.load();

    }

})(jQuery);