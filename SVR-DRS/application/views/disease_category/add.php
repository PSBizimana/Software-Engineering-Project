<?php echo validation_errors(); ?>

<?php echo form_open('disease_category/add'); ?>

	<div>Disease Category Name : <input type="text" name="disease_category_name" value="<?php echo $this->input->post('disease_category_name'); ?>" /></div>
	<div>Disease Category Description : <textarea name="disease_category_description"><?php echo $this->input->post('disease_category_description'); ?></textarea></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>