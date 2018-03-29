<table border="1" width="100%">
    <tr>
		<th>Disease Symptom Code</th>
		<th>Disease Symptom Name</th>
		<th>Disease Symptom Description</th>
		<th>Actions</th>
    </tr>
	<?php foreach($disease_symptoms as $d){ ?>
    <tr>
		<td><?php echo $d['disease_symptom_code']; ?></td>
		<td><?php echo $d['disease_symptom_name']; ?></td>
		<td><?php echo $d['disease_symptom_description']; ?></td>
		<td>
            <a href="<?php echo site_url('disease_symptom/edit/'.$d['disease_symptom_code']); ?>">Edit</a> | 
            <a href="<?php echo site_url('disease_symptom/remove/'.$d['disease_symptom_code']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>