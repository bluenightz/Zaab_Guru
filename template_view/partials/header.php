<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Emedia CMS Management</title>
<?php 

echo '<link href="'.base_url().'assets/backend/css/bootstrap.min.css" rel="stylesheet" />
    <link href="'.base_url().'assets/backend/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Data Tables -->
    <link href="'.base_url().'assets/backend/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="'.base_url().'assets/backend/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet" />
    <link href="'.base_url().'assets/backend/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet" />

    <!-- Toastr style -->
    <link href="'.base_url().'assets/backend/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="'.base_url().'assets/backend/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">';

    if ( !in_array( strtolower($action) , Array('create','edit')) ) {
        echo '<link href="'.base_url().'assets/backend/css/animate.css" rel="stylesheet" />';
    }

echo '
    <link href="'.base_url().'assets/backend/css/plugins/iCheck/custom.css" rel="stylesheet" />
    ';

    if ( in_array( strtolower($action) , Array('create','edit')) ) {
        $this->load->view('Gallery/api/detail_css');
    }
    
    echo '<link href="'.base_url().'assets/backend/css/style.css" rel="stylesheet" />';

?>

<?php if( in_array('call_msdrop',$extra_call) )
{ ?>

<link href=" <?php echo base_url(); ?>assets/backend/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet" />
<link href=" <?php echo base_url(); ?>assets/backend/css/plugins/datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet" />
<link href=" <?php echo base_url(); ?>assets/backend/css/plugins/msdropdown/msdropdown/dd.css" rel="stylesheet" />

<?php } ?>

<style>
    .note-editor { border:solid 1px #e5e6e7; }
    .col-centered {
        text-align: center;
    }
    .custom-gallery .col-lg-3 , .custom-gallery .col-lg-3 img { max-height:300px; max-height:400px; } 
    #deleted-table table.table tbody > tr { background-color: #f3f3f4; }
    .custom_list_head { margin:-8px 0 0 0; }
    .custom_list_head .btn-info {  }
    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
    
    .table-responsive .table { width:99.8%; }
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/css/plugins/dropzone/basic.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/css/plugins/dropzone/dropzone.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/css/plugins/jcrop/jquery.Jcrop.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/css/plugins/blueimp/css/blueimp-gallery.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/css/custom.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/css/plugins/colorbox/colorbox.css">

<!-- <script src="<?php echo base_url(); ?>assets/backend/js/plugins/dropzone/dropzone.js"></script> -->

  <script src="<?php echo base_url(); ?>assets/backend/js/jquery-2.1.1.js"></script>
  <script src="<?php echo base_url(); ?>assets/backend/js/plugins/validate/jquery.validate.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/backend/js/my_validate.js"></script>
  <script src="<?php echo base_url(); ?>assets/backend/js/bootstrap.min.js"></script> 
  <script src="<?php echo base_url(); ?>assets/backend/js/plugins/jcrop/jquery.Jcrop.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/backend/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
  <?php if($configs['has_youtube']): ?>
  <script src="<?php echo base_url(); ?>assets/backend/js/plugins/jquery-video/js/jquery.video-extend.js"></script>
  <?php endif ?>
  <?php if($configs['has_colorpicker']): ?>
    <script src="<?php echo base_url(); ?>assets/backend/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <?php endif ?>
  <script src="<?php echo base_url(); ?>assets/backend/js/plugins/colorbox/jquery.colorbox-min.js"></script>

</head>

<body>

    <div id="wrapper">

        