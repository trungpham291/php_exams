<?php
$id = $_POST['ID'];
$name = $_POST['name'];
$PhoneNumber = $_POST['phoneNumber'];

$server = "localhost";
$user = "root";
$pass = "";
$db = "phone_contact";
$conn = new mysqli($server,$user,$pass,$db);


$sql = "UPDATE  contacts_table SET name = '$name' ,phone_number = '$PhoneNumber' WHERE id = '$id'";

$rs = $conn->query($sql);
if ($rs == TRUE){
    header("location:./index.php");
}else{
    echo "Update Failed";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

</body>
</html>
