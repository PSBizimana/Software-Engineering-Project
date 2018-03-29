<table border="1" width="100%">
    <tr>
		<th>Prescription Code</th>
		<th>Disease Code</th>
		<th>Prescription Name</th>
		<th>Prescription Comment</th>
		<th>Actions</th>
    </tr>
	<?php foreach($general_prescriptions as $g){ ?>
    <tr>
		<td><?php echo $g['prescription_code']; ?></td>
		<td><?php echo $g['disease_code']; ?></td>
		<td><?php echo $g['prescription_name']; ?></td>
		<td><?php echo $g['prescription_comment']; ?></td>
		<td>
            <a href="<?php echo site_url('general_prescription/edit/'.$g['prescription_code']); ?>">Edit</a> | 
            <a href="<?php echo site_url('general_prescription/remove/'.$g['prescription_code']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>