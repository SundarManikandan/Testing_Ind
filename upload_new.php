<?php
$upload_dir = "uploads/";
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

if ($_FILES['pdf']['error'] === UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["pdf"]["tmp_name"];
    $name = basename($_FILES["pdf"]["name"]);
    $target_file = $upload_dir . uniqid() . "_" . $name;

    if (move_uploaded_file($tmp_name, $target_file)) {
        echo $target_file; 
    } else {
        http_response_code(500);
        echo "Upload failed";
    }
} else {
    http_response_code(400);
    echo "No file uploaded";
}
 if (move_uploaded_file($tmp_name, $target_file)) {
        echo $target_file; 
    }


?>
