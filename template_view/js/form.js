var Form = function() {
    
return {
    //main function to initiate the module
    init: function () {
        
        // date picker
        jQuery('#datepicker .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            format: "dd-mm-yyyy",
            clearBtn: true,
            autoclose: true
        });
        
        // datetime picker
        
        jQuery(".active-date").datetimepicker({
            format: "dd-mm-yyyy hh:ii",
            autoclose: true,
            todayBtn: true,
            minuteStep: 10
        }).on('changeDate', function (ev) {
                var dateSelected = new Date(Date.parse(ev.date));
                dateSelected.setHours(dateSelected.getHours() +24, 0, 0, 0);
                $(".expire-date").datetimepicker('setStartDate', dateSelected);
            });
        
        jQuery(".expire-date").datetimepicker({
            format: "dd-mm-yyyy hh:ii",
            autoclose: true,
            todayBtn: true,
            minuteStep: 10
            }).on('changeDate', function (ev) {
                var dateSelected = new Date(Date.parse(ev.date));
                dateSelected.setHours(dateSelected.getHours() + 24, 0, 0, 0);
                $(".active-date").datetimepicker('setEndDate', dateSelected);
            });
        

        
        //$('.form_datetime').datetimepicker('setStartDate', '2012-01-01');
        
        // custom checkbox radio skin
        jQuery('.i-checks').iCheck({
            checkboxClass: 'icheckbox_minimal-grey',
            radioClass: 'iradio_minimal-grey'
        });
        
        // select2
        jQuery('.options').select2();
        
        //image preview
        jQuery('#blueimp_single*, .preview').on('click',function(event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        });
        // confirm to delete individual image
        jQuery('.ibox-content').on('click', 'a.remove-image', function (event) {
            event.preventDefault();
            var parentDiv  = jQuery(this).parent('div');
            if (confirm("Are you sure?")) {
                    var jqxhr = $.ajax({
                        url: jQuery(this).attr('href'),
                        async :false                    
                    }) 
                        .done(function() {
                            parentDiv.slideUp(500);
                            parentDiv.html(null);
                    })
                        .fail(function() {
                            alert( "error" );
                    });
                return false;
            }
        });
    }

}; //End return
    
}();

