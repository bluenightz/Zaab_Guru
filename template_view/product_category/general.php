<?php 
$prefix_element = 'sku'; 
$lang = Array(
    Array('index'=>'EN' , 'title'=>'English')
    ,
    Array('index'=>'TH' , 'title'=>'ไทย')
    );
?>
<div class="form-group">
        <label class="col-sm-2 control-label text-right">
            Status Published :
        </label>
        <div class="col-sm-5">
            <label class="radio-inline i-checks">
                <?php echo form_radio($prefix_element.'[published]', '1', set_radio('published', '1', $data['published']==1 ? TRUE : FALSE)) ?> <span> Active </span>
            </label>
            <label class="radio-inline i-checks">
                <?php echo form_radio($prefix_element.'[published]', '0', set_radio('published', '0', $data['published']==0 ? TRUE : FALSE)) ?> <span> InActive </span>
            </label>
        </div>
        <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">Product SKU Code :</label>
    <div class="col-sm-5">
        <?php if( in_array('lock_edit',$extra_call) )
        { ?>
            <input type="text" class="form-control" value="<?php echo(!isset($data['product_sku_id']) ? NULL : $data['product_sku_id']); ?> " readonly maxlength="10" />
        <?php }
        else { ?>
        <input type="text" class="form-control eng" name="<?php echo $prefix_element.'[sku_code]'; ?>" value="<?php echo(!isset($data['product_sku_id']) ? 'demo-code-'.rand(0, 10000) : $data['product_sku_id']); ?> " placeholder="SKU Code" required maxlength="15" />
        <span class="required">*</span>
        <?php } ?>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
        <label class=" control-label col-sm-2 text-right">Active Date</label>
        <div class="col-sm-5" id="data_3">
            <div class="input-group date">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="text" name="<?php echo $prefix_element.'[active_date]'; ?>" class="form-control" value="<?php echo date( 'd/m/Y H:i:s' , strtotime( $data['active_date'] ) ); ?>" />
            </div>
        </div>
        <div class="clearfix"></div> 
</div>
<div class="form-group">
        <label class=" control-label col-sm-2 text-right">Expire Date</label>
        <div class="col-md-5" id="data_4">
                <div class="input-group date">
                    <span class="input-group-addon">
                    <i class="fa fa-calendar"></i></span>
                    <input type="text" name="<?php echo $prefix_element.'[expire_date]'; ?>" class="form-control" value="<?php echo date( 'd/m/Y H:i:s' , strtotime( $data['expire_date'] ) ); ?>" />
                </div>
        </div>   
        <div class="clearfix"></div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label text-right">ราคา :</label>
    <div class="col-sm-5">
        <input type="text" id="phone" class="form-control numeric" name="<?php echo $prefix_element.'[price]'; ?>" value="<?php echo(!isset($data['standard_price']) ? rand(0, 599)  : $data['standard_price']); ?>" placeholder="Price" required maxlength="5" />
        <span class="required">*</span>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">คะแนนพิเศษ :</label>
    <div class="col-sm-5">
        <input type="text" id="phone" class="form-control numeric" name="<?php echo $prefix_element.'[point]'; ?>" value="<?php echo(!isset($data['point_obtain']) ? '10' : $data['point_obtain']); ?>" placeholder="Point" required maxlength="12" />
        <span class="required">*</span>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">Measure Code :</label>
    <div class="col-sm-5">
        <input type="text" id="phone" class="form-control eng" name="<?php echo $prefix_element.'[measure_code]'; ?>" value="<?php echo(!isset($data['measure_code']) ? 'Code-demo' : $data['measure_code']); ?>" placeholder="Point" required maxlength="12" />
        <span class="required">*</span>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">จำนวนแจ้งเตือนสินค้าจะหมด  :</label>
    <div class="col-sm-5">
        <input type="text" id="phone" class="form-control numeric" name="<?php echo $prefix_element.'[lower_stock_qty]'; ?>" value="<?php echo(!isset($data['lower_stock_qty']) ? '10' : $data['lower_stock_qty']); ?>" placeholder="Point" required maxlength="4" />
        <span class="required">*</span>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">Product Color :</label>
    <section class="col-sm-5">
            <div class="input-group">
                <select id="colorselect" name="<?php echo $prefix_element.'[color_id]'; ?>" data-placeholder="Choose a Color..." class="" tabindex="1" style="width:600px;">
                    <option <?php echo ( $data['color_id'] == 1 ?'selected=""':''); ?> value="1" data-image="<?php echo base_url(); ?>assets/icon_calendar.jpg">Red</option>
                    <option <?php echo ( $data['color_id'] == 2 ?'selected=""':''); ?> value="2" data-image="<?php echo base_url(); ?>assets/icon_calendar.jpg">White</option>
                </select>
            </div>
    </section>
    
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <div class="hr-line-dashed"></div>
</div>      

