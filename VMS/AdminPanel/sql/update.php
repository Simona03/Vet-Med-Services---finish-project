<?php


include_once 'config.php';
if (count($_POST) > 0) {
    mysqli_query($con, "UPDATE profiles set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', staffId='" . $_POST['numberId'] . "'  WHERE id='" . $_POST['id'] . "'");

    header('Location: ../Pages/Profiles/staffProfiles.php');
}
$result = mysqli_query($con, "SELECT * FROM profiles WHERE id='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($result);


?>
<html>

<head>
    <title>Update <?php echo $row['name'] ?> Data</title>
    <link href="../../style/index.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../assets/img/update.png" />
</head>

<body>
    <div class="login-box">
        <h1>Update <?php echo $row['name'] ?> Data</h1>
        <form method="POST">


            <div class="user-box">
                Client ID: <br>
                <input type="hidden" name="id" class="login-box" value="<?php echo $row['id']; ?>">
                <input type="text" name="id" value="<?php echo $row["id"]; ?>">
            </div>
            <div class="user-box">

                Full Name<br>
                <input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>">
            </div>
          
            <div class="user-box">
                Email:<br>
                <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">
            </div>
            Info:<br>
            <input type="text" name="numberId" class="form-control" value="<?php echo $row['staffId']; ?>">
            <button class="button" role="button" name="submit"> Update</button>
            <br>
            <a href="../Pages/Profiles/staffProfiles.php">Back to Table</a>
    </div>


    </form>
    </div>
</body>

</html>