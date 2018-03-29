<?php echo validation_errors(); ?>

<?php echo form_open('disease_symptom_matrix/add'); ?>

	<div>Disease Symptom Sequence : <input type="text" name="disease_symptom_sequence" value="<?php echo $this->input->post('disease_symptom_sequence'); ?>" /></div>
	<div>Disease Symptom Rank : <input type="text" name="disease_symptom_rank" value="<?php echo $this->input->post('disease_symptom_rank'); ?>" /></div>
	<div>Disease Frequency : <input type="text" name="disease_frequency" value="<?php echo $this->input->post('disease_frequency'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>