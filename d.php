<?php

  if (mkdir("sbstyan", 0777, true)) {
        echo "Directory created successfully!";
    } else {
        echo "Failed to create directory.";
    }
?>
