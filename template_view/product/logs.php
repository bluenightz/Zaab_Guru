<?php if( strtolower($action) == 'edit' && ! empty($data['sku_logs']) )
                                    { ?>
                                    <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5>Product Logs Section <small> can be hide </small></h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                    <?php //arr($data['sku_logs']); ?>
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
                                        foreach ($data['sku_logs'] as $key => $value) 
                                        { 
                                        ?>

                                        <li class="<?php echo ( $key==0 ?'active':'') ?>">
                                            <a data-toggle="tab" href="#tab-<?php echo ($key+3); ?>"> Date : <?php echo $value['log_date']; ?></a>
                                        </li>

                                        <?php } ?>
                                                                
                                                            </ul>
                                                    <div class="tab-content ">
                                        <?php 
                                        foreach ($data['sku_logs'] as $key => $value) 
                                        { 
                                        ?>
                                                        <div id="tab-<?php echo ($key+3); ?>" class="tab-pane <?php echo ( $key==0 ?'active':'') ?>">
                                                            <div class="panel-body">
                                                                <strong>Create User : <?php echo $value['edit_user_name']; ?></strong>

                                                                <p>
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Price</th>
                                                                            <th>Discount Price</th>
                                                                            <th>Point</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td><?php echo $value['price']; ?></td>
                                                                            <td><?php echo $value['discount']; ?></td>
                                                                            <td><?php echo $value['point']; ?></td>
                                                                        </tr>
                                                                        
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
                                        foreach ($data['sku_logs'] as $key => $value) 
                                        { 
                                        ?>
                                                    <tr>
                                                        <td><?php echo ($key+1); ?></td>
                                                        <td>Date : <?php echo $value['log_date']; ?></td>
                                                        <td><?php echo $value['edit_user_name']; ?></td>
                                                        <td><?php echo $value['price']; ?></td>
                                                        <td><?php echo $value['discount']; ?></td>
                                                        <td><?php echo $value['point']; ?></td>
                                                    </tr>
                                        <?php } ?>
                                                    </tbody>
                                                </table>


                                            </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="hr-line-dashed"></div>
                                    <?php } ?>