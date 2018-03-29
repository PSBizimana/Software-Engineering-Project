<?php echo validation_errors(); ?>

<?php echo form_open('disease_symptom/add'); ?>

	<div>Disease Symptom Name : <input type="text" name="disease_symptom_name" value="<?php echo $this->input->post('disease_symptom_name'); ?>" /></div>
	<div>Disease Symptom Description : <textarea name="disease_symptom_description"><?php echo $this->input->post('disease_symptom_description'); ?></textarea></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>