<?php
$fileName = '/dummyFile.txt';
$createdFile = '/createdManualFile' . $fileName;
$content = 'This content will be shown in the created file';

if (!file_exists(__DIR__ . $createdFile)) {
    mkdir(__DIR__ . $createdFile, 0777, true);
}

$file = fopen($fileName, 'w') or die('unable to create file');
fwrite($file, $content);
fclose($file);
echo 'file created';
?>


<form action="" method="post">
    <input type="text" name="inputFileName" placeholder="Enter Your File Name">
    <br><br>
    <textarea name="content" id="" placeholder="Enter Your Some Content...">

    </textarea>
    <br><br>
    <button type="submit">Create File</button>
</form>