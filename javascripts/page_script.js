(function($){
	$(function(){
		$("#slider_price").slider({
	      range: true,
	      min: 0,
	      max: 500,
	      values: [ 0, 500 ],
	      slide: function( event, ui ) {
	      	$("#min_num").html(ui.values[0]);
	      	$("#max_num").html(ui.values[1]);
	        // $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	      }
	    });
	      	$("#min_num").html( $("#slider_price").slider("values", 0));
	      	$("#max_num").html( $("#slider_price").slider("values", 1));
	})
})(jQuery);