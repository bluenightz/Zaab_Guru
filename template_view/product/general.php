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
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Product Attribute <small> can be hide </small></h5>
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
                
                <div class="form-group text-right">
                    <a href="#" class="demo1">
                        <button class="btn btn-primary" title="" data-toggle="tooltip"  type="button" data-original-title="Add Attribute"><i class="fa fa-plus-circle"></i></button>
                    </a>
                    <div class="clearfix"></div>
                </div> 
                
                <div class="form-group">
                    <div class="hr-line-dashed"></div>
                </div> 
                <table id="attribute" class="<?php echo $lang; ?>" style="width:100%;"> 
                    <tbody>
                        <?php foreach ( $data['lang_attr'] as $key => $value) {
                          
                         ?>
                        <tr class="padding-spector">
                            <td class="text-left">English</td>
                            <td class="text-left">
                                <input type="text" name="product_attribute[<?php echo $value['product_attribute_id']; ?>][key_en]" value="<?php echo $value['value_en']; ?>" placeholder="Attribute" class="form-control" />
                                <input type="hidden" name="product_attribute[<?php echo $value['product_attribute_id']; ?>][attribute_id]" value="<?php echo $value['product_attribute_id']; ?>" />
                            </td>
                            <td class="text-left">
                                <div class="input-group"><span class="input-group-addon"></span>
                                    <input name="product_attribute[<?php echo $value['product_attribute_id']; ?>][value_en]" value="<?php echo $value['label_en']; ?>" placeholder="Text" class="form-control" /></input>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox checkbox-danger">
                                    <input id="checkbox<?php echo ($key+53); ?>" type="checkbox" name="product_attribute<?php echo '[delete][]'; ?>" value="<?php echo $value['product_attribute_id']; ?>" />
                                    <label for="checkbox<?php echo ($key+53); ?>">
                                        Check me To Delete
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr class="padding-spector">
                            <td class="text-left">Thai</td>
                            <td class="text-left">
                                <input type="text" name="product_attribute[<?php echo $value['product_attribute_id']; ?>][key_th]" value="<?php echo $value['value_th']; ?>" placeholder="Attribute" class="form-control" />
                                <input type="hidden" name="product_attribute[<?php echo $value['product_attribute_id']; ?>][attribute_id]" value="<?php echo $value['product_attribute_id']; ?>" />
                            </td>
                            <td class="text-left">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input name="product_attribute[<?php echo $value['product_attribute_id']; ?>][value_th]" value="<?php echo $value['label_th']; ?>" placeholder="Text" class="form-control" ></input>
                                </div>
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr class="padding-spector attribute-row" >
                            <td colspan="4" class=""><div class="form-group"><div class="hr-line-dashed"></div></div> </td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-2 control-label text-right">Product Original Code :</label>
    <div class="col-sm-5">
        <?php if( in_array('lock_edit',$extra_call) )
        { ?>
            <input type="text" class="form-control" value="<?php echo(!isset($data['product_sku_id']) ? NULL : $data['product_sku_id']); ?> " readonly maxlength="10" />
        <?php }
        else { ?>
        <input type="text" class="form-control eng" name="<?php echo $prefix_element.'[sku_code]'; ?>" value="<?php echo $data['product_sku_id']; ?>" placeholder="SKU Code" <?php echo ($action=='Edit'?'':'required'); ?>  maxlength="15" />
        <?php echo ($action=='Edit'?'':'<span class="required">*</span>'); ?>
        <?php } ?>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
        <label class=" control-label col-sm-2 text-right">Active Date</label>
        <div class="col-sm-5" id="data_3">
            <div class="input-group date">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <?php if( empty($data['active_date']) ) { $data['active_date'] = date('Y-m-d H:i:s',time()); } ?>
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
                    <?php if( empty($data['expire_date']) ) { $data['expire_date'] = date('Y-m-d H:i:s',time()); } ?>
                    <input type="text" name="<?php echo $prefix_element.'[expire_date]'; ?>" class="form-control" value="<?php echo date( 'd/m/Y H:i:s' , strtotime( $data['expire_date'] ) ); ?>" />
                </div>
        </div>   
        <div class="clearfix"></div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label text-right">ราคา :</label>
    <div class="col-sm-5">
        <input type="text" id="phone" class="form-control numeric" name="<?php echo $prefix_element.'[price]'; ?>" value="<?php echo $data['standard_price']; ?>" placeholder="Price" <?php echo ($action=='Edit'?'':'required'); ?> maxlength="5" />
        <?php echo ($action=='Edit'?'':'<span class="required">*</span>'); ?>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">คะแนนพิเศษ :</label>
    <div class="col-sm-5">
        <input type="text" id="phone" class="form-control numeric" name="<?php echo $prefix_element.'[point]'; ?>" value="<?php echo $data['point_obtain']; ?>" placeholder="Point" <?php echo ($action=='Edit'?'':'required'); ?> maxlength="12" />
        <?php echo ($action=='Edit'?'':'<span class="required">*</span>'); ?>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">Measure Code :</label>
    <div class="col-sm-5">
        <input type="text" id="phone" class="form-control eng" name="<?php echo $prefix_element.'[measure_code]'; ?>" value="<?php echo $data['measure_code']; ?>" placeholder="Measure" <?php echo ($action=='Edit'?'':'required'); ?> maxlength="12" />
        <?php echo ($action=='Edit'?'':'<span class="required">*</span>'); ?>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">จำนวนแจ้งเตือนสินค้าจะหมด  :</label>
    <div class="col-sm-5">
        <input type="text" id="phone" class="form-control numeric" name="<?php echo $prefix_element.'[lower_stock_qty]'; ?>" value="<?php echo $data['lower_stock_qty']; ?>" placeholder="Lower Stock" <?php echo ($action=='Edit'?'':'required'); ?> maxlength="4" />
        <?php echo ($action=='Edit'?'':'<span class="required">*</span>'); ?>
    </div>
    <div class="clearfix"></div>
</div>
<div class="form-group">
    <div class="hr-line-dashed"></div>
</div>      

<div class="form-group">
    <label class="col-sm-2 control-label text-right">น้ำหนัก  :</label>
    <div class="col-sm-5">
        <input type="text" class="form-control decimal" name="<?php echo $prefix_element.'[package_weight]'; ?>" value="<?php echo $data['package_weight']; ?>" placeholder="Weight" <?php echo ($action=='Edit'?'':'required'); ?> maxlength="4" />
        <?php echo ($action=='Edit'?'':'<span class="required">*</span>'); ?>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">กว้าง  :</label>
    <div class="col-sm-5">
        <input type="text" class="form-control decimal" name="<?php echo $prefix_element.'[package_width]'; ?>" value="<?php echo $data['package_width']; ?>" placeholder="Width" <?php echo ($action=='Edit'?'':'required'); ?> maxlength="4" />
        <?php echo ($action=='Edit'?'':'<span class="required">*</span>'); ?>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">ยาว  :</label>
    <div class="col-sm-5">
        <input type="text" class="form-control decimal" name="<?php echo $prefix_element.'[package_depth]'; ?>" value="<?php echo $data['package_depth']; ?>" placeholder="Long" <?php echo ($action=='Edit'?'':'required'); ?> maxlength="4" />
        <?php echo ($action=='Edit'?'':'<span class="required">*</span>'); ?>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">สูง  :</label>
    <div class="col-sm-5">
        <input type="text" class="form-control decimal" name="<?php echo $prefix_element.'[package_height]'; ?>" value="<?php echo $data['package_height']; ?>" placeholder="Height" <?php echo ($action=='Edit'?'':'required'); ?> maxlength="4" />
        <?php echo ($action=='Edit'?'':'<span class="required">*</span>'); ?>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">หน่วย  :</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" name="<?php echo $prefix_element.'[unit]'; ?>" value="<?php echo $data['unit']; ?>" placeholder="Unit" <?php echo ($action=='Edit'?'':'required'); ?> maxlength="10" />
        <?php echo ($action=='Edit'?'':'<span class="required">*</span>'); ?>
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
                <h5>Image Gallery <small> can be hide </small></h5>
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
                                    <?php if( empty($data['spicial_price_active_date']) ) { $data['spicial_price_active_date'] = date('Y-m-d H:i:s',time()); } ?>
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
                                        <?php if( empty($data['spicial_price_expire_date']) ) { $data['spicial_price_expire_date'] = date('Y-m-d H:i:s',time()); } ?>
                                        <input type="text" name="<?php echo $prefix_element.'[pro_active_date]'; ?>" class="form-control" value="<?php echo date( 'd/m/Y H:i:s' , strtotime( $data['spicial_price_expire_date'] ) ); ?>" />
                                    </div>
                            </div>   
                            <div class="clearfix"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right">ราคาพิเศษ :</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control numeric" name="<?php echo $prefix_element.'[pro_discount_price]'; ?>" value="<?php echo $data['discount_price']; ?>" placeholder="Sale Promotion" maxlength="12" />
                            <span class="required"></span>
                        </div>
                        
                    </div>

                    
            </div>
    </div>
    <div class="hr-line-dashed"></div>