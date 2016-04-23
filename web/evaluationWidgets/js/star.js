$(function () {
	// 初始化
	$('.starWidget').find('span').click(function(){
		var me = $(this);
		var ACTIVE_CLASS = 'active';
		if(me.hasClass(ACTIVE_CLASS))
			return;
		me.siblings('.' + ACTIVE_CLASS).removeClass(ACTIVE_CLASS);
		me.addClass(ACTIVE_CLASS);

		var parent = this.parentElement;
		parent.lastElementChild.value = parent.childElementCount - me.index() - 1;
	});
});