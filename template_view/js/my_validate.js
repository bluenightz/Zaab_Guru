$(document).ready( function() {
	// var base = $("meta[name=base]").attr("content");

	jQuery.validator.addMethod(
        "telephone", function(value, element) {
            return this.optional(element) || /0\d{8,9}$/.test(value);
        }, "Please check your telephone number."
	);
	
	jQuery.validator.addMethod(
        "house_no", function(value, element) {
            return this.optional(element) || /^[1-9]\d+(\/[0-9]+)?$/.test(value);
        }, "Please check your house number."
	);

	jQuery.validator.addMethod(
        "latitude", function(value, element) {
            return this.optional(element) || /^[-]?\d{1,2}(?:\.\d{1,6})?$/.test(value);
        }, "Please check latitude value. ex: 13.345677"
	);

	jQuery.validator.addMethod(
        "longitude", function(value, element) {
            return this.optional(element) || /^[-]?\d{1,3}(?:\.\d{1,6})?$/.test(value);
        }, "Please check longitude value. ex: 13.345677"
	);

	( function() {
		'use strict';
		var form = $("#content_form");

		if( form ) {

			form.validate({
            	ignore: '""',
	            submitHandler: function(_form){
	                
	                var cover_element = $("#emediaAwesomeDropzone").find(".cover-actived");
	                var youtube_cover_element = $("#emediaAwesomeDropzone").find(".dz-preview").find(".btn-success");
	                if( cover_element.size() > 0 ){
	                    var cover_image_file_name = cover_element.find("input[name^=image_file_name]").val();
	                    form.append('<input type="hidden" name="cover_image_file_name" value="'+cover_image_file_name+'" /> ');
	                }
	                if(youtube_cover_element.size() > 0){
	                    var cover_youtube_image_file_name = youtube_cover_element.parent().find("input[name^=image_file_name]").val();
	                    form.append('<input type="hidden" name="cover_youtube_image_file_name" value="'+cover_youtube_image_file_name+'" /> ');
	                }

	                var cd_dropdown = $(".dropdown-required");
					if( cd_dropdown.size() > 0 ) {
						var target;
						$.each(cd_dropdown, function(index, ddl) {
							ddl = $(ddl);
							target = ddl.parent();
							
							if( ddl.val() == "0") {
								$("<label class='error'>Please select at least one option.</label>").insertAfter(target);
								// cd_dropdown.focus();
								return false;
							}
						} );
						
					}
					
					form.find("button[type=submit]").attr("disabled", "disabled");

	                _form.submit();
	                
	            }
            }); 
		}

	}() ); 

} );