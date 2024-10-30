<?php 
include("db_connect.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.css">
    <title>Invitee</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Invitee</h1>
        </header>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Mobile Number</th>
                <th>Option</th>
                <th>Reg_time</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql="SELECT * FROM details";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td><?php echo $row["Id"];?></td>
                    <td><?php echo $row["Name"];?></td>
                    <td><?php echo $row["Email"];?></td>
                    <td><?php echo $row["Address"];?></td>
                    <td><?php echo $row["number"];?></td>
                    <td><?php echo $row["option"];?></td>
                    <td><?php echo $row["Reg_time"];?></td>
                </tr>


            <?php    
            }
            ?>
        </tbody>
    </table>
</body>
</html>