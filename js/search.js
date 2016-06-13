(function($){
	$(function(){
		$.search = $("#input-search").initSearch();
	});
})(jQuery);

(function($){
	$.fn.initSearch = function(){
		var _this = $(this),
			_sidebar = _this.closest(".sidebar"),
			_cross = _sidebar.find(".icon-cross");
		var _areaArrays = [];
		var _foodTypeArrays = [];

		init();
		function init(){
			bindEvent();
		}


		function bindEvent(){
			_this.on("focus", focus_func);
			_cross.on("click", cross_click_func);
			// _this.on("blur", blur_func);
			$("#search_area").on("change", "input", function(e){
				var _val = $(this).next().text().trim();
				var _indexOf = _areaArrays.indexOf( _val );
				if( _indexOf == -1 ){
					_areaArrays.push( _val );
				}else{
					_areaArrays.splice( _indexOf, 1 );
				}
			});
			$("#search_food_type").on("change", "input", function(e){
				var _val = $(this).next().text().trim();
				var _indexOf = _foodTypeArrays.indexOf( _val );
				if( _indexOf == -1 ){
					_foodTypeArrays.push( _val );
				}else{
					_foodTypeArrays.splice( _indexOf, 1 );
				}
			});
		}

		function getAreas(){
			return _areaArrays;
		}

		function getFoodTypes(){
			return _foodTypeArrays;
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

		var searchFactory = $.searchFactory = function(){
			var _searchObject = {
			    "price": {
			        "min": 0,
			        "max": 0
			    },
			    "distance": {
			        "min": 0,
			        "max": 0
			    },
			    "area": [],
			    "food_type": [],
			    "star": 0,
			    "keyword_search": ""
			};
			
			function getPriceMin(){
				return $("#slider_price").slider("values", 0);
			}
			function getPriceMax(){
				return $("#slider_price").slider("values", 1);
			}
			
			function getDistMin(){
				return $("#slider_dist").slider("values", 0);
			}
			function getDistMax(){
				return $("#slider_dist").slider("values", 1);
			}

			function getSearchJSON(){
				return _searchObject;
			}

			function getArea(){
				var _area;

				return _area;
			}

			function getStar(){
				return 
			}

			function getInputSearch(){
				return $("#input-search").val().trim();
			}

			function getSearchJSON(){
				return {
					    "price": {
					        "min": getPriceMin(),
					        "max": getPriceMax()
					    },
					    "distance": {
					        "min": getDistMin(),
					        "max": getDistMax()
					    },
					    "area": getAreas(),
					    "food_type": getFoodTypes(),
					    "star": $.starsearch.getstar(),
					    "keyword_search": getInputSearch()
					};
			}

			return {
				getSearchJSON : getSearchJSON
			}
		}



		return {
			"openSearch": openSearch,
			"closeSearch": closeSearch,
			"searchFactory": searchFactory
		}

	}
})(jQuery);