<table border="1" width="100%">
    <tr>
		<th>Country Code</th>
		<th>Country Name</th>
		<th>Country Abbreviation</th>
		<th>Actions</th>
    </tr>
	<?php foreach($countries as $c){ ?>
    <tr>
		<td><?php echo $c['country_code']; ?></td>
		<td><?php echo $c['country_name']; ?></td>
		<td><?php echo $c['country_abbreviation']; ?></td>
		<td>
            <a href="<?php echo site_url('country/edit/'.$c['country_code']); ?>">Edit</a> | 
            <a href="<?php echo site_url('country/remove/'.$c['country_code']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>