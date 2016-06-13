<div class="wrapper wrapper-content animated fadeInRight">
    <form method="post" class="form-horizontal">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Coupon List</h5>
                    </div>
                    <div class="ibox-content">

                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                            <a href="<?php echo base_url('backend/promotion/coupon'); ?>" class="btn btn-w-m btn-primary" id="btn-add-sku"><i class="fa fa-plus"></i> Add Coupon</a>
                        </div>
                    </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <table id="table_coupon_list" class="table table-striped table-bordered table-hover dataTables-example" style="width:100%" >
                                    
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

