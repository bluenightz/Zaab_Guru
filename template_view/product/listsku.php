<?php 

if( strtolower($action) == 'edit' )
{ 
?>
                                    <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5>Product Sku List <small> can be hide </small></h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                    <?php //arr($data['sku_list']); ?>
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

                                                <div class="col-lg-12 ">
                                                    <div class="tabs-container">
                                                        <div class="tabs-left">
                                                            <ul class="nav nav-tabs">
                                <?php 
                                        foreach ($data['master']['sku_list'] as $key => $value) 
                                        { 
                                           
                                        ?>

                                        <li class="<?php echo ( $key==0 ?'active':'') ?>">
                                            <a data-toggle="tab" href="#tab-<?php echo ($key+3); ?>"> SKU Code : <?php echo $value['product_sku_id']; ?></a>
                                        </li>

                                        <?php } ?>
                                                                
                                                            </ul>
                                                    <div class="tab-content ">
                                        <?php 
                                        //arrx($data['master']['sku_list']);
                                        foreach ($data['master']['sku_list'] as $key => $value) 
                                        { 
                                        ?>
                                                        <div id="tab-<?php echo ($key+3); ?>" class="tab-pane <?php echo ( $key==0 ?'active':'') ?>">
                                                            <div class="panel-body">
                                                                <section class="row">
                                                                    <section class="col-md-5">
                                                                        <div class="form-group">
                                                                                <strong>Published :</strong> <?php echo ( ($value['published_status'] == 1 || $value['published_status'] == 'Y') ?'<i class="fa fa-check text-navy"></i>':'<i class="fa fa-times text-danger"></i>') ?> 
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <strong>Barcode :</strong> xxx-xxxx-xxxx-xxx
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <strong>SKU Code Original :</strong> <?php echo $value['sku_code_original']; ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <strong>Stock :</strong> 11 ชิ้น
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <strong>ราคา :</strong> <?php echo $value['standard_price']; ?> บาท
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <strong>Measure Code :</strong> <?php echo $value['measure_code']; ?>
                                                                        </div>
                                                                        
                                                                    </section>  
                                                                    <section class="col-md-5">
                                                                        <div class="form-group">
                                                                            <?php if ( $value['delete_flag'] == 'N'  ) { ?>

                                                                            <a href="<?php echo base_url().'backend/product_master/read/'.$value['semi_sku_id'].'/'; ?>" class="text-left edit-product" class="">
                                                                                    <button type="submit" class="btn btn-sm btn-primary pull-left m-t-n-xs"><strong>Edit this SKU</strong></button>
                                                                            </a>
                                                                            <div class="clearfix"></div>
                                                                            <div class="checkbox checkbox-danger">
                                                                                <input type="checkbox" value="<?php echo $value['semi_sku_id']; ?>" name="sku[delete][]" id="che_ckbox<?php echo ($key+1); ?>">
                                                                                <label for="che_ckbox<?php echo ($key+1); ?>">
                                                                                    Check me To Delete
                                                                                </label>
                                                                            </div>
                                                                            <?php }
                                                                            else { ?>
                                                                                <strong class="text-danger"> ลบแล้ว </strong>
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <strong>ช่วงเวลาโปรโมชั่น :</strong> <?php echo $value['spicial_price_active_date']; ?> - <?php echo $value['spicial_price_expire_date']; ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <strong>ราคาโปรโมชั่น :</strong> <?php echo $value['discount_price']; ?> บาท
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <strong>Lower Stock Alert :</strong> <?php echo $value['lower_stock_qty']; ?> ชิ้น
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <strong>น้ำหนัก :</strong> <?php echo $value['package_weight']; ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <strong>กว้าง :</strong> <?php echo $value['package_width']; ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <strong>ยาว :</strong> <?php echo $value['package_depth']; ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <strong>สูง :</strong> <?php echo $value['package_height']; ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <strong>หน่วย :</strong> <?php echo $value['unit']; ?>
                                                                        </div>
                                                                    </section>
                                                                </section>
                                                                <section class="row">
                                                                    
                                                                    <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <strong>Product Attibute :</strong> 
                                                                                <p>
                                                                                    <section class="col-md-12">
                                                                                            <table class="table table-bordered">
                                                                                                        <thead>
                                                                                                            <tr>
                                                                                                                <th>#</th>
                                                                                                                <th>Key Th</th>
                                                                                                                <th>Label Th</th>
                                                                                                                <th>Key En</th>
                                                                                                                <th>Label En</th>
                                                                                                                <th>Created Date</th>
                                                                                                                <th>Create User</th>
                                                                                                                <th>Updated Date</th>
                                                                                                            </tr>
                                                                                                        </thead>
                                                                                                        <tbody>
                                                                                            <?php 
                                                                                            foreach ($value['product_attr'] as $key1 => $value1) 
                                                                                            { 
                                                                                            ?>
                                                                                                        <tr>
                                                                                                            <td><?php echo ($key1+1); ?></td>
                                                                                                            <td><?php echo $value1['value_th']; ?></td>
                                                                                                            <td><?php echo $value1['label_th']; ?></td>
                                                                                                            <td><?php echo $value1['value_en']; ?></td>
                                                                                                            <td><?php echo $value1['label_en']; ?></td>
                                                                                                            <td>Date : <?php echo $value1['created_date']; ?></td>
                                                                                                            <td><?php echo $value1['created_name']; ?></td>
                                                                                                            <td><?php echo $value1['modified_date']; ?></td>
                                                                                                            
                                                                                                        </tr>
                                                                                            <?php } ?>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                    </section>
                                                                                </p>
                                                                        </div>
                                                                    </div>

                                                                </section>  
                                                                
                                                                
                                                                <strong>Logs SKU : <?php echo $value['edit_user_name']; ?></strong>

                                                                <p>
                                                                    
                                                                    <table class="table table-bordered">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Date</th>
                                                                                <th>User</th>
                                                                                <th>Price</th>
                                                                                <th>Discount Price</th>
                                                                                <th>Point</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                <?php 
                                                                //arrx($value['sku_logs']);
                                                                foreach ($value['sku_logs'] as $key2 => $value2) 
                                                                { 
                                                                ?>
                                                                            <tr>
                                                                                <td><?php echo ($key2+1); ?></td>
                                                                                <td>Date : <?php echo $value2['log_date']; ?></td>
                                                                                <td><?php echo $value2['edit_user_name']; ?></td>
                                                                                <td><?php echo $value2['price']; ?></td>
                                                                                <td><?php echo $value2['discount']; ?></td>
                                                                                <td><?php echo $value2['point']; ?></td>
                                                                            </tr>
                                                                <?php } ?>
                                                                            </tbody>
                                                                        </table>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    

                                                

                                            
                                        
                                       <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>

                                                <br />
                                                
                                            </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="hr-line-dashed"></div>
                                    <?php } ?>