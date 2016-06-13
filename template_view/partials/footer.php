<?php 
    if( ! in_array('extra_call_colorbox',$extra_call) ) 
    { 
?>
<div class="footer">
    <div class="pull-right">
        10GB of <strong>250GB</strong> Free.
    </div>
    <div>
        <strong>Copyright</strong> Example Company &copy; 2014-2015
    </div> 
</div>
<?php } ?>
</div>
</div>
<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    
</div>
<div id="my_gallery_container" style="display:none;"></div>
<?php
echo '


    <!-- Data picker -->
   <script src="' . base_url() . 'assets/backend/js/plugins/datapicker/bootstrap-datepicker.js"></script>   
        
    <!-- script src="' . base_url() . 'assets/backend/js/plugins/validate/jquery.validate.min.js"></script -->
    
    <script src="' . base_url() . 'assets/backend/js/plugins/metisMenu/jquery.metisMenu.js"></script>
        
    <script src="' . base_url() . 'assets/backend/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        
    <script src="' . base_url() . 'assets/backend/js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="' . base_url() . 'assets/backend/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="' . base_url() . 'assets/backend/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="' . base_url() . 'assets/backend/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="' . base_url() . 'assets/backend/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="' . base_url() . 'assets/backend/js/inspinia.js"></script>
    <script src="' . base_url() . 'assets/backend/js/plugins/pace/pace.min.js"></script>
        
    <!-- iCheck -->
    <script src="' . base_url() . 'assets/backend/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Sweet alert -->
    <script src="' . base_url() . 'assets/backend/js/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Toastr script -->
    <script src="' . base_url() . 'assets/backend/js/plugins/toastr/toastr.min.js"></script>

     <!-- Date range picker -->
    <script src="' . base_url() . 'assets/backend/js/plugins/daterangepicker/daterangepicker.js"></script>
     <!-- Chalongrut JS -->
    <script src="' . base_url() . 'assets/backend/js/product-master.js"></script>

 ';

if ( in_array(strtolower($action), Array('ordering')) || in_array('extra_call_colorbox',$extra_call) ) 
{
?>
    <!-- jquery sort script -->
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<?php 
} 
?>

<?php if( in_array('call_msdrop',$extra_call) )
{ ?>

<script src="<?php echo base_url(); ?>assets/backend/js/plugins/moment/moment.js"></script>

<!-- Datetime picker -->
<script src=" <?php echo base_url(); ?>assets/backend/js/plugins/datetimepicker/datetimepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/js/plugins/msdropdown/jquery.dd.min.js"></script>

<?php } ?>

<?php
if (in_array(strtolower($action), Array('create', 'edit'))) 
{
    $this->view('Gallery/api/detail_js');
}


echo '<script src="' . base_url() . 'assets/backend/js/backend.js"></script>';

?>

<?php if ($this->session->flashdata('error_message')): ?>
    <script>
    <?php foreach ($this->session->flashdata('error_message') as $key => $value): ?>
        alert("<?php echo $value ?>");
    <?php endforeach ?>
    </script>
<?php endif ?>

