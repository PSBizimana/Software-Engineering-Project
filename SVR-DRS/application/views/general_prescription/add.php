<?php echo validation_errors(); ?>

<?php echo form_open('general_prescription/add'); ?>

	<div>Disease Code : <input type="text" name="disease_code" value="<?php echo $this->input->post('disease_code'); ?>" /></div>
	<div>Prescription Name : <input type="text" name="prescription_name" value="<?php echo $this->input->post('prescription_name'); ?>" /></div>
	<div>Prescription Comment : <textarea name="prescription_comment"><?php echo $this->input->post('prescription_comment'); ?></textarea></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>