<?php
include_once '../../sql/admin/select.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../../../assets/img/profiles.png" />
    <link rel="stylesheet" href="../style/table.css">
 
    <title>Profiles
          </title>
</head>
<header>
    <button  class="button" role="button"onclick="window.location='../../dashboard.php'"><i class="fa fa-arrow-left" aria-hidden="true"> Back</i></button>
    <button  class="button" role="button" onclick="window.location='../../sql/export.php'"><i class="fa fa-download" aria-hidden="true"> Export</i></button>


</header>

<body>

    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
        <div class="tbl-header">


            <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td>Sl No</td>
                    <td>Name</td>
                    <td>Password</td>
                    <td>Email</td>
                    <td>MemberId</td>
                    <td>Update</td>
                    <td>Delete</td>
                </tr>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["password"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["staffId"]; ?></td>
                        <td><a class="edit" href="../../sql/update.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-pencil" aria-hidden="true"> Edit</i></a></td>
                        <td><a href="../../sql/delete.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-trash" aria-hidden="true"> Delete</i></a></td>

                    </tr>
                <?php
                    $i++;
                }
                ?>
        </div>
        </table>

    <?php
    } else {
        $sql = "TRUNCATE Table profiles ";
        if (mysqli_query($con, $sql)) {

            header('Location: ../../dashboard.php');
            echo '<script type="text/javascript">
console.alert("Reset db successfully");
</script> ';
        } else {
            echo "Error deleting record: " . mysqli_error($con);
        }
    }
    ?>
</body>

</html>