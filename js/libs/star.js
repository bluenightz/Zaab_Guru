(function($){
	$.fn.starvote = function(){
		var html = {
			"starfull" : '<span class="icon-star-full"></span>',
			"starempty" : '<span class="icon-star-empty"></span>',
			"vote" : '<span class="voter"></span>'
		}

		var _this = $(this),
		_max = 5;
		_data = {
			"voter" : _this.data("voter") ,
			"votescore" : _this.data("votescore") ,
			"starnum" : Math.round(_this.data("votescore") / _max)
		}


		function render(){
			var _str = '';
			for( var i = 0; i < _max ; ++i ){
				if( i <= _data.starnum ){
					_str += html.starfull;
				}else{
					_str += html.starempty;
				}
			}
			_this.append( _str );
		}

		render();
							// '<span class="icon-star-full"></span><span class="icon-star-full"></span><span class="icon-star-full"></span><span class="icon-star-empty"></span><span class="icon-star-empty"></span> <span class="voter"></span>'
	}
})(jQuery);