<!-- Page-Level Scripts -->
<script>

    <?php echo $js_script; ?>


    $(document).ready(function() {

        <?php if( isset($more_js) && ! empty($more_js) ) 
        {
            echo $more_js;
        } 
        ?>

        if($(".lightbox").size() > 0){
            $(".lightbox").colorbox({
                width: 900
            }); 
        }
  

        var edit = function() {
            $(".click2edit").summernote({focus: true});
        };
        var save = function() {
            var aHTML = $(".click2edit").code(); //save HTML If you need(aHTML: array).
            $(".click2edit").destroy();
        };
        
        // Expire section
        if( $( ".expire-section input.expire" ).length > 0 && $( ".expire-section input.never-expire" ).length > 0 ) {
                // alert("");
                $( ".expire-section .i-checks > label" ).click(function(e){
                      
                       if( $(this).find('input').hasClass('expire') ) {
                          
                           $('#active_date , #expire_date').attr('disabled',false);
                       }
                       else {
                          
                           $('#expire_date').attr('disabled',true);
                       }
                });
                
                if( $('.expire-section .never-expire').is( ":checked" ) ) {
                    $('#expire_date').attr('disabled',true);
                }
                
        }

        if ($("#sortable").length > 0) {
            $("#sortable").sortable({items: "> tbody > tr.sort_element"});
        }

            // validate signup form on keyup and submit
 //        $("#content_form").validate();
            

//                    jQuery(".#content_form").validate({
//                highlight: function (element) {
//                    jQuery(element).closest('.form-group').addClass('has-error');
//                },
//                unhighlight: function (element) {
//                    jQuery(element).closest('.form-group').removeClass('has-error');
//                },
//                errorElement: 'span',
//                errorClass: 'help-block',
//                errorPlacement: function (error, element) {
//                    if (element.next('.select2').length) {
//                        error.insertAfter(element.next('.select2'));
//                    } else {
//                        error.insertAfter(element);
//                    }
//                },
//                rules: {
//                    plu: {
//                        required: true
//                    }

            
<?php
if (!in_array(strtolower($action), Array('create', 'edit'))) {
    ?>
    $(".delete_confirm").click(function (e) {
                        e.preventDefault();
                        var $_this = $(this);
                        swal({
                                    title: "Are you sure?",
                                    text: "Your will not be able to recover this imaginary file!",
                                    type: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "Yes, delete it!",
                                    cancelButtonText: "No, cancel plx!",
                                    closeOnConfirm: false,
                                    closeOnCancel: false },
                                function (isConfirm) {
                                    if (isConfirm) {
                                        swal("Deleted!", "Your imaginary file has been deleted.", "success");
                                        window.location = $_this.attr("href");
                                    } else {
                                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                                    }
                                });
                    });
<?php
}
?>



        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green'
        });


        $('.dataTables-example').dataTable({
            responsive: true,
            "dom": 'T<"clear">lfrtip',
            "tableTools": {
                "sSwfPath": <?php echo '"' . base_url() . 'assets/backend/"' ?> + "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
            }
        });


        /* Init DataTables */
        var oTable = $('#editable').dataTable();

        /* Apply the jEditable handlers to the table */
        oTable.$('td').editable('../example_ajax.php', {
            "callback": function(sValue, y) {
                var aPos = oTable.fnGetPosition(this);
                oTable.fnUpdate(sValue, aPos[0], aPos[1]);
            },
            "submitdata": function(value, settings) {
                return {
                    "row_id": this.parentNode.getAttribute('id'),
                    "column": oTable.fnGetPosition(this)[2]
                };
            },
            "width": "90%",
            "height": "100%"
        });


    });

    function fnClickAddRow() {
        $('#editable').dataTable().fnAddData([
            "Custom row",
            "New row",
            "New row",
            "New row",
            "New row"]);

    }

    $(function() {
        var i = -1;
        var toastCount = 0;
        var $toastlast;
        var getMessage = function() {
            var msg = 'Hi, welcome to Inspinia. This is example of Toastr notification box.';
            return msg;
        };



        // toastr.options = {
        //     "closeButton": true,
        //     "debug": false,
        //     "progressBar": true,
        //     "positionClass": "toast-top-right",
        //     "onclick": null,
        //     "showDuration": "400",
        //     "hideDuration": "1000",
        //     "timeOut": "7000",
        //     "extendedTimeOut": "1000",
        //     "showEasing": "swing",
        //     "hideEasing": "linear",
        //     "showMethod": "fadeIn",
        //     "hideMethod": "fadeOut"
        // }
<?php
if (isset($notification)) {
    echo get_notification($notification);
}
?>
    });


</script>

<?php echo Modules::run('Toastr_notifications/get'); ?>

<?php 
    if( in_array('extra_call_colorbox',$extra_call) ) { 
?>
    <script src="<?php echo base_url(); ?>assets/backend/js/plugins/dropzone/dropzone.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/plugins/jquery.blockUI/jquery.blockUI.js"></script>
<?php } ?>

    </body>
</html>