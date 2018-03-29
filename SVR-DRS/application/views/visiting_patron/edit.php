<?php echo validation_errors(); ?>

<?php echo form_open('visiting_patron/edit/'.$visiting_patron['patron_code']); ?>

	<div>Patron First Name : <input type="text" name="patron_first_name" value="<?php echo ($this->input->post('patron_first_name') ? $this->input->post('patron_first_name') : $visiting_patron['patron_first_name']); ?>" /></div>
	<div>Patron Last Name : <input type="text" name="patron_last_name" value="<?php echo ($this->input->post('patron_last_name') ? $this->input->post('patron_last_name') : $visiting_patron['patron_last_name']); ?>" /></div>
	<div>Patron Middle Initial : <input type="text" name="patron_middle_initial" value="<?php echo ($this->input->post('patron_middle_initial') ? $this->input->post('patron_middle_initial') : $visiting_patron['patron_middle_initial']); ?>" /></div>
	<div>Patron Dob : <input type="text" name="patron_dob" value="<?php echo ($this->input->post('patron_dob') ? $this->input->post('patron_dob') : $visiting_patron['patron_dob']); ?>" /></div>
	<div>Patron Place Of Birth : <input type="text" name="patron_place_of_birth" value="<?php echo ($this->input->post('patron_place_of_birth') ? $this->input->post('patron_place_of_birth') : $visiting_patron['patron_place_of_birth']); ?>" /></div>
	<div>Patron Street Address : <input type="text" name="patron_street_address" value="<?php echo ($this->input->post('patron_street_address') ? $this->input->post('patron_street_address') : $visiting_patron['patron_street_address']); ?>" /></div>
	<div>Patron City : <input type="text" name="patron_city" value="<?php echo ($this->input->post('patron_city') ? $this->input->post('patron_city') : $visiting_patron['patron_city']); ?>" /></div>
	<div>Patron Province State Code : <input type="text" name="patron_province_state_code" value="<?php echo ($this->input->post('patron_province_state_code') ? $this->input->post('patron_province_state_code') : $visiting_patron['patron_province_state_code']); ?>" /></div>
	<div>Patron Telephone : <input type="text" name="patron_telephone" value="<?php echo ($this->input->post('patron_telephone') ? $this->input->post('patron_telephone') : $visiting_patron['patron_telephone']); ?>" /></div>
	<div>Patron Email : <input type="text" name="patron_email" value="<?php echo ($this->input->post('patron_email') ? $this->input->post('patron_email') : $visiting_patron['patron_email']); ?>" /></div>
	<div>Patron Primary Physician Code : <input type="text" name="patron_primary_physician_code" value="<?php echo ($this->input->post('patron_primary_physician_code') ? $this->input->post('patron_primary_physician_code') : $visiting_patron['patron_primary_physician_code']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>