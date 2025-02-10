<?php
if (isset($_FILES['file'])) {
    // Use the temporary file path directly from the $_FILES array
    $filePath  = $_FILES['file']['tmp_name'];

    // Check if the temporary file exists
    if (file_exists($filePath)) {
        $file = fopen($filePath, 'r') or die('Something went wrong');

        // Read the file content and display it
        echo fread($file, filesize($filePath));

        // Close the file after reading
        fclose($file);
    } else {
        die('File does not exist');
    }
}
?>

<!-- Form for file upload -->
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" placeholder="Enter Your File Name">
    <br><br>
    <button type="submit">Read File</button>
</form>