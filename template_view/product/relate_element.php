<select style="width:500px;" data-placeholder="Relate Product..." class="chosen-select" multiple name="<?php echo $element_attrbute_1['name']; ?>" tabindex="4">
    <?php foreach ($element_attrbute_1['data'] as $key => $value) {  ?>
    	<option <?php echo ( in_array( $value['id'] , $element_attrbute_1['selected']) ?' selected ':''); ?> value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></option>
    <?php } ?>
</select>