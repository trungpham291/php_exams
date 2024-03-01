<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "phone_contact";
$conn = new mysqli($server,$user,$pass,$db);

$id = $_GET['id'];

$sql = "DELETE FROM  contacts_table WHERE id = $id";
$delete = $conn->query($sql);
if($delete==true){
    header("location:./index.php");
}else{
    echo "Fail";
}


?>
