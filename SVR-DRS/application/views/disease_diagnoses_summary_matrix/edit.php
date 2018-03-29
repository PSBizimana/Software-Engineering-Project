<?php echo validation_errors(); ?>

<?php echo form_open('disease_diagnoses_summary_matrix/edit/'.$disease_diagnoses_summary_matrix['diagnosis_reference_number']); ?>

	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>