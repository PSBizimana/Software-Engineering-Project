<table border="1" width="100%">
    <tr>
		<th>Disease Code</th>
		<th>Disease Symptom Sequence</th>
		<th>Disease Symptom Code</th>
		<th>Disease Symptom Rank</th>
		<th>Disease Frequency</th>
		<th>Actions</th>
    </tr>
	<?php foreach($disease_symptom_matrix as $d){ ?>
    <tr>
		<td><?php echo $d['disease_code']; ?></td>
		<td><?php echo $d['disease_symptom_sequence']; ?></td>
		<td><?php echo $d['disease_symptom_code']; ?></td>
		<td><?php echo $d['disease_symptom_rank']; ?></td>
		<td><?php echo $d['disease_frequency']; ?></td>
		<td>
            <a href="<?php echo site_url('disease_symptom_matrix/edit/'.$d['disease_code']); ?>">Edit</a> | 
            <a href="<?php echo site_url('disease_symptom_matrix/remove/'.$d['disease_code']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>