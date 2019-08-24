<?php
require_once("config.php");
$prog = $date = $id = $sql = '';
if (isset($_POST['submit'])) {
    if (($_FILES['imgfile']['name'] != '')) {
        // Where the file is going to be stored
        $target_dir = __DIR__ . "/img/uploads/";
        $file = $_FILES['imgfile']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['imgfile']['tmp_name'];
        $path_filename_ext = $target_dir . $filename . '.' . $ext;
        if (file_exists($path_filename_ext)) {
        } else {
            move_uploaded_file($temp_name, $path_filename_ext);
        }
    }
}
$prog = $_POST['prog'];
$date = $_POST["date"];
$id = $_POST["cottege_id"];
$sql = "INSERT INTO etaps (cottege_id, date, prog, imgpath) VALUES ('$id', '$date', '$prog', '$filename.$ext')";
try {
    $db->query($sql);
   //header("Location: admin.php");
} catch (mysqli_sql_exception $e) {
    echo $e->getMessage();
}
header("Location: admin.php");
