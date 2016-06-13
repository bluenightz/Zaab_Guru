<?php 
$prefix_element = 'gallery'; 
 ?>
<!-- <section id="my-awesome-dropzone4" class="dropzone" action="#">
    <div class="dropzone-previews"></div>
    <button type="submit" class="btn btn-primary pull-right">Submit this form!</button>
</section> -->
<?php echo $eUpload_gallery_form; ?>
<div class="form-group">
    &nbsp;
</div>

<?php if( isset( $data['gallery'] ) && ! empty($data['gallery'])  ) 
{ ?>

<div  class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Thumbnail Gallery</h1>
    </div>
    <section id="sortables">
        
    <?php foreach ( $data['gallery'] as $key => $value) 
    {
        ?>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb sort_element">
            <?php echo $i; ?>
            <input type="hidden" name="<?php echo $prefix_element.'[sorting][]'; ?>" value="<?php echo $value['id']; ?>"/>
            <div class="checkbox checkbox-danger">
                <input id="checkbox<?php echo ($i+100); ?>" type="checkbox" name="<?php echo $prefix_element.'[delete][]'; ?>" value="<?php echo $value['id']; ?>" />
                <label for="checkbox<?php echo ($i+100); ?>">
                    Check me To Delete
                </label>
            </div>
            <a href="#" class="thumbnail">
                <img alt="" src="<?php echo $value['image_url']; ?>" class="img-responsive" style="max-width:300px; max-height: 250px; overflow: hidden;" />
            </a>
        </div>
    <?php } ?>

    </section>

</div>
<?php } ?>
<input type="hidden" name="action" value="insert">