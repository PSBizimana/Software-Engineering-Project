<?php echo validation_errors(); ?>

<?php echo form_open('physician/add'); ?>

	<div>Physician First Name : <input type="text" name="physician_first_name" value="<?php echo $this->input->post('physician_first_name'); ?>" /></div>
	<div>Physician Last Name : <input type="text" name="physician_last_name" value="<?php echo $this->input->post('physician_last_name'); ?>" /></div>
	<div>Physician Street Address : <input type="text" name="physician_street_address" value="<?php echo $this->input->post('physician_street_address'); ?>" /></div>
	<div>Physician City : <input type="text" name="physician_city" value="<?php echo $this->input->post('physician_city'); ?>" /></div>
	<div>Physician License Number : <input type="text" name="physician_license_number" value="<?php echo $this->input->post('physician_license_number'); ?>" /></div>
	<div>Physician Education Degree : <input type="text" name="physician_education_degree" value="<?php echo $this->input->post('physician_education_degree'); ?>" /></div>
	<div>Physician Specialization : <input type="text" name="physician_specialization" value="<?php echo $this->input->post('physician_specialization'); ?>" /></div>
	<div>Physician Province State Code : <input type="text" name="physician_province_state_code" value="<?php echo $this->input->post('physician_province_state_code'); ?>" /></div>
	<div>Physician Telephone : <input type="text" name="physician_telephone" value="<?php echo $this->input->post('physician_telephone'); ?>" /></div>
	<div>Physician Email : <input type="text" name="physician_email" value="<?php echo $this->input->post('physician_email'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>