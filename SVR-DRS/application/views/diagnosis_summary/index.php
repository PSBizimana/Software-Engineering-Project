<table border="1" width="100%">
    <tr>
		<th>Diagnosis Reference Number</th>
		<th>Disease Date</th>
		<th>Diagnosis Patron Code</th>
		<th>Diagnosis Comment</th>
		<th>Diagnosis Physician Code</th>
		<th>Actions</th>
    </tr>
	<?php foreach($diagnosis_summary as $d){ ?>
    <tr>
		<td><?php echo $d['diagnosis_reference_number']; ?></td>
		<td><?php echo $d['disease_date']; ?></td>
		<td><?php echo $d['diagnosis_patron_code']; ?></td>
		<td><?php echo $d['diagnosis_comment']; ?></td>
		<td><?php echo $d['diagnosis_physician_code']; ?></td>
		<td>
            <a href="<?php echo site_url('diagnosis_summary/edit/'.$d['diagnosis_reference_number']); ?>">Edit</a> | 
            <a href="<?php echo site_url('diagnosis_summary/remove/'.$d['diagnosis_reference_number']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>