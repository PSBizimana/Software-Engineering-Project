<?php echo validation_errors(); ?>

<?php echo form_open('disease_symptom/edit/'.$disease_symptom['disease_symptom_code']); ?>

	<div>Disease Symptom Name : <input type="text" name="disease_symptom_name" value="<?php echo ($this->input->post('disease_symptom_name') ? $this->input->post('disease_symptom_name') : $disease_symptom['disease_symptom_name']); ?>" /></div>
	<div>Disease Symptom Description : <textarea name="disease_symptom_description"><?php echo ($this->input->post('disease_symptom_description') ? $this->input->post('disease_symptom_description') : $disease_symptom['disease_symptom_description']); ?></textarea></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>