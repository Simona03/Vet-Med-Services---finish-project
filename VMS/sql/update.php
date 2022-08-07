<?php


include_once 'config.php';
session_start();

$sql = "SELECT * FROM bookhours ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if (count($_POST) > 0) {
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];

    $phone = $_POST['phone'];
    $adress = $_POST['email'];
    $message = $_POST['message'];
    $sql = "UPDATE bookhours set id='$id', full_name='$full_name',  phone='$phone' ,email='$adress',info='$message' WHERE id='$id'";
    mysqli_query($con, $sql);
    header('Location: ../Pages/Client/Table.php');
}

?>
<html>

<head>
    <link rel="stylesheet" href="../style/index.css">
    <title>Update <?php echo $row['full_name'] ?> Data</title>
</head>

<body>


<div class="login-box">
    <h1>Update <?php echo $row['full_name'] ?> Data</h1>
    <form method="POST">


        <div class="user-box">
        Client ID: 
            <input type="hidden" name="id" class="login-box" value="<?php echo $row['id']; ?>">
            <input type="text" name="id" value="<?php echo $row["id"]; ?>">
        </div>
        <div class="user-box">
        Full Name
        <input type="text" name="full_name" class="txtField" value="<?php echo $row["full_name"]; ?>">
        </div>
        <div class="user-box">
        Phone:
        <input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
        </div>
        <div class="user-box">
        Email:
        <input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
        </div>
        Info:
        <input type="text" name="message" class="txtField" value="<?php echo $row['info']; ?>">
       
        <button class="button" role="button" name="submit"> Update</button>
        <br>
        <a href="../Pages/Client/Table.php">Back to Table</a>
</div>
</body>
</html>