<?php

$origfilename = $_FILES['app']['name'];
$tempfilename = $_FILES['app']['tmp_name'];
$newfiliename = "/internApps/" . $origfilename;
$success = move_uploaded_file($tempfilename, $newfilename);
if(!success) {
    echo "copy failed";
}
else {
    chmod($newfilename, 0644);
    echo 'it worked!';
}

$intern = new Interns();
$intern->filename= $newfilename;
$intern->save();

return redirect('/fundedIntern');

?>
