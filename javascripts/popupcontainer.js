(function($){
	$.open_popupcontainer = function( obj ){
		var _default = {
			"key": "shop",
			"id": 0
		},
		_path;

		$.extend( _default, obj );

  		$(".container-fluid").addClass("popup__open");
  		$(".popupcontainer").css("top", $(".contentbox").scrollTop() );

  		switch( _default.key ){
  			default:
  				_path = 'ajax/shop_content.html'
		  		setTimeout(function(){
		  			$.ajax({
		  				'url': _path, 
		  				'success': function(data){
		  					$(".popupcontainer__space").html(data);
  					      	$(".popupcontainer__space").find(".foodlist__number input").spinner({
					      		step: 1,
					      		min: 0,
					      		numberFormat: "n"
					      	});
		  				}
		  			});
		  		}, 600);
  			break;
  		}


	}

      	
	$.close_popupcontainer = function(){
  		$(".container-fluid").removeClass("popup__open");
  		setTimeout(function(){
  			$(".popupcontainer__space").html("");
  		}, 100);
   	}
})(jQuery);