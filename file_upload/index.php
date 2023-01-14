<?php
// @author p4nth3r-5237

ini_set('display_errors', 1);
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the file name and temporary location
    $file = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    // Set the destination folder
    $upload_dir = 'uploads/';
    // Move the file to the destination folder
    move_uploaded_file($file_tmp, $upload_dir . $file);
    echo "File uploaded successfully.";
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>
