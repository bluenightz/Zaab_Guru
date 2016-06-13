<div class="wrapper wrapper-content animated fadeInRight">
    <form method="post" action="<?php echo base_url('backend/promotion/coupon/insert'); ?>" class="form-horizontal">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Coupon</h5>
                    </div>
                    <div class="ibox-content">
                        
                        <!-- start here -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Coupon Name</label>
                            <div class="col-sm-6"><input type="text" class="form-control" name="coupon_name" value="<?php echo $COUPON_NAME; ?>"></div>
                        </div>

                        <div class="hr-line-dashed"></div>  

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Prefix</label>
                            <div class="col-sm-6"><input type="text" class="form-control" name="coupon_prefix" value="<?php echo $COUPON_PREFIX; ?>"></div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Life Time</label>
                            <div class="col-sm-2"><input type="number" min="0" class="form-control life-time" name="coupon_lifetime" value="<?php echo $COUPON_LIFE_TIME; ?>"></div>
                            <div class="col-sm-3 m-t-xs">
                                <input type="checkbox" class="i-checks never-expired" data-inputlink=".life-time" name="coupon_never_expire" <?php echo ($UNLIMITED_FLAG === 'Y') ? 'checked':''; ?>> Never expired
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>  

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Quantity</label>
                            <div class="col-sm-2"><input type="number" min="0" class="form-control" name="coupon_amount" value="<?php echo $COUPON_QTY; ?>"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3 col-sm-offset-2">
                                <input type="checkbox" class="i-checks" name="coupon_share_code" <?php echo ($COUPON_SHARE_FLAG === 'Y') ? 'checked':''; ?>> Share code
                            </div>
                        </div>

                        <!-- <div class="hr-line-dashed"></div>  
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <button type="button" class="btn btn-w-m btn-primary " data-toggle="modal" data-target="#promotion_campaign">เลือกโปรโมชั่น</button>
                                        <button type="button" class="btn btn-w-m btn-primary " id="btn-call-form"><i class="fa fa-plus"></i> เพิ่มโปรโมชั่น</button>
                                    </div>
                                </div>



                                

    

                                <div class="row">
                                    <div class="col-sm-12 table-responsive">


                                            <table class="table table-striped" id="on_top_table_product">
                                                <col width="100">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>โปรโมชั่น</th>
                                                </tr>
                                                </thead>

                                                <input type="hidden" name="save" value="true" >
                                                <?php 
                                                    if( $_POST['save'] ): 
                                                ?>
                                                <tbody>
                                                    <tr role="row" class="odd"><td><div class="icheckbox_square-green checked" style="position: relative;"><input checked="" type="checkbox" class="i-checks" value="0001" name="promotions[]" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div></td><td>โปรโมชั่น 1</td></tr>
                                                </tbody>
                                                <?php endif; ?>

                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2"></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 


                        <div class="row formArea-wrapper">
                            <div class="col-sm-12">
                                <div class="row m-t-lg m-b-lg p-b-xl p-t animated hidden formArea"  id="formArea"></div>
                            </div>
                        </div> -->

                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Campaign</label>
                            <div class="col-sm-3">
                                <select name="campaign_id" id="dropdown_campaign" class="form-control">
                                    <option value="">Choose Campaign</option>
                                    <?php echo $campaign_options; ?>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <?php if( ! $promotion_options): ?>
                                    <select name="promotion_id" id="dropdown_campaign_promotion" class="form-control hidden" disabled>
                                        <option value="">Select Promotion</option>
                                    </select>
                                <?php else: ?>
                                    <select name="promotion_id" id="dropdown_campaign_promotion" class="form-control">
                                        <option value="">Select Promotion</option>
                                        <?php echo $promotion_options; ?>
                                    </select>
                                <?php endif ?>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Remark</label>
                            <div class="col-sm-10"><textarea name="coupon_remark" id="" cols="30" rows="6" class="form-control"><?php echo $REMARK; ?></textarea></div>
                        </div>

                        

                        <div class="hr-line-dashed"></div>

                        <div class="form-group text-center" >
                            <input type="hidden" name="coupon_id" >
                            <button class="btn btn-w-m btn-success">Create</button>
                            <button class="btn btn-w-m btn-default">Cancel</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal inmodal fade" id="promotion_campaign" loadurl="/mockup_json/promotion2.json" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">เลือกโปรโมชั่น</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered table-hover dataTables-example" ></table>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary" id="on_top_product_popup_choose">Choose</button> -->
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal fade" id="product_popup" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">เลือกสินค้า</h4>
                <small class="font-bold">เลือกสินค้าที่จะร่วมรายการโปรโมชั่น</small>
            </div>
            <div class="modal-body">
                <div class="row m-b">
                    <div class="form-group">
                        <label for="" class="control-label"></label>
                        <div class="col-sm-4">
                            <select name="" id="product_category_dropdown" class="form-control">
                                <option value="">เลือกหมวดสินค้า</option>
                                <option value="/mockup_json/product1.json">หมวดสินค้า 1</option>
                                <option value="/mockup_json/product2.json">หมวดสินค้า 2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered table-hover dataTables-example" ></table>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="product_popup_choose">Choose</button>
            </div>
        </div>
    </div>
</div>




<div class="modal inmodal fade" id="gift_popup" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">เลือกของแถม</h4>
                <small class="font-bold">เลือกสินค้าที่จะนำมาเป็นของแถม</small>
            </div>
            <div class="modal-body">
                <div class="row m-b">
                    <div class="form-group">
                        <label for="" class="control-label"></label>
                        <div class="col-sm-4">
                            <select name="" id="gift_popup_product_category_dropdown" class="form-control">
                                <option value="">เลือกหมวดสินค้า</option>
                                <option value="/mockup_json/gift1.json">หมวดสินค้า 1</option>
                                <option value="/mockup_json/gift2.json">หมวดสินค้า 2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <col width="100">
                        </table>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



