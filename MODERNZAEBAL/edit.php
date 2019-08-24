<?php
require_once("config.php");
$prog=$date=$id=$sql="";
if(isset($_POST['submit'])) {
    if (($_FILES['imgfile']['name'] != "")) {
        // Where the file is going to be stored
        $target_dir = __DIR__."/img/uploads/";
        $file = $_FILES['imgfile']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['imgfile']['tmp_name'];
        $path_filename_ext = $target_dir . $filename . "." . $ext;

        // Check if file already exists
        if (file_exists($path_filename_ext)) {
            echo "Sorry, file already exists.";
        } else {
            move_uploaded_file($temp_name, $path_filename_ext);
            echo "Congratulations! File Uploaded Successfully.";
        }
    }
}
$prog = $_POST['prog'];
$date = $_POST["date"];
$id = $_POST["id"];
if (($_FILES['imgfile']['name'] != "")){
$sql = "UPDATE etaps SET  date='$date', prog='$prog', imgpath='$filename.$ext' WHERE id='$id'";
}else{
    $sql = "UPDATE etaps SET  date='$date', prog='$prog' WHERE id='$id'";
}
try{
    $db->query($sql);
}catch (mysqli_sql_exception $e){
    echo $e->getMessage();
}
mysqli_close($db);
header("Location: admin.php");
