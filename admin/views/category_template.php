<h3>List of Categories</h3>
<a href="add_category.php">Add New Category</a>
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
			<td>
				<?php if($cat['publish'] == 1) echo 'Yes'; else echo 'No'; ?>
			</td>
			<td>
				Edit | Delete
			</td>
		</tr>
	<?php }
	?>

</table>