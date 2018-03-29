<?php echo validation_errors(); ?>

<?php echo form_open('disease_definition/edit/'.$disease_definition['disease_code']); ?>

	<div>Disease Name : <input type="text" name="disease_name" value="<?php echo ($this->input->post('disease_name') ? $this->input->post('disease_name') : $disease_definition['disease_name']); ?>" /></div>
	<div>Disease Description : <textarea name="disease_description"><?php echo ($this->input->post('disease_description') ? $this->input->post('disease_description') : $disease_definition['disease_description']); ?></textarea></div>
	<div>Disease Category Code : <input type="text" name="disease_category_code" value="<?php echo ($this->input->post('disease_category_code') ? $this->input->post('disease_category_code') : $disease_definition['disease_category_code']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>