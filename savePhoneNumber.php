<?php
$id = $_POST['id'];
$name = $_POST['name'];
$phoneNumber = $_POST['phoneNumber']    ;

$server = "localhost";
$user = "root";
$pass = "";
$db = "phone_contact";
$conn = new mysqli($server,$user,$pass,$db);


$sql = "INSERT INTO  contacts_table (Name,`PhoneNumber`) VALUES('$name','$phoneNumber')";
$adding = $conn->query($sql);

if($adding==true){
    header("location:./index.php");
}else{
    echo "FAIL";
}

?>
