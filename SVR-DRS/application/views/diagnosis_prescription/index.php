<table border="1" width="100%">
    <tr>
		<th>Diagnosis Reference Number</th>
		<th>Prescription Given</th>
		<th>Prescription Instructions</th>
		<th>Prescription Comment</th>
		<th>Actions</th>
    </tr>
	<?php foreach($diagnosis_prescriptions as $d){ ?>
    <tr>
		<td><?php echo $d['diagnosis_reference_number']; ?></td>
		<td><?php echo $d['prescription_given']; ?></td>
		<td><?php echo $d['prescription_instructions']; ?></td>
		<td><?php echo $d['prescription_comment']; ?></td>
		<td>
            <a href="<?php echo site_url('diagnosis_prescription/edit/'.$d['diagnosis_reference_number']); ?>">Edit</a> | 
            <a href="<?php echo site_url('diagnosis_prescription/remove/'.$d['diagnosis_reference_number']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>