<?php
include_once '../../sql/select.php';
require '../../sql/config.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/table.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="../../../../assets/img/client.png" />
    <title>Client Table</title>
</head>
<header>
    <button class="button" role="button" onclick="window.location='../../dashboard.php'"><i class="fa fa-arrow-left" aria-hidden="true"> Back</i></button>


</header>

<body>

    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
        <div class="table-users">


            <table cellspacing="0">
                <tr>
                    <td>Sl No</td>
                    <td>Full Client Name</td>
                    <td>Phone</td>
                    <td>Email</td>
                    <td>Massage</td>
                  
                </tr>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["full_name"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["info"]; ?></td>
                      
                    </tr>
                <?php
                    $i++;
                }
                ?>
        </div>
        </table>

    <?php
    } else {
        $sql = "TRUNCATE Table bookhours ";
        if (mysqli_query($con, $sql)) {

            header('Location: ../../dashboard.php');
           
        } else {
            echo "Error deleting record: " . mysqli_error($con);
        }
    }
    ?>
</body>

</html>