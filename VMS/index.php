


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <title>VMS Login</title>
</head>

<body>
    <div class="login-box">
        <h1>Login</h1>
        <form method="POST" action="./sql/loginfun.php">
 
         
            <div class="user-box">
                <input type="email" name="email" class="form-control" placeholder="Please enter your email" id="email" >
            </div>
            <div class="user-box">

                <input type="password" name="password" class="form-control" placeholder="Please enter your password" id="password" required>
            </div>
            <button class="button" role="button" name="action"> Login</button>


        </form>
    </div>


</body>

</html>