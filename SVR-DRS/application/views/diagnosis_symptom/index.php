<table border="1" width="100%">
    <tr>
		<th>Diagnosis Symptom Code</th>
		<th>Diagnosis Symptom Summary</th>
		<th>Actions</th>
    </tr>
	<?php foreach($diagnosis_symptoms as $d){ ?>
    <tr>
		<td><?php echo $d['diagnosis_symptom_code']; ?></td>
		<td><?php echo $d['diagnosis_symptom_summary']; ?></td>
		<td>
            <a href="<?php echo site_url('diagnosis_symptom/edit/'.$d['diagnosis_symptom_code']); ?>">Edit</a> | 
            <a href="<?php echo site_url('diagnosis_symptom/remove/'.$d['diagnosis_symptom_code']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>