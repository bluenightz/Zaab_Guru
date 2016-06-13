function english_title_only( event )
{
    var ew = event.which;
    
    if(ew === 32 || ew === 8 || ew === 0 || ew === 116 || ew === 45 || ew === 43 || ew === 38 || ew === 41 || ew === 42 || ew == 64 || ew == 33 )
        return true;
    if(48 <= ew && ew <= 57)
        return true;
    if(65 <= ew && ew <= 90)
        return true;
    if(97 <= ew && ew <= 122)
        return true;
    if(ew == 95)
        return true;
    return false;
}
var attribute_row = 1;
function addAttribute()
{
    // html  = '<tr class="padding-spector attribute-row' + attribute_row + '" >';
    // html += '  <td class="text-left">&nbsp;</td>';
    // html += '  <td class="text-left">';
    //     html += '<div class="input-group"><span class="input-group-addon"></span><input name="product_attribute[TH][' + attribute_row + '][value]" rows="5" placeholder="Text" class="form-control"></input></div>';
    //     html += '  </td>';
    // html += '  <td class="text-left"><button type="button" onclick="$(\'.attribute-row' + attribute_row + '\').remove();" data-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
    // html += '</tr>';
    
    

    var html  = '<tr class="padding-spector attribute-row' + attribute_row + '" >';
    html += '  <td class="text-left"> English </td>';
    html += '  <td class="text-left"><input type="text" name="product_attribute[' + attribute_row + '][key_en]" value="" placeholder="Attribute" class="form-control" /><input type="hidden" name="product_attribute[' + attribute_row + '][attribute_id]" value="" /></td>';
    html += '  <td class="text-left">';
        html += '<div class="input-group"><span class="input-group-addon"></span><input name="product_attribute[' + attribute_row + '][value_en]" placeholder="Text" class="form-control"></input></div>';
        html += '  </td>';
    html += '  <td class="text-left"></td>';
    html += '</tr>';

    html += '<tr class="padding-spector attribute-row' + attribute_row + '" >';
    html += '  <td class="text-left"> Thai </td>';
    html += '  <td class="text-left"><input type="text" name="product_attribute[' + attribute_row + '][key_th]" value="" placeholder="Attribute" class="form-control" /><input type="hidden" name="product_attribute[' + attribute_row + '][attribute_id]" value="" /></td>';
    html += '  <td class="text-left">';
        html += '<div class="input-group"><span class="input-group-addon"></span><input name="product_attribute[' + attribute_row + '][value_th]" placeholder="Text" class="form-control"></input></div>';
        html += '  </td>';
    html += '  <td class="text-left"><button type="button" onclick="$(\'.attribute-row' + attribute_row + '\').remove();" data-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
    html += '</tr>';

    html += '<tr class="padding-spector attribute-row' + attribute_row + '" ><td colspan="4" class=""><div class="form-group"><div class="hr-line-dashed"></div></div> </td></tr>';

    $('#attribute tbody').append(html);

    //$('#attribute.en tbody').append(html);
    
    attribute_row++;
}

function Cint($agument) 
{
    
    if( $agument === '' )
    { return 0; }
    if(typeof $agument === "undefined")
    { return 0; }
    
    
    $agument = parseInt($agument);
    
    if( isNaN($agument) )
    {
        return 0;
    }
    
    return ($agument > 0 ? $agument : 0 );
}

function key_digit(e) 
{
    var KeyCode = (e.keyCode ? e.keyCode : e.which);
    var CharCode = (e.charCode ? e.charCode : 0);
    //CharCode = ($.browser.msie ? -1 : CharCode );
    return ((KeyCode == 8) // backspace
        || (KeyCode == 9) // tab
        || (KeyCode == 37) // left arrow
        || (KeyCode == 39) // right arrow
        || ((KeyCode == 46) && (CharCode == 0)) // delete
        || (CharCode == 0)
        || ((KeyCode > 47) && (KeyCode < 58)) // 0 - 9
    );
            

}

function key_decimal(e) 
{
    var KeyCode = (e.keyCode ? e.keyCode : e.which);
    var CharCode = (e.charCode ? e.charCode : 0);
    //CharCode = ($.browser.msie ? -1 : CharCode );

    return ((KeyCode == 8) // backspace
        || (KeyCode == 9) // tab
        || (KeyCode == 37) // left arrow
                || (KeyCode == 45) // minus
        || (KeyCode == 39) // right arrow
        || ((KeyCode == 46) && (CharCode == 0)) // delete
        || (CharCode == 0)
        || ((KeyCode > 47) && (KeyCode < 58)) // 0 - 9
        || (KeyCode == 46) // dot
    );
}

