<?php 
$prefix_element = 'media'; 
?>
<div class="form-group">
    <label class="col-sm-2 control-label text-right">Youtube URL :</label>
    <div class="col-sm-5">
        <input type="text" maxlength="50" placeholder="Type Youtube Url" value="" name="<?php echo $prefix_element.'[youtube]'; ?>" class="form-control eng">
        
    </div>
    <div class="clearfix"></div>
</div>
<div class="form-group">

    <br />
    <?php if ( ! empty($data['master']['youtube_media']) ) 
    { ?>
                                                
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Delete</th>
                                                        <th>Youtube</th>
                                                        <th>Create date</th>
                                                        <!-- <th>Status</th>
                                                        
                                                        <th>Command</th> -->
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                        <?php 
                                        foreach ($data['master']['youtube_media'] as $key => $value) 
                                        { 
                                        ?>
                                                    <tr>
                                                        <td><?php echo ($key+1); ?></td>
                                                        <td>
                                                            <div class="checkbox checkbox-danger">
                                                                <input id="checkbox<?php echo ($key+1); ?>" type="checkbox" name="<?php echo $prefix_element.'[delete][]'; ?>" value="<?php echo $value['id']; ?>" />
                                                                <label for="checkbox<?php echo ($key+1); ?>">
                                                                    Check me To Delete
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="<?php echo $value['thumbnail_path']; ?>" /></td>
                                                        <td>Date : <?php echo $value['created_date']; ?></td>
                                                        
                                                        <!-- <td><?php echo $value['price']; ?></td>
                                                        
                                                        <td><?php echo $value['point']; ?></td> -->
                                                    </tr>
                                        <?php } ?>
                                                    </tbody>
                                                </table>
        <?php } ?>

                                    <div class="clearfix"></div>

                                    <div class="hr-line-dashed"></div>
</div>