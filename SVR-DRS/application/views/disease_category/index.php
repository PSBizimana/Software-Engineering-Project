<table border="1" width="100%">
    <tr>
		<th>Disease Category Code</th>
		<th>Disease Category Name</th>
		<th>Disease Category Description</th>
		<th>Actions</th>
    </tr>
	<?php foreach($disease_category as $d){ ?>
    <tr>
		<td><?php echo $d['disease_category_code']; ?></td>
		<td><?php echo $d['disease_category_name']; ?></td>
		<td><?php echo $d['disease_category_description']; ?></td>
		<td>
            <a href="<?php echo site_url('disease_category/edit/'.$d['disease_category_code']); ?>">Edit</a> | 
            <a href="<?php echo site_url('disease_category/remove/'.$d['disease_category_code']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>