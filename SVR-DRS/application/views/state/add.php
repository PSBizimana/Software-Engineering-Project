<?php echo validation_errors(); ?>

<?php echo form_open('state/add'); ?>

	<div>Province State Name : <input type="text" name="province_state_name" value="<?php echo $this->input->post('province_state_name'); ?>" /></div>
	<div>Province State Country Code : <input type="text" name="province_state_country_code" value="<?php echo $this->input->post('province_state_country_code'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>