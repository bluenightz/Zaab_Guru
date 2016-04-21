(function($){
	$(function(){
		$("#slider_price").slider({
	      range: true,
	      min: 0,
	      max: 500,
	      values: [ 0, 500 ],
	      slide: function( event, ui ) {
	      	$("#price_min_num").html(ui.values[0]);
	      	$("#price_max_num").html(ui.values[1]);
	        // $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	      }
	    });
      	$("#price_min_num").html( $("#slider_price").slider("values", 0));
      	$("#price_max_num").html( $("#slider_price").slider("values", 1));


		$("#slider_dist").slider({
	      range: true,
	      min: 0,
	      max: 50,
	      values: [ 0, 50 ],
	      slide: function( event, ui ) {
	      	$("#dist_min_num").html(ui.values[0]);
	      	$("#dist_max_num").html(ui.values[1]);
	        // $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	      }
	    });
      	$("#dist_min_num").html( $("#slider_dist").slider("values", 0));
      	$("#dist_max_num").html( $("#slider_dist").slider("values", 1));


      	$(".btn-enter-restaurant").click(function(e){
      		open_popupcontainer();
      	});

      	$(".popupcontainer__close").click(function(e){
      		close_popupcontainer();
      	});

      	function open_popupcontainer(){
      		$(".container-fluid").addClass("popup__open");
      		$(".popupcontainer").css("top", $(".contentbox").scrollTop() );
      	}
      	function close_popupcontainer(){
      		$(".container-fluid").removeClass("popup__open");
      	}

      	$(".foodlist__number input").spinner({
      		step: 1,
      		min: 0,
      		numberFormat: "n"
      	});

	})
})(jQuery);