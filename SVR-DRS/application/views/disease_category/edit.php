<?php echo validation_errors(); ?>

<?php echo form_open('disease_category/edit/'.$disease_category['disease_category_code']); ?>

	<div>Disease Category Name : <input type="text" name="disease_category_name" value="<?php echo ($this->input->post('disease_category_name') ? $this->input->post('disease_category_name') : $disease_category['disease_category_name']); ?>" /></div>
	<div>Disease Category Description : <textarea name="disease_category_description"><?php echo ($this->input->post('disease_category_description') ? $this->input->post('disease_category_description') : $disease_category['disease_category_description']); ?></textarea></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>