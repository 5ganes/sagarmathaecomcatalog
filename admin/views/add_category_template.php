<script type="text/javascript">
	function validateForm(form){
		if(form.name.value == ''){
			document.getElementsByClassName('name')[0].innerHTML = '(Enter category name)';
			form.name.focus();
			return false;
		}
	}
</script>
<h2>Add Category</h2>
<form method="POST" action="" onsubmit="return validateForm(this)">
	Category Name : <input type="text" name="name"> <span class="name red"></span><br><br>
	Publish : <input type="radio" name="publish" value="1" checked> Yes 
	          <input type="radio" name="publish" value="0"> No <br><br>

	<h3>Meta Data</h3>
	Keywords : <input type="text" name="keywords"><br><br>
	Description : <input type="text" name="description"><br><br>

	<input type="submit" name="save" value="Save"> 
	<a href="categories.php">Back</a>
</form>