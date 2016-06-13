<?php 

$prefix_element = 'translation'; 
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
            <?php echo form_radio('valid_flag', 'Y', set_radio('valid_flag', 'Y', $valid_flag== 'Y' ? TRUE : FALSE)) ?> <span> Active </span>
        </label>
        <label class="radio-inline i-checks">
            <?php echo form_radio('valid_flag', 'N', set_radio('valid_flag', 'N', $valid_flag== 'N' ? TRUE : FALSE)) ?> <span> InActive </span>
        </label>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">
        Parent :
    </label>
    <div class="col-sm-5">
        <?php echo Modules::run('Product_category/select_category_parent', $category_parent_id, $id ) ?>
                                            <span class="required">*</span>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label text-right">
        SEO URL :
    </label>
    <div class="col-sm-5">
        <input type="text" class="form-control" name="seo_url" value="<?php echo $seo_url ?>" placeholder="SEO URL" required maxlength="255" />
        <span class="required">*</span>
    </div>
    <div class="clearfix"></div>
</div>


<div class="form-group">
    <div class="col-lg-12">
        <div class="tabs-container">
            <ul class="nav nav-tabs">
                <?php foreach ($lang as $key => $value) { ?>

                    <li class="<?php echo ( $key == 0 ?'active':''); ?>"><a data-toggle="tab" href="#tab-<?php echo ($key+44) ?> "> <?php echo $value['title']; ?> </a></li>

                <?php } ?>
                
            </ul>
            <div class="tab-content">
                <?php foreach ($lang as $key => $value) { ?>
                <div id="tab-<?php echo ($key+44) ?>" class="tab-pane <?php echo ( $key == 0 ?'active':''); ?>">

                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-right">Title <?php echo $value['index']; ?> :</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="<?php echo $prefix_element.'['.$value['index'].']'; ?>[title]" value="<?php echo $translation[$value['index']]['title'] ?>" placeholder="Title" required maxlength="30" />
                                <span class="required">*</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label text-right">Description :</label>
                            <div class="col-md-10">
                                    
                                    <textarea name="<?php echo $prefix_element.'['.$value['index'].']'; ?>[description]" class="summernote element_cha<?php echo ($key+44); ?>">
                                        <?php echo $translation[$value['index']]['description'] ?>
                                    </textarea>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label text-right">Meta Tag Title:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="<?php echo $prefix_element.'['.$value['index'].']'; ?>[meta_title]" value="<?php echo $translation[$value['index']]['meta_title'] ?>" class="form-control" placeholder="..." />
                                </div>
                                <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-right">Meta Tag Description:</label>
                            <div class="col-sm-10">
                                <textarea name="<?php echo $prefix_element.'['.$value['index'].']'; ?>[meta_description]" id="" cols="30" rows="5" class="form-control" placeholder="Meta Description"><?php echo $translation[$value['index']]['meta_description'] ?></textarea>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label text-right">Meta Tag Keywords:</label>
                            <div class="col-sm-10">
                                 <textarea name="<?php echo $prefix_element.'['.$value['index'].']'; ?>[meta_keyword]" id="" cols="30" rows="5" class="form-control" placeholder="Meta Keywords"><?php echo $translation[$value['index']]['meta_keyword'] ?></textarea>
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
