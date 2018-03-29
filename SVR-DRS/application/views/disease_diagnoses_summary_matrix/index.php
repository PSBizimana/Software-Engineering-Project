<table border="1" width="100%">
    <tr>
		<th>Diagnosis Reference Number</th>
		<th>Diagnosed  Disease Code</th>
		<th>Actions</th>
    </tr>
	<?php foreach($disease_diagnoses_summary_matrix as $d){ ?>
    <tr>
		<td><?php echo $d['diagnosis_reference_number']; ?></td>
		<td><?php echo $d['diagnosed _disease_code']; ?></td>
		<td>
            <a href="<?php echo site_url('disease_diagnoses_summary_matrix/edit/'.$d['diagnosis_reference_number']); ?>">Edit</a> | 
            <a href="<?php echo site_url('disease_diagnoses_summary_matrix/remove/'.$d['diagnosis_reference_number']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>