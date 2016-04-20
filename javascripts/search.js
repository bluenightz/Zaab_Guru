(function($){
	$(function(){
		var search = $("#input-search").initSearch();
	});
})(jQuery);

(function($){
	$.fn.initSearch = function(){
		var _this = $(this),
			_sidebar = _this.closest(".sidebar"),
			_cross = _sidebar.find(".icon-cross");

		init();
		function init(){
			bindEvent();
		}

		function bindEvent(){
			_this.on("focus", focus_func);
			_cross.on("click", cross_click_func);
			// _this.on("blur", blur_func);
		}

		function cross_click_func(e){
			closeSearch();
		}

		function focus_func(e){
			openSearch();
		}

		function blur_func(e){
			closeSearch();
		}

		function openSearch(){
			_this.addClass("search-focus");
			_sidebar.addClass("search-focus");
		}

		function closeSearch(){
			_this.removeClass("search-focus");
			_sidebar.removeClass("search-focus");
		}

		return {
			"openSearch": openSearch,
			"closeSearch": closeSearch
		}

	}
})(jQuery);