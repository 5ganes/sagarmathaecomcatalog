<h2>Edit Category</h2>
<form method="POST" action="">
	<input type="hidden" name="id" value="<?php echo $category['id'];?>">
	Category Name : <input type="text" name="name" value="<?php echo $category['name']; ?>">
	<br><br>
	Publish : <input type="radio" name="publish" value="1" checked> Yes 
	          <input type="radio" name="publish" value="0" <?php if($category['publish'] == 0) echo 'checked'; ?>> No <br><br>

	<input type="submit" name="update" value="Update">
</form>