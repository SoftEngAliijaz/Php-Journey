<?php echo '';

if ($_File['upload_file']) {

    $path = $_File['upload_file']['name'];
    $upload_path = "./upload_file/" . $path;
    move_uploaded_file($_FILES['upload_file']['tmp_name'], $upload_path)
        || die('Failed to Upload Media');
} else {
    /// mac os
    die('No File Found');
}
// This error to resolve
/*
Warning: Undefined variable $_File in D:\XAMPP-Server\htdocs\Php-Journey\php\file_upload\upload_media.php on line 3

Warning: Trying to access array offset on value of type null in D:\XAMPP-Server\htdocs\Php-Journey\php\file_upload\upload_media.php on line 3
No File Found
*/