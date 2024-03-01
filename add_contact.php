<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="index-page"><a href="./index.php">HOME</a></div>
        <form action="./savePhoneNumber.php" method="post">
<!--             <input type="text" name="ID" placeholder="ID">-->
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="phoneNumber" placeholder="Phone Number">
            <button type="submit">Add</button>
        </form>
    </div>
</div>
</body>
</html>