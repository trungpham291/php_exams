<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "phone_contact";
$conn = new mysqli($server,$user,$pass,$db);


$list ="SELECT * FROM `contacts_table` " ;

$sql = $conn ->query($list);
if ($sql ->num_rows>0){
    while ($row=$sql -> fetch_assoc()){
        $ds[]= $row ;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        i{
            margin: 0px 10px;
            font-size: 20px;
        }
        .title{
            margin: 14px;

        }
        .add_page{
            margin: 20px 0px;
            font-size: 20px;
            border: 1px solid gray;
            padding: 10px;
            border-radius: 10px;
            text-decoration: none;
            transform: translateX(720px);

        }
        .head_section{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="head_section">
            <h2 class="title" >Phone Contacts</h2>
            <a class="add_page" href="./add_contact.php">Add New Contact</a>
        </div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>NAME</th>
                <th>Phone Number</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($ds as $listContact ){?>
                <tr>
                    <th><?php echo $listContact['id'] ?></th>
                    <th><?php echo $listContact['name'] ?></th>
                    <th><?php echo $listContact['phone_number'] ?></th>
                    <th>
                        <a href="./delete_contact.php?id=<?php echo $listContact['id'] ?>" ><i class="fa-solid fa-trash " style="color: #d51010;"></i></a>
                        <a href="./edit_contact.php?id=<?php echo $listContact['id'] ?>"><i class="fa-solid fa-pen-to-square" style="color: #74C0FC;"></i></a>
                    </th>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>