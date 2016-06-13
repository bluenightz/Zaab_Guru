<div class="wrapper wrapper-content animated fadeInRight">
    <form id="campaign_form" method="POST" class="form-horizontal"> 
        <div class="row"> 
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Campaign</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Campaign Name</label>
                            <div class="col-sm-6"><input type="text" name="campaign_name" class="form-control"></div>
                        </div>

                        <div class="hr-line-dashed"></div>  
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Select Date</label>
                            <div class="col-sm-4">
                                <div id="data_5">
                                    <div class="input-daterange input-group" id="datepicker">
                                        <input type="text" class="input-sm form-control" name="start" value=""/>
                                        <span class="input-group-addon">to</span>
                                        <input type="text" class="input-sm form-control" name="end" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

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
                                                    <th><a href="#" class='checkall' fortype="promotion">Check All</a></th>
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
                                <div class="row m-t-lg m-b-lg p-b-xl p-t animated hidden formArea" id="formArea"></div>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="form-group" >
                            <label class="col-sm-2 control-label">Active</label>
                            <div class="col-sm-4">
                                <input type="checkbox" name="" id="" class="i-checks">
                            </div>
                        </div>

                        <div class="form-group" >
                            <label class="col-sm-2 control-label">Valid</label>
                            <div class="col-sm-1" style="width: auto;">
                                <input type="checkbox" name="" id="" class="i-checks">
                            </div>
                        </div>

                        

                        <div class="hr-line-dashed"></div>

                        <div class="form-group text-center" >
                            <button class="btn btn-w-m btn-primary promo-save">Save</button>
                            <button class="btn btn-w-m btn-success promo-submit">Submit</button>
                            <button class="btn btn-w-m btn-default promo-cancel">Cancel</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal inmodal fade" id="promotion_campaign" loadurl="/mockup_json/promotion2_checkbox.json" tabindex="-1" role="dialog"  aria-hidden="true">
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
                <button type="button" class="btn btn-primary" id="on_top_product_popup_choose">Choose</button>
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
                        <div class="col-sm-3 m-t-xs non-promotion hidden">
                            <label class="checkbox-inline"><input type="checkbox" class="i-checks non-promotion"> non-promotion</label>
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



