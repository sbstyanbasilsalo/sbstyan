<?php

  if (mkdir($directory, 0777, true)) {
        echo "Directory created successfully!";
    } else {
        echo "Failed to create directory.";
    }
?>
