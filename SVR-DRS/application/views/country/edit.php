<?php echo validation_errors(); ?>

<?php echo form_open('country/edit/'.$country['country_code']); ?>

	<div>Country Name : <input type="text" name="country_name" value="<?php echo ($this->input->post('country_name') ? $this->input->post('country_name') : $country['country_name']); ?>" /></div>
	<div>Country Abbreviation : <input type="text" name="country_abbreviation" value="<?php echo ($this->input->post('country_abbreviation') ? $this->input->post('country_abbreviation') : $country['country_abbreviation']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>