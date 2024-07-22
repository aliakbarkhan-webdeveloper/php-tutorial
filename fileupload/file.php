<?php



//coming files handling

if ($_FILES["upload"]) {
    # code...
    $path = $_FILES["upload"]["name"]; //extracting name of file and storing it
    $upload_path = "./" . $path; //
    move_uploaded_file($_FILES["upload"]["tmp_name"], $upload_path);
    echo "file uploaded";
} else {
    die("no file found");
}
