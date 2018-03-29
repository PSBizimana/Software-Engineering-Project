<table border="1" width="100%">
    <tr>
		<th>Disease Code</th>
		<th>Disease Name</th>
		<th>Disease Description</th>
		<th>Disease Category Code</th>
		<th>Actions</th>
    </tr>
	<?php foreach($disease_definition as $d){ ?>
    <tr>
		<td><?php echo $d['disease_code']; ?></td>
		<td><?php echo $d['disease_name']; ?></td>
		<td><?php echo $d['disease_description']; ?></td>
		<td><?php echo $d['disease_category_code']; ?></td>
		<td>
            <a href="<?php echo site_url('disease_definition/edit/'.$d['disease_code']); ?>">Edit</a> | 
            <a href="<?php echo site_url('disease_definition/remove/'.$d['disease_code']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>