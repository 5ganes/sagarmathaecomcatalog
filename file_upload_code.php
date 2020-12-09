// file upload code

if(isset($_POST['submit'])){
	$image = $_FILES['image']['name']; // file name
	$tmp_loc = $_FILES['image']['tmp_name']; // file path in client
	$perm_loc = 'uploads/' . $image;
	copy($tmp_loc, $perm_loc);

	$_POST['image'] = $image;
	$obj->insert($_POST);

}

<form method="POST" action="" enctype="multipart/form-data">
	Image : <input type = "file" name="image">
	<input type="submit" name="submit" value="Submit">
</form>


edit //
1. no old image and image browsed : noting should be done
2. no old image and image not browsed : upload image and save it in db
3. old image exists and image not browsed : no upload and old image exists in server
4. old image exists and image not browsed : old image should be deleted and new image should 
                                            be uploaded in server

// file_exists(path of image) : to check whether files exists in server
// unlink(path of image) : to delete file from server