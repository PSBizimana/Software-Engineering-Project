<table border="1" width="100%">
    <tr>
		<th>Patron Code</th>
		<th>Patron First Name</th>
		<th>Patron Last Name</th>
		<th>Patron Middle Initial</th>
		<th>Patron Dob</th>
		<th>Patron Place Of Birth</th>
		<th>Patron Street Address</th>
		<th>Patron City</th>
		<th>Patron Province State Code</th>
		<th>Patron Telephone</th>
		<th>Patron Email</th>
		<th>Patron Primary Physician Code</th>
		<th>Actions</th>
    </tr>
	<?php foreach($visiting_patron as $v){ ?>
    <tr>
		<td><?php echo $v['patron_code']; ?></td>
		<td><?php echo $v['patron_first_name']; ?></td>
		<td><?php echo $v['patron_last_name']; ?></td>
		<td><?php echo $v['patron_middle_initial']; ?></td>
		<td><?php echo $v['patron_dob']; ?></td>
		<td><?php echo $v['patron_place_of_birth']; ?></td>
		<td><?php echo $v['patron_street_address']; ?></td>
		<td><?php echo $v['patron_city']; ?></td>
		<td><?php echo $v['patron_province_state_code']; ?></td>
		<td><?php echo $v['patron_telephone']; ?></td>
		<td><?php echo $v['patron_email']; ?></td>
		<td><?php echo $v['patron_primary_physician_code']; ?></td>
		<td>
            <a href="<?php echo site_url('visiting_patron/edit/'.$v['patron_code']); ?>">Edit</a> | 
            <a href="<?php echo site_url('visiting_patron/remove/'.$v['patron_code']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>