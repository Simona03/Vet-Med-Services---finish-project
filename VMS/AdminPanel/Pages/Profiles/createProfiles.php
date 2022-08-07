

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../../../assets/img/add.png" />
    <link rel="stylesheet" href="../style/index.css">
    <title>New Member</title>
</head>

<body>
    <div class="login-box">
        <h1>Register New Member</h1>
        <form method="POST" action="../../sql/insert.php">
        <div class="user-box">
                <input type="text" name="name" class="form-control" placeholder="Please enter Staff Full Name" id="email" required>
            </div>
            
           
            <div class="user-box">
                <input type="email" name="email" class="form-control" placeholder="Please enter your email" id="email" required>
            </div>
            <div class="user-box">

                <input type="password" name="password" class="form-control" placeholder="Please enter your password" id="password" required>
            </div>
            <div class="user-box">
                <input name="id" type="number" value="1" class="form-control" placeholder="Please enter your ID number" id="id" required>
            </div>
            <button class="button" role="button" name="action"> Register</button>
            <button class="button" role="button" onclick="  window.location='../../dashboard.php' "> Back</button>

        </form>
    </div>


</body>

</html>