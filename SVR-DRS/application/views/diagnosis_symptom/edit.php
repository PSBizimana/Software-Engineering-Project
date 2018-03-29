<?php echo validation_errors(); ?>

<?php echo form_open('diagnosis_symptom/edit/'.$diagnosis_symptom['diagnosis_symptom_code']); ?>

	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>