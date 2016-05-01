(function($){
	$.fn.starsearch = function( _elementname ){
				// if( arguments.length )
				// var _elementname = "search_star";
				var _this = $(this);
				var _inputhidden = $("<input type='hidden' name='" + _elementname + "' id='" + _elementname + "' value='1' >");
				var _value = 1;

				var html = {
					"starfull" : '<span class="icon-star-full"></span>',
					"starempty" : '<span class="icon-star-empty"></span>',
					"vote" : '<span class="voter"></span>'
				}

				var _max = 5;


				function init_render(){
					var _str = '';
					for( var i = 0; i < _max ; ++i ){
						if( i <= 0 ){
							_str += html.starfull;
						}else{
							_str += html.starempty;
						}
					}

					_this.append( _str );
					_this.append( _inputhidden );

					_this.find("*[class^='icon-star']").click(function(e){
						$(this).setsearch( $(this).index() + 1 );

					});
				}

				$.fn.setsearch = function( _index ){
					_inputhidden.val( _index );
					_value = _index;
					$(this).closest(".star").find("*[class*='icon-star']").each(function(i, e){
						if( i < _value ){
							$(e).attr("class", "icon-star-full");
						}else{
							$(e).attr("class", "icon-star-empty");
						}
					});
				}

				function getstar(){
					return _value;
				}
				

				init_render();

				return{
					"getstar" : getstar
				}

	}

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