<?php
require_once('config.php');
$stmt = "DELETE FROM etaps WHERE id=".$_GET["id"];
$db->query($stmt);
mysqli_close($db);
header('Location: admin.php');