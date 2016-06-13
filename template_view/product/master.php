<?php 
$prefix_element = 'master'; 

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
                <input type="radio" name="<?php echo $prefix_element.'[published]';  ?>" value="1"  class="form-control" <?php echo ($data['master']['publish_flag']=='Y' ? 'checked' : '') ?> />
                <span> Active </span>
            </label>
            <label class="radio-inline i-checks">
                <input type="radio" name="<?php echo $prefix_element.'[published]';  ?>" value="0"  class="form-control" <?php echo ($data['master']['publish_flag']=='N' || $data['master']['publish_flag'] == '' ? 'checked' : '') ?> />
                    <span> InActive </span>
            </label>
        </div>
        <div class="clearfix"></div>
</div>

<div class="form-group">
            <div class="col-lg-12">
                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <?php foreach ($lang as $key => $value) 
                        { ?>
                            <li class="<?php echo ( $key == 0 ?'active':''); ?>"><a data-toggle="tab" href="#tab-<?php echo ($key+44) ?> "> <?php echo $value['title']; ?> </a></li>
                        <?php 
                        } 
                        ?>
                    </ul>
                    <div class="tab-content">
                        <?php foreach ($lang as $key => $value) 
                        { 
                            $lang = strtolower($value['index']);
                            ?>
                        <div id="tab-<?php echo ($key+44) ?>" class="tab-pane <?php echo ( $key == 0 ?'active':''); ?>">
                            <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label text-right">Title <?php echo $value['index']; ?> :</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="<?php echo $prefix_element.'['.$value['index'].']'; ?>[title]" value="<?php echo $data['master'][$lang]['title']; ?>" placeholder="Title" required maxlength="30" />
                                            <span class="required">*</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label text-right">Description :</label>
                                        <div class="col-md-10">
                                                
                                                <textarea name="<?php echo $prefix_element.'['.$value['index'].']'; ?>[description]" class="summernote element_cha<?php echo ($key+44); ?>">
                                                    <?php echo $data['master'][$lang]['description']; ?>
                                                </textarea>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Meta Tag Title:</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="<?php echo $prefix_element.'['.$value['index'].']'; ?>[meta_title]" class="form-control" placeholder="Meta Title" value="<?php echo $data['master']['meta_title']; ?>" />
                                            </div>
                                            <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Meta Tag Description:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="<?php echo $prefix_element.'['.$value['index'].']'; ?>[meta_desc]" placeholder="Meta Description" value="<?php echo $data['master']['meta_desc']; ?>" />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Meta Tag Keywords:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="<?php echo $prefix_element.'['.$value['index'].']'; ?>[meta_keyword]" placeholder="Meta Keyword" value="<?php echo $data['master']['meta_keyword']; ?>" />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Component Description:</label>
                                            <div class="col-sm-10">
                                                    <textarea name="<?php echo $prefix_element.'['.$value['index'].']'; ?>[component_description]" class="summernote"><?php echo $data['master'][$lang]['component_description']; ?></textarea>
                                            </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>


                </div>
            </div>
            <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label text-right">Product Code Original :</label>
        <div class="col-sm-5">
            <input type="text" class="form-control eng" name="<?php echo $prefix_element.'[product_code_original]'; ?>" value="<?php echo(!isset($data['master']['product_code_original']) ? null : $data['master']['product_code_original']); ?>" placeholder="Product Code Original" maxlength="20" />
            
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label text-right">Product Model :</label>
        <div class="col-sm-5">
            <input type="text" class="form-control eng" name="<?php echo $prefix_element.'[product_model]'; ?>" value="<?php echo(!isset($data['master']['product_model']) ? null : $data['master']['product_model']); ?>" placeholder="Product Model" maxlength="25" />
            
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label text-right">Product Series :</label>
        <div class="col-sm-5">
            <input type="text" class="form-control eng" name="<?php echo $prefix_element.'[product_series]'; ?>" value="<?php echo(!isset($data['master']['product_series']) ? null : $data['master']['product_series']); ?>" placeholder="Product Series" maxlength="25" />
            
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label text-right">SEO URL :</label>
        <div class="col-sm-5">
            <input type="text" class="form-control eng" name="<?php echo $prefix_element.'[seo_url]'; ?>" value="<?php echo(!isset($data['master']['seo_url']) ? NULL : $data['master']['seo_url']); ?>" placeholder="SEO URL" maxlength="20" />
            
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
            <label class=" control-label col-sm-2 text-right">Active Date</label>
            <div class="col-sm-5" id="data_1">
                <div class="input-group date">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    <?php if( empty($data['master']['active_date']) ) { $data['master']['active_date'] = date('Y-m-d H:i:s',time()); } ?>
                    <input type="text" name="<?php echo $prefix_element.'[active_date]'; ?>" class="form-control" value="<?php echo date( 'd/m/Y H:i:s' , strtotime( $data['master']['active_date'] ) ); ?>" />
                </div>
            </div>
            <div class="clearfix"></div> 
    </div>
    <div class="form-group">
            <label class=" control-label col-sm-2 text-right">Expire Date</label>
            <div class="col-md-5" id="data_2">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <?php if( empty($data['master']['expire_date']) ) { $data['master']['expire_date'] = date('Y-m-d H:i:s',time()); } ?>
                        <input type="text" class="form-control" name="<?php echo $prefix_element.'[expire_date]'; ?>" value="<?php echo date( 'd/m/Y H:i:s' , strtotime( $data['master']['expire_date'] ) ); ?>" />
                    </div>
            </div>   
            <div class="clearfix"></div>
    </div>
    <div class="form-group">
            <label class=" control-label col-sm-2 text-right">Day Can Use</label>
            <div class="col-md-5">
                    <div class="input-group">
                        <input type="text" class="form-control numeric" name="<?php echo $prefix_element.'[day_can_use]'; ?>" value="<?php echo( ! isset($data['master']['day_can_use']) ? null : $data['master']['day_can_use']); ?>" placeholder="Day can use" maxlength="3" />
                    </div>
            </div>   
            <div class="clearfix"></div>
    </div>

    <div class="form-group">
            <label class=" control-label col-sm-2 text-right">Warranty</label>
            <div class="col-md-5">
                    <div class="input-group">
                        <input type="text" class="form-control" name="<?php echo $prefix_element.'[warranty]'; ?>" value="<?php echo( ! isset($data['master']['warranty_condition']) ? null : $data['master']['warranty_condition']); ?>" placeholder="warranty" />
                    </div>
            </div>   
            <div class="clearfix"></div>
    </div>

<div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label text-right">Categories :</label>
        <div class="input-group">
            <?php
                
                $select_attribute = array();
                $select_attribute['style'] = 'width:500px';
                $select_attribute['selected'] = (Array)$data['master']['categories'];
                $select_attribute['name'] = $prefix_element.'[Categories][]';
            ?>
            <?php echo Modules::run('Product_category/buildProductCategorySelect', $select_attribute) ?>
        </div>

        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label text-right">Brand :</label>
        <div class="input-group">
            <?php
                $select_attribute = array();
                $select_attribute['style'] = 'width:500px';
                $select_attribute['selected'] = (Array)$data['master']['brand_id'];
                $select_attribute['name'] = $prefix_element.'[Brand]';
            ?>
            <?php echo Modules::run('Brand/buildProductBrandSelect', $select_attribute) ?>
        </div>

        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label text-right">MD Team :</label>
        <div class="input-group">
            <select style="width:500px;" data-placeholder="Choose a MD Team" class="chosen-select" multiple name="<?php echo $prefix_element.'[MD_Team][]'; ?>" tabindex="4">
                <option value="1">Team Lannister</option>
                <option value="2">Team Stark</option>
                <option value="3">Team Greyjoy</option>
            </select>
        </div>

        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label text-right">Vendor Agent :</label>
        <div class="input-group">
            <select style="width:500px;" data-placeholder="Choose a Vendor" class="chosen-select" multiple name="<?php echo $prefix_element.'[Vendor_agent][]'; ?>" tabindex="4">
                <option value="1">Tyrion Lannister</option>
                <option value="2">Eddard Stark</option>
                <option value="3">Theon Greyjoy</option>
            </select>
        </div>

        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label text-right">Relate Product :</label>
        <div class="input-group">
   
            <?php $this->view('backend/product/relate_element'); ?>
            
        </div>

        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="hr-line-dashed"></div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Product Option <br/>
            <small class="text-navy">Custom elements</small>
        </label>

            <div class="col-sm-10">
                <div class="i-checks"><label> 
                    <input type="checkbox" name="<?php echo $prefix_element.'[installment_flag]'; ?>" value="1" <?php echo ( $data['master']['installment_flag'] == 'Y' ?'checked=""':'') ?> /> <i></i> ผ่อนชำระ </label>
                </div>
                <div class="i-checks"><label> 
                    <input type="checkbox" value="1"  name="<?php echo $prefix_element.'[refund_flag]'; ?>" <?php echo ( $data['master']['refund_flag'] == 'Y' ?'checked=""':'') ?> /> <i></i> นโยบายการคืนเงิน </label>
                </div>
                <!-- <div class="i-checks"><label> 
                    <input type="checkbox" value="1"  checked="" /> <i></i> ส่งฟรีเมื่อสั่งซื้อขั้นต่ำ </label>
                </div> -->
                <div class="i-checks"><label> 
                    <input type="checkbox" value="1" name="<?php echo $prefix_element.'[24_hours_flag]'; ?>" <?php echo ( $data['master']['24_hours_flag'] == 'Y' ?'checked=""':'') ?> /> <i></i> บริการตลอด 24 ชั่วโมง </label>
                </div>
                <div class="i-checks"><label> 
                    <input type="checkbox" value="1" name="<?php echo $prefix_element.'[display_review_flag]'; ?>" <?php echo ( $data['master']['display_review_flag'] == 'Y' ?'checked=""':'') ?> /> <i></i> เปิดให้มีการ Review </label>
                </div>
                <div class="i-checks"><label> 
                    <input type="checkbox" value="1" name="<?php echo $prefix_element.'[display_rating_flag]'; ?>" <?php echo ( $data['master']['display_rating_flag'] == 'Y' ?'checked=""':'') ?> /> <i></i> เปิดให้มีการ Rating </label>
                </div>
                <div class="i-checks"><label> 
                    <input type="checkbox" value="1" name="<?php echo $prefix_element.'[express_checkout_flag]'; ?>" <?php echo ( $data['master']['express_checkout_flag'] == 'Y' ?'checked=""':'') ?> /> <i></i> เปิด Express Checkout </label>
                </div>
                 <div class="i-checks"><label> 
                    <input type="checkbox" value="1" name="<?php echo $prefix_element.'[valid_flag]'; ?>"  <?php echo ( $data['master']['valid_flag'] == 'Y' ?'checked=""':'') ?> /> <i></i> Valid Flag </label>
                </div>
                
            </div>
            <div class="clearfix"></div>
    </div>

<div class="form-group">
    <div class="hr-line-dashed"></div>
</div>
