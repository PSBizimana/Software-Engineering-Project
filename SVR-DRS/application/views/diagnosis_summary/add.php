<?php echo validation_errors(); ?>

<?php echo form_open('diagnosis_summary/add'); ?>

	<div>Disease Date : <input type="text" name="disease_date" value="<?php echo $this->input->post('disease_date'); ?>" /></div>
	<div>Diagnosis Patron Code : <input type="text" name="diagnosis_patron_code" value="<?php echo $this->input->post('diagnosis_patron_code'); ?>" /></div>
	<div>Diagnosis Comment : <textarea name="diagnosis_comment"><?php echo $this->input->post('diagnosis_comment'); ?></textarea></div>
	<div>Diagnosis Physician Code : <input type="text" name="diagnosis_physician_code" value="<?php echo $this->input->post('diagnosis_physician_code'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>