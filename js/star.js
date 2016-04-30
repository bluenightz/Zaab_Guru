(function($){
	$.fn.starvote = function(){

		$(this).each(function(i, e){
			makestar.call(e);	
		});

		function makestar(){
			var _this = $(this),
			_max = 5;
			_data = {
				"voter" : _this.data("voter") ,
				"votescore" : _this.data("votescore") ,
				"starnum" : Math.round(_this.data("votescore") / _this.data("voter"))
			};
			var html = {
				"starfull" : '<span class="icon-star-full"></span>',
				"starempty" : '<span class="icon-star-empty"></span>',
				"vote" : '<span class="voter"></span>'
			}

			function render(){
				var _str = '';
				for( var i = 0; i < _max ; ++i ){
					if( i < _data.starnum ){
						_str += html.starfull;
					}else{
						_str += html.starempty;
					}
				}
				_str += ' <span class="voter">' + _data.voter + ' คน</span>';
				_this.append( _str );

				_this.find("*[class^='icon-star']").click(function(e){
					_this.setvote();
				});

			}

			render();

		}

		$.fn.setvote = function(){
			var _this = $(this);
			var _shopid = _this.data("shopid");

			$.ajax({
				'url':'',
				'method': "POST",
				'data': { 'shopid': _shopid },
				'success': function(){
					alert('โหวตเรียบร้อย');
				}
			});
		}
	}
})(jQuery);