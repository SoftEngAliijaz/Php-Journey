<?php
if (isset($_POST['inputFileName'])) {
    $fileName = $_POST['inputFileName'];
    $content = $_POST['content'];

    // Define the directory where the file will be created
    $directory = __DIR__ . "/createInputFileByField/";

    // Ensure the directory exists, if not, create it
    if (!file_exists($directory)) {
        mkdir($directory, 0777, true);
    }

    // Define the full path for the file
    $filePath = $directory . $fileName;

    // Try to open the file and write content, handle errors
    $file = fopen($filePath, 'w') or die('Unable to create file');
    fwrite($file, $content);
    fclose($file);

    echo 'File created: ' . $fileName;
}
?>

<!-- Form for user input -->
<form action="" method="post">
    <input type="text" name="inputFileName" placeholder="Enter Your File Name"><br><br>
    <textarea name="content" placeholder="Enter Your Some Content..."></textarea><br><br>
    <button type="submit">Create File</button>
</form>