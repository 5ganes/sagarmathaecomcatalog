<h3>List of Categories</h3>
<table border="2">
	<tr>
		<th>SN</th>
		<th>Name</th>
		<th>Publish</th>
		<th>Action</th>
	</tr>

	<?php $sn = 1;
	foreach ($categories as $cat) { ?>
		<tr>
			<td><?php echo $sn++; ?></td>
			<td><?php echo $cat['name']; ?></td>
			<td><?php echo $cat['publish']; ?></td>
			<td>
				Edit | Delete
			</td>
		</tr>
	<?php }
	?>

</table>