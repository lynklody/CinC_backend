<?php

$origfilename = $_FILES['app']['name'];
$tempfilename = $_FILES['app']['tmp_name'];
$newfiliename = "internApps/" . $origfilename;
$success = move_uploaded_file($tempfilename, $newfilename);
if(!success) {
    echo "copy failed";
}
else {
    echo 'it worked!';
}
?>
