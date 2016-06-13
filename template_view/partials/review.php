<?php

if( $action == "view" ){
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
                            echo form_open("/backend/product_review/update");
                        ?>

                            <?php echo form_hidden('id', $product_id); ?>
                            <?php echo form_hidden('product_review_id', $info['product_review_id']); ?>
                            
                                <div id="reg-section-1" class="section-wrapper">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label text-right">Product</label>
                                            <div class="col-sm-5">
                                                <?php echo(!isset($info['product_title']) ? NULL : $info['product_title']); ?>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label text-right">Member Name</label>
                                            <div class="col-sm-5">
                                                <?php echo(!isset($info['name']) ? NULL : $info['name']); ?>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label text-right">Review Description</label>
                                            <div class="col-sm-5">
                                                <?php echo(!isset($info['review_description']) ? NULL : $info['review_description']); ?>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label text-right">Rating</label>
                                            <div class="col-sm-5">
                                                <?php echo(!isset($info['review_level']) ? NULL : $info['review_level']); ?>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label text-right">Create Date</label>
                                            <div class="col-sm-5">
                                                <?php echo(!isset($info['created_date']) ? NULL : $info['created_date']); ?>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <?php if ( !empty($admin['modified_by']) ): ?>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label text-right">Modify By</label>
                                            <div class="col-sm-5">
                                                <?php echo(!isset($admin['modified_by']) ? NULL : $admin['modified_by']); ?>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <?php endif; ?>
                                        <?php if ( !empty($info['modified_date']) ): ?>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label text-right">Modify Date</label>
                                            <div class="col-sm-5">
                                                <?php echo(!isset($info['modified_date']) ? NULL : $info['modified_date']); ?>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <?php endif; ?>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label text-right">
                                                Status :
                                            </label>
                                            <div class="col-sm-5">
                                                <label class="radio-inline i-checks">
                                                    <?php echo form_checkbox('valid_flag', '1', set_radio('valid_flag', '1', $info['valid_flag']==1 ? TRUE : FALSE)) ?> <span> Approve </span>
                                                </label>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="hr-line-dashed"></div>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label text-right">
                                                Product Review Log :
                                            </label>
                                            <div class="col-sm-10">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <col width="5%">
                                                        <col width="50%">
                                                        <col width="20%">
                                                        <col width="20%">
                                                        <col width="5%">
                                                        <tr>
                                                            <th class="text-center">#</th>
                                                            <th>Review Description</th>
                                                            <th class="text-center">Create By</th>
                                                            <th class="text-center">Create Date</th>
                                                            <th class="text-center">Status</th>
                                                        </tr>
                                                    </thead>
                                                <tbody>
                                                <?php 
                                                foreach ($review_log as $key => $value) { ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo ($key+1); ?></td>
                                                        <td><?php echo (!isset($value['review_description']) ? 'Admin '.$value['modified_by'].' Edit This Review' : $value['review_description']); ?></td>
                                                        <td class="text-center"><?php echo ( !empty($value['created_by']) ? $value['created_by'] : $value['modified_by'] ); ?></td>
                                                        <td class="text-center"><?php echo date_language($value['created_date'] , TRUE); ?></td>
                                                        <td class="text-center"><?php echo ( ($value['valid_flag'] == '1') ? 'Y' : 'N' ) ; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="hr-line-dashed"></div>

                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <button class="btn btn-primary" type="submit">Save changes</button>
                                                <a href="<?php echo(base_url('backend/product_review/read/').'/'.$product_id.'/'); ?>" class="btn btn-white">Back</a>
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

    <?php $this->load->view('backend/partials/footer', $data); ?>