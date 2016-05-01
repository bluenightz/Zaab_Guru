(function($){
	$.useSameValue = function( arr1, arr2, selectorTrigger ){
		if( arguments.length == 3 ){
			bindEvent( selectorTrigger );
		}
		function bindEvent( ele ){
			ele.on("change", function(e){
				var _checked = $(this).prop("checked");
				if( _checked ){
					_clonevalue( arr1, arr2 );
				}else{
					_clearvalue( arr2 );
				}
			});
		}
		function _clearvalue( arr ){
			for(var i = 0 ; i < arr.length ; ++i){
				arr[i].val("");
			}
		}
		function _clonevalue( arr1, arr2 ){
			for(var i = 0 ; i < arr1.length ; ++i){
				arr2[i].val( arr1[i].val() );
			}
		}
	}
})(jQuery);