<h2>Edit Category</h2>
<form method="POST" action="">
	<input type="hidden" name="id" value="<?php echo $category['id'];?>">
	Category Name : <input type="text" name="name" value="<?php echo $category['name']; ?>">
	<br><br>
	Publish : <input type="radio" name="publish" value="1" checked> Yes 
	          <input type="radio" name="publish" value="0" <?php if($category['publish'] == 0) echo 'checked'; ?>> No <br><br>

	<h3>Meta Data</h3>
	Keywords : <input type="text" name="keywords" value="<?php echo $category['keywords'];?>"><br><br>
	Description : <input type="text" name="description" value="<?php echo $category['description']; ?>"><br><br>

	<input type="submit" name="update" value="Update"> 
	<a href="categories.php">Back</a>
</form>