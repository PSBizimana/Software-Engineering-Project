<table border="1" width="100%">
    <tr>
		<th>Physician Code</th>
		<th>Physician First Name</th>
		<th>Physician Last Name</th>
		<th>Physician Street Address</th>
		<th>Physician City</th>
		<th>Physician License Number</th>
		<th>Physician Education Degree</th>
		<th>Physician Specialization</th>
		<th>Physician Province State Code</th>
		<th>Physician Telephone</th>
		<th>Physician Email</th>
		<th>Actions</th>
    </tr>
	<?php foreach($physicians as $p){ ?>
    <tr>
		<td><?php echo $p['physician_code']; ?></td>
		<td><?php echo $p['physician_first_name']; ?></td>
		<td><?php echo $p['physician_last_name']; ?></td>
		<td><?php echo $p['physician_street_address']; ?></td>
		<td><?php echo $p['physician_city']; ?></td>
		<td><?php echo $p['physician_license_number']; ?></td>
		<td><?php echo $p['physician_education_degree']; ?></td>
		<td><?php echo $p['physician_specialization']; ?></td>
		<td><?php echo $p['physician_province_state_code']; ?></td>
		<td><?php echo $p['physician_telephone']; ?></td>
		<td><?php echo $p['physician_email']; ?></td>
		<td>
            <a href="<?php echo site_url('physician/edit/'.$p['physician_code']); ?>">Edit</a> | 
            <a href="<?php echo site_url('physician/remove/'.$p['physician_code']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>