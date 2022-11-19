<?php
include('config.php');

$sql="SELECT *FROM users ";
$result=mysqli_query($sql,$con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <tbody>
                    <?php 
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){

                    
                    ?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['fname']?></td>
                        <td><?php echo $row['lname']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['password']?></td>
                        <td><?php echo $row['gender']?></td>
                        <td> <a href="update.php ?id =<?php echo $row['id'];?>">Edit</a> <?php echo $row['id']?>
                            <a href="delete.php ?id =<?php echo $row['id'];?>">Delete</a> <?php echo $row['id']?></td>
                    </tr>
                    <?php }
                    }
                    ?>

                </tbody>
            </tr>
        </table>
    </div>
</body>
</html>