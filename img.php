<?php
// Checks if the form was submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {
// Checks if a file was uploaded without errors
if(isset($_FILES['photo'])
&& is_uploaded_file($_FILES['photo']['tmp_name'])&& $_FILES['photo']['error']==UPLOAD_ERR_OK) {
// Outputs the contents of $_FILES
foreach($_FILES['photo'] as $key => $value) {
echo "$key : $value <br />";
}
} else {
echo "No file uploaded!";
}
} else {
// If the form was not submitted, displays the form HTML
?>
<form action="test.php" method="post"
enctype="multipart/form-data">
<label for="photo">Photo:</label>
<input type="file" name="photo" />
<input type="submit" value="Upload a Photo" />
</form>
<?php } // End else statement ?>