<div class="form-group">
    <label class="col-sm-2 control-label text-right">น้ำหนัก  :</label>
    <div class="col-sm-5">
        <input type="text" class="form-control decimal" name="<?php echo $prefix_element.'[package_height]'; ?>" value="<?php echo(!isset($data['package_height']) ? '15kl' : $data['package_height']); ?>" placeholder="Weight" required maxlength="4" />
        <span class="required"></span>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">กว้าง  :</label>
    <div class="col-sm-5">
        <input type="text" class="form-control decimal" name="<?php echo $prefix_element.'[package_width]'; ?>" value="<?php echo(!isset($data['package_width']) ? '150cm' : $data['package_width']); ?>" placeholder="Weight" required maxlength="4" />
        <span class="required"></span>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">ยาว  :</label>
    <div class="col-sm-5">
        <input type="text" class="form-control decimal" name="<?php echo $prefix_element.'[package_depth]'; ?>" value="<?php echo(!isset($data['package_depth']) ? '57cm' : $data['package_depth']); ?>" placeholder="Weight" required maxlength="4" />
        <span class="required"></span>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">สูง  :</label>
    <div class="col-sm-5">
        <input type="text" class="form-control decimal" name="<?php echo $prefix_element.'[package_height]'; ?>" value="<?php echo(!isset($data['package_height']) ? '99cm' : $data['package_height']); ?>" placeholder="Weight" required maxlength="4" />
        <span class="required"></span>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">หน่วย  :</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" name="<?php echo $prefix_element.'[unit]'; ?>" value="<?php echo(!isset($data['unit']) ? ชิ้น : $data['unit']); ?>" placeholder="Weight" required maxlength="10" />
        <span class="required"></span>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <div class="hr-line-dashed"></div>
</div>

<div class="form-group">
        <label class="col-sm-2 control-label">Product SKU Option <br/>
            <small class="text-navy">Custom elements</small>
        </label>
        <div class="col-sm-10">
             <div class="i-checks"><label> 
                <input type="checkbox" value="1" name="<?php echo $prefix_element.'[valid_flag]'; ?>" <?php echo ( $data['valid_flag'] == 'Y' ?'checked=""':'') ?> /> <i></i> Valid Flag </label>
            </div>
        </div>

        <div class="col-sm-10">
             <div class="i-checks"><label> 
                <input type="checkbox" value="1" name="<?php echo $prefix_element.'[manage_stock_flag]'; ?>" <?php echo ( $data['manage_stock_flag'] == 'Y' ?'checked=""':'') ?>  /> <i></i> Manage Stock Flag </label>
            </div>
            
        </div>
        <div class="clearfix"></div>
</div>

<div class="form-group">
    <div class="hr-line-dashed"></div>
</div>


<div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Special Price section <small> can be hide </small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <!-- <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="fa fa-wrench"></i>
                    </a> -->
                    <!-- <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a> -->
                </div>
            </div>
            <div class="ibox-content">
                        <div class="form-group">
                            <section id="my-awesome-dropzone4" class="dropzone" action="#">
                                <div class="dropzone-previews"></div>
                                <button type="submit" class="btn btn-primary pull-right">Submit this form!</button>
                            </section>
                        </div>
                        <div class="form-group">
                            <div class="hr-line-dashed"></div>
                        </div>
                        <?php $this->view('/backend/product/gallery'); ?>
            </div>
</div>


<div class="form-group">
    <div class="hr-line-dashed"></div>
</div>

    <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Special Price section <small> can be hide </small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <!-- <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="fa fa-wrench"></i>
                    </a> -->
                    <!-- <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a> -->
                </div>
            </div>
            <div class="ibox-content">
                        <div class="form-group">
        
                            <label class=" control-label col-sm-2 text-right">Special Price Active Date</label>
                            <div class="col-sm-5" id="data_5">

                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="<?php echo $prefix_element.'[pro_expire_date]'; ?>" class="form-control" value="<?php echo date( 'd/m/Y H:i:s' , strtotime( $data['spicial_price_active_date'] ) ); ?>" />
                                </div>
                            </div>
                            <div class="clearfix"></div> 
                    </div>
                    <div class="form-group">
                            <label class=" control-label col-sm-2 text-right">Special Price Expire Date</label>
                            <div class="col-md-5" id="data_6">
                                    
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" name="<?php echo $prefix_element.'[pro_active_date]'; ?>" class="form-control" value="<?php echo date( 'd/m/Y H:i:s' , strtotime( $data['spicial_price_expire_date'] ) ); ?>" />
                                    </div>
                            </div>   
                            <div class="clearfix"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right">ราคาพิเศษ :</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control numeric" name="<?php echo $prefix_element.'[pro_discount_price]'; ?>" value="<?php echo(!isset($data['discount_price']) ? rand(0, 299) : $data['discount_price']); ?>" placeholder="Sale Promotion" maxlength="12" />
                            <span class="required">*</span>
                        </div>
                        
                    </div>

                    
            </div>
    </div>
    <div class="hr-line-dashed"></div>