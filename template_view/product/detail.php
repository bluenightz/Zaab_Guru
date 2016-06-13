<?php
if( $action == "edit" ) 
{
    $data['css'] = '<link href="' . base_url() . 'assets/backend/css/plugins/summernote/summernote.css" rel="stylesheet" />
        <link href="' . base_url() . 'assets/backend/css/plugins/summernote/summernote-bs3.css" rel="stylesheet" />
            <link href="' . base_url() . 'assets/backend/css/plugins/clockpicker/clockpicker.css" rel="stylesheet" />
        <link href="' . base_url() . 'assets/backend/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" />';

    $data['js'] = '<!-- SUMMERNOTE -->
        <script src="' . base_url() . 'assets/backend/js/plugins/summernote/summernote.min.js"></script>
            
        <!-- Clock picker -->
        <script src="' . base_url() . 'assets/backend/js/plugins/clockpicker/clockpicker.js"></script> 
            
        <!-- Data picker -->
       <script src="' . base_url() . 'assets/backend/js/plugins/datapicker/bootstrap-datepicker.js"></script>
       ';

    $data['js_script'] = '
            $(document).ready(function(){

                
                $(".shortsummernote").summernote();
                

           });
            var edit = function() {
                $(".click2edit").summernote({focus: true});
            };
            var save = function() {
                var aHTML = $(".click2edit").code(); //save HTML If you need(aHTML: array).
                $(".click2edit").destroy();
            };
        ';
}

    $this->load->view('backend/partials/header', $configs);
    echo $this->session->userdata('menus');
?>
<div id="page-wrapper" class="gray-bg">
    <?php
        $this->load->view('backend/partials/main');
    ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2> <?php echo $menu . ' ' . $action; ?> Form</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#"><?php echo $menu; ?></a>
                </li>
                <li class="active">
                    <strong><?php echo $action; ?> Form</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>All form elements <small>With custom checbox and radion elements.</small></h5>
                        <div class="ibox-tools">
                            <!--
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                            
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                            -->
                        </div>
                    </div>
                    <div class="ibox-content">
                        <?php
                            $attributes = array('class' => 'form-horizontal', 'id' => 'content_form');
                            echo form_open("/backend/product_master/".( strtolower($action) == 'edit' ? 'update' : 'insert' ));
                        ?>
                        <?php echo form_hidden('primary_key', $primary_key); ?>
                            <div id="reg-section-1" class="section-wrapper">
                                    
                                    <div class="form-group">
                                    <div class="col-lg-12">
                                                <div class="tabs-container">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a data-toggle="tab" href="#tab-106"> Master </a>
                                                        </li>
                                                        <li class="">
                                                            <a data-toggle="tab" href="#tab-101"> SKU </a>
                                                        </li>
                                                        
                                                        <li class="">
                                                            <a data-toggle="tab" href="#tab-105"> Media </a>
                                                        </li>
                                                        <?php if( strtolower($action) == 'edit' ){ ?>
                                                        <li class="">
                                                            <a data-toggle="tab" href="#tab-104"> List Sku </a>
                                                        </li>
                                                        <?php } ?>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div id="tab-106" class="tab-pane active">
                                                            <div class="panel-body">
                                                                <?php $this->view('backend/product/master'); ?>
                                                            </div>
                                                        </div>
                                                        <div id="tab-101" class="tab-pane">
                                                            <div class="panel-body">

                                                                <?php $this->view('backend/product/general'); ?>
                                                                    
                                                               
                                                            </div>
                                                        </div>
                                                        <div id="tab-105" class="tab-pane">
                                                            <div class="panel-body">
                                                                
                                                                    <?php $this->view('backend/product/media'); ?>

                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <?php if( strtolower($action) == 'edit' ){ ?>
                                                        <div id="tab-104" class="tab-pane">
                                                            <div class="panel-body">
                                                                
                                                                <?php $this->view('backend/product/listsku.php'); ?>

                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>


                                                </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    &nbsp;
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                        <a href="<?php echo base_url('backend/product_master/'); ?>/" class="text-gray">
                                            <button class="btn btn-white" type="button">Cancel</button>
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $addcontent; ?>
</div>

<?php  $this->load->view('backend/partials/footer', $data); ?>