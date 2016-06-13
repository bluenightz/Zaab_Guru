<?php  
$this->view('backend/partials/header', $configs); ?>
<div class="gray-bg">

    <div class="row wrapper border-bottom white-bg page-heading">
        
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <!-- <h5>All form elements <small>With custom checbox and radion elements.</small></h5> -->
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
	echo form_open("/backend/product_master/read/".$data['id'].'/' );
?>
<section class="container">

<?php echo form_hidden('sku_primary_key', $data['id']); ?>

<div id="reg-section-1" class="col-md-12">
	<?php $this->view('backend/product/general'); ?>
</div>

</section>

<div class="form-group">
    <div class="col-sm-4 col-sm-offset-2">
        <button class="btn btn-primary" type="submit">Save changes</button>
        <!-- <a href="<?php echo base_url('backend/product_master/'); ?>/" class="text-gray">
            <button class="btn btn-white" type="button">Cancel</button>
        </a> -->
    </div>
    <div class="clearfix"></div>
</div>

</form>
                    </div>
                </div>
            </div>
        </div>

</div>

<?php  
$this->view('backend/partials/footer');  
?>