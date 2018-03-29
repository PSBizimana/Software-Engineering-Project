<?php echo validation_errors(); ?>

<?php echo form_open('disease_definition/add'); ?>

	<div>Disease Name : <input type="text" name="disease_name" value="<?php echo $this->input->post('disease_name'); ?>" /></div>
	<div>Disease Description : <textarea name="disease_description"><?php echo $this->input->post('disease_description'); ?></textarea></div>
	<div>Disease Category Code : <input type="text" name="disease_category_code" value="<?php echo $this->input->post('disease_category_code'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>