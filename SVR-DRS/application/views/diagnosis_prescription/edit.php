<?php echo validation_errors(); ?>

<?php echo form_open('diagnosis_prescription/edit/'.$diagnosis_prescription['diagnosis_reference_number']); ?>

	<div>Prescription Instructions : <textarea name="prescription_instructions"><?php echo ($this->input->post('prescription_instructions') ? $this->input->post('prescription_instructions') : $diagnosis_prescription['prescription_instructions']); ?></textarea></div>
	<div>Prescription Comment : <textarea name="prescription_comment"><?php echo ($this->input->post('prescription_comment') ? $this->input->post('prescription_comment') : $diagnosis_prescription['prescription_comment']); ?></textarea></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>