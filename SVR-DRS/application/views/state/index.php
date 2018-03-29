<table border="1" width="100%">
    <tr>
		<th>Province State Code</th>
		<th>Province State Name</th>
		<th>Province State Country Code</th>
		<th>Actions</th>
    </tr>
	<?php foreach($state as $s){ ?>
    <tr>
		<td><?php echo $s['province_state_code']; ?></td>
		<td><?php echo $s['province_state_name']; ?></td>
		<td><?php echo $s['province_state_country_code']; ?></td>
		<td>
            <a href="<?php echo site_url('state/edit/'.$s['province_state_code']); ?>">Edit</a> | 
            <a href="<?php echo site_url('state/remove/'.$s['province_state_code']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>