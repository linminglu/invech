$(function(){
	// set rem origin;
	var setHtmlFontsize = function(){
        var _width = window.innerWidth,
            designWidth = 750;
        $('html').css('fontSize',_width/designWidth*100+'px');
        //$('main').height(window.innerHeight-$('header').height()*2);  // 设置内容区高度
        $('main').height(window.innerHeight-44);  // 设置内容区高度
    };
    setHtmlFontsize();
    $(window).on('resize',setHtmlFontsize);

    $('.container').show(); // 所有元素，事件添加完毕再显示页面
})


