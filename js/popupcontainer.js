(function($){
	$.open_popupcontainer = function( obj ){
		var _default = {
			"key": "shop",
			"id": 0
		},
		_path, _cart = {
			"shopid": 1,
			"code": [], 
			"item": {}
		};
		//
		// {
		// 	"shopid": 1,
		// 	"code": [1, 4], 
		// 	"item": {
		// 		1: {
		// 			price: "45"
		// 			foodname: "ข้าวมันไก่ต้ม"
		// 			quantity: 5
		// 		}
		// 		4: {
		// 			price: "45"
		// 			foodname: "น้ำซุป"
		// 			quantity: 2
		// 		}
		// 	}
		// };

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
					      		numberFormat: "n",
					      		change: function(e, ui){
					      			applycart(e, ui, "change");
					      		},
					      		spin: function(e, ui){
					      			applycart(e, ui);
					      		}
					      	});
		  				}
		  			});
		  		}, 600);
  			break;
  		} 


  		function applycart(e, ui, type){
  			var _value;
  			if( type == 'change' ){
  				_value = $(e.target).val();
  			}else{
  				_value = ui.value;
  			}
  			var _target = $(e.target);
  			var _parent = _target.closest(".foodlist__detail");
  			if( _cart.code.indexOf( _target.data("idfood") ) == -1 ){
  				_cart.code.push( _target.data("idfood") );
  			}
				_cart.item[ String(_target.data("idfood")) ] = {
					price : _parent.find(".foodlist__price").text().trim().match(/[,\.\d]+/g)[0],
					foodname : _parent.find(".foodlist__title").text(),
					quantity : _value
				};
  		}

  		function getCart(){
  			return _cart;
  		}

  		$.cartFactory = {
  			"getCart": getCart 
  		};


	}

      	
	$.close_popupcontainer = function(){
  		$(".container-fluid").removeClass("popup__open");
  		setTimeout(function(){
  			$(".popupcontainer__space").html("");
  		}, 100);
   	}
})(jQuery);