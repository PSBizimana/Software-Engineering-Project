<?php echo validation_errors(); ?>

<?php echo form_open('diagnosis_prescription/add'); ?>

	<div>Prescription Instructions : <textarea name="prescription_instructions"><?php echo $this->input->post('prescription_instructions'); ?></textarea></div>
	<div>Prescription Comment : <textarea name="prescription_comment"><?php echo $this->input->post('prescription_comment'); ?></textarea></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>