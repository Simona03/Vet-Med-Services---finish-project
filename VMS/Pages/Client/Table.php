<?php
include_once '../../sql/select.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/table.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<header>
    <button onclick="window.location='../home.php'"><i class="fa fa-arrow-left" aria-hidden="true"> Back</i></button>
    <button onclick="window.location='../../sql/export.php'"><i class="fa fa-download" aria-hidden="true"> Export</i></button>


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
                    <td>Update</td>
                    <td>Delete</td>
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
        $sql = "TRUNCATE Table bookhours ";
        if (mysqli_query($con, $sql)) {

            header('Location: ../home.php');
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