$(document).ready(function()
{

    $('.demo1').click(function(e){
        addAttribute();
    });

    if( $('.edit-product').length > 0 )
    {
        $('.edit-product').colorbox({ maxWidth:"95%" , height: ( $(window).height() *0.95) + 'px' , width:"100%" ,"iframe":true , onClosed:function(){ ''; } });
    }

    if( $('#colorselect').length > 0 )
    {
        $('#colorselect').msDropDown({});
    }
    
    if( $("#data_alone .input-group.date").length > 0 )
    {        
            $("#data_alone .input-group.date").datetimepicker({
                //format: 'DD-MM-YYYY HH:mm:ss'
                format: 'DD-MM-YYYY',
                maxDate: new Date(),
                }).on("dp.change", function (e) {
                 //$("#data_2 .input-group.date").data("DateTimePicker").minDate(e.date);
            });

            $("#data_alone .input-group.date input").click(function(event) {
                    $("#data_alone .input-group.date").data("DateTimePicker").show();
            }).keypress(function(e) {
                if( e.keyCode == 8 )
                {
                    return false;
                }
            });


            
    }

    if( $("#data_1 .input-group.date").length > 0 && $("#data_2 .input-group.date input").length > 0 )
    {
            $("#data_1 .input-group.date").datetimepicker({
                format: 'DD-MM-YYYY HH:mm:ss'
                }).on("dp.change", function (e) {
                 $("#data_2 .input-group.date").data("DateTimePicker").minDate(e.date);
            });


            $("#data_2 .input-group.date").datetimepicker({
                format: 'DD-MM-YYYY HH:mm:ss'
            }).on("dp.change", function (e) {
                $("#data_1 .input-group.date").data("DateTimePicker").maxDate(e.date);
            });

            $("#data_1 .input-group.date input").click(function(event){
                    $("#data_1 .input-group.date").data("DateTimePicker").show();
            }).keypress(function(e) {
                if( e.keyCode == 8 )
                {
                    return false;
                }
            });

            $("#data_2 .input-group.date input").click(function(event){
                    $("#data_2 .input-group.date").data("DateTimePicker").show();
            }).keypress(function(e) {
                if( e.keyCode == 8 )
                {
                    return false;
                }
            });
    }
    if( $("#data_3 .input-group.date").length > 0 && $("#data_4 .input-group.date input").length > 0 )
    {
            $("#data_3 .input-group.date").datetimepicker({
                    format: 'DD-MM-YYYY HH:mm:ss'
                }).on("dp.change", function (e) {
                 $("#data_4 .input-group.date").data("DateTimePicker").minDate(e.date);
            });


            $("#data_4 .input-group.date").datetimepicker({
                    format: 'DD-MM-YYYY HH:mm:ss'
            }).on("dp.change", function (e) {
                $("#data_3 .input-group.date").data("DateTimePicker").maxDate(e.date);
            });

            $("#data_3 .input-group.date input").click(function(event){
                    $("#data_3 .input-group.date").data("DateTimePicker").show();
            }).keypress(function(e) {
                if( e.keyCode == 8 )
                {
                    return false;
                }
            });

            $("#data_4 .input-group.date input").click(function(event){
                    $("#data_4 .input-group.date").data("DateTimePicker").show();
            }).keypress(function(e) {
                if( e.keyCode == 8 )
                {
                    return false;
                }
            });
    }
    
    if( $("#data_5 .input-group.date").length > 0 && $("#data_6 .input-group.date input").length > 0 )
    {
            $("#data_5 .input-group.date").datetimepicker({
                    format: 'DD-MM-YYYY HH:mm:ss'
                }).on("dp.change", function (e) {
                 $("#data_6 .input-group.date").data("DateTimePicker").minDate(e.date);
            });


            $("#data_6 .input-group.date").datetimepicker({
                    format: 'DD-MM-YYYY HH:mm:ss'
            }).on("dp.change", function (e) {
                $("#data_5 .input-group.date").data("DateTimePicker").maxDate(e.date);
            });

            $("#data_5 .input-group.date input").click(function(event){
                    $("#data_5 .input-group.date").data("DateTimePicker").show();
            }).keypress(function(e) {
                if( e.keyCode == 8 )
                {
                    return false;
                }
            });

            $("#data_6 .input-group.date input").click(function(event){
                    $("#data_6 .input-group.date").data("DateTimePicker").show();
            }).keypress(function(e) {
                if( e.keyCode == 8 )
                {
                    return false;
                }
            });
    }


    if( $( "#sortable" ).length > 0 )
    {
        // $( "#sortable" ).sortable({
        //     items: "> .sort_element"
        // });


        $( "#sortable" ).sortable({
            placeholder: "ui-state-highlight col-lg-3 col-md-4 col-xs-6",
            revert: true,
            //handle: ".fa-arrows-v, .timeline-header",
            //axis: "y",
            beforeStop: function(event, ui) {
                cancelRequired = (ui.placeholder.index() <= 1);
            },
            stop: function(e, ui) {
                if (cancelRequired) {
                    $(this).sortable('cancel');
                } else {


                  // var $id = $(ui.item).attr('data-id');
                  // var $updatedate = $(ui.item).prevAll('.time-label:eq(0)').attr('data-time');

                  // var x = $(ui.item).prevAll('.time-label:eq(0)').index() + 1;
                  // var y = $(ui.item).nextAll('.time-label:eq(0)').index() - 1;

                  // var ids = {};
                  // for (var i = (x); i <= (y); i++) {
                  //   ids[i] = $('.timeline li:eq('+ i +')').attr('data-id');
                  // }

                  // var $ordering = JSON.stringify(ids);
                  
                  // $.post( $(this).attr('ajax-url'), { updatedate: $updatedate, id: $id, ordering:$ordering }).done(function( data ) {
                  //     // do something
                  // });
              }
            }
    });
        ///$( "#sortable" ).disableSelection();
    }
    
    /*
    $("input[type=checkbox]").change(function (e) {

            if ($(this).is(':checked')) 
            {
                    var $check = confirm('Are you need to delete this?');

                    if( $check )
                    {
                        $(this).addClass('checked');
                    }
                    else
                    {
                        $(this).attr('checked',false);
                        $(this).removeClass('checked');
                        return false;
                    }
            }
            else
            {
                    
            }
            
    });*/

    $('.address-content.active input.form-control').keypress(function(e){
        //return false;
    });
    
    $(".eng").keypress(function (event) {
            return english_title_only(event)
    });

    $("input.numeric").each(function(){
        $(this).keypress(function(e){
            return key_digit(e);
        });
    });

    $("input.decimal").each(function(){
        $(this).keypress(function(e){
            return key_decimal(e);
        });
    });

    $('input.edit-check1').on('ifChecked', function(e) {

            if( $(this).parents('.address-content').hasClass('active') )
            {
                $(this).parents('.address-content').removeClass('active');
            }
            else 
            {
                $(this).parents('.address-content').addClass('active');
            }
        
    });
    
    $('input.edit-check1').on('ifUnchecked', function(e) {

            if( $(this).parents('.address-content').hasClass('active') )
            {
                $(this).parents('.address-content').removeClass('active');
            }
            else 
            {
                $(this).parents('.address-content').addClass('active');
            }
        
    });

    

    $("a").each(function () {
        if ($(this).attr("href") === "#") {
            $(this).click(function (e) {
                e.preventDefault();
            });
        }
    });
    
    
    
});


function str_format(str, col) 
{
    col = typeof col === 'object' ? col : Array.prototype.slice.call(arguments, 1);

    return str.replace(/\{\{|\}\}|\{(\w+)\}/g, function (m, n) {
        if (m == "{{") {
            return "{";
        }
        if (m == "}}") {
            return "}";
        }
        return col[n];
    });
}

function key_number(e) {
    var KeyCode = (e.keyCode ? e.keyCode : e.which);
    var CharCode = (e.charCode ? e.charCode : 0);
    //CharCode = ($.browser.msie ? -1 : CharCode);

    return ((KeyCode == 8) // backspace
            || (KeyCode == 9) // tab
            || (KeyCode == 37) // left arrow
            || (KeyCode == 39) // right arrow
            || ((KeyCode == 46) && (CharCode == 0)) // delete
            || (CharCode == 0)
            || ((KeyCode > 47) && (KeyCode < 58)) // 0 - 9
            || (KeyCode == 46) // .
            );
}