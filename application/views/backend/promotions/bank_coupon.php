<div class="wrapper wrapper-content animated fadeInRight">
    <form action="get" class="form-horizontal">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Coupon</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Coupon Name</label>
                            <div class="col-sm-6"><input type="text" class="form-control"></div>
                        </div>

                        <div class="hr-line-dashed"></div>  

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Coupon Code</label>
                            <div class="col-sm-4"><input type="text" class="form-control"></div>
                        </div>

                        <div class="hr-line-dashed"></div>  

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Usage</label>
                            <div class="col-sm-4"><input type="number" min="0" class="form-control"></div>
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

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Select Bank(s)</label>
                            <div class="col-sm-2">
                                <select name="" class="form-control" id="bank_choice">
                                    <option value="">-----</option>
                                    <option value="">SCB</option>
                                    <option value="">BBL</option>
                                </select>
                            </div>
                            <div class="col-sm-2 text-right">
                                <button type="button" data-toggle="modal" data-target="#agent_popup" class="btn btn-primary"><i class="fa fa-plus"></i> Agent Code</button>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>  

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Agent Promotion Code</label>
                            <div class="col-sm-4"><input type="text"  class="form-control"></div>
                        </div>

                        <div class="hr-line-dashed"></div>  

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Discount</label>
                            
                                    <div class="col-sm-3">
                                        <input type="number" min="0" class="form-control">
                                    </div>
                                    <div class="col-sm-1">
                                        <select name="" id="" class="form-control">
                                            <option value="">%</option>
                                            <option value="">Baht</option>
                                        </select>
                                    </div>
                        </div>
                        

                        <div class="hr-line-dashed"></div>


                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-2">
                                <div class="row">
                                    <div class="col-sm-12 float-e-margins">
                                        <button type="button" class="btn btn-w-m btn-primary pull-right" data-toggle="modal" data-target="#product_popup">เพิ่มสินค้าร่วมรายการ</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 table-responsive">
                                        
                                            <table class="table table-striped" id="table_product">
                                                <col width="100">
                                                <thead>
                                                <tr>
                                                    <th><a href="#" class='checkall' fortype="product">Check All</a></th>
                                                    <th>สินค้าร่วมรายการ</th>
                                                </tr>
                                                </thead>
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

                        <div class="hr-line-dashed"></div>

                        <div class="form-group" >
                            <label class="col-sm-2 control-label">Approve</label>
                            <div class="col-sm-4">
                                <input type="checkbox" name="" id="" class="i-checks">
                            </div>
                        </div>

                        <div class="form-group" >
                            <label class="col-sm-2 control-label">On-top</label>
                            <div class="col-sm-1" style="width: auto;">
                                <input type="checkbox" name="" id="" class="i-checks on-top-btn" checked disabled>
                                <input type="hidden" name="ontop_checkbox" id="ontop_checkbox" >
                            </div>
                            <div class="col-sm-2 on-top-content">
                                <button type="button" class="btn btn-primary m-l" data-toggle="modal" data-target="#on_top_product_popup" id="open-modal-on-top">เลือกโปรโมชั่น</button>
                            </div>
                        </div>

                        <div class="form-group on-top-content">
                            <label  class="col-sm-2 control-label">&nbsp;</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-12 table-responsive">
                                        
                                            <table class="table table-striped" id="on_top_table_product">
                                                <col width="100">
                                                <thead>
                                                <tr>
                                                    <th><a href="#" class='checkall' fortype="promotion">Check All</a></th>
                                                    <th>รายการโปรโมชั่น</th>
                                                </tr>
                                                </thead>
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

                        <div class="hr-line-dashed"></div>

                        <div class="form-group text-center">
                            <button class="btn btn-w-m btn-primary">Save</button>
                            <button class="btn btn-w-m btn-success">Submit</button>
                            <button class="btn btn-w-m btn-default">Cancel</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
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


<div class="modal inmodal fade" id="on_top_product_popup" loadurl="/mockup_json/promotion.json" tabindex="-1" role="dialog"  aria-hidden="true">
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


<div class="modal inmodal fade" id="agent_popup" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">เพิ่ม Agent Code</h4>
                <small class="font-bold">ใส่รายละเอียดที่ต้องการเพิ่ม</small>
            </div>
            <form id="form_agent_code">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group">
                        <label for="" >Agent Code</label>
                        <input type="text" name="" id="agent_code" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" >Agent Name</label>
                        <input type="text" name="" id="agent_name" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Bank Flag</label>
                        <div>
                            <input type="checkbox" name="" id="" class="form-control i-checks">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="agent_popup_submit">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>



