<?php
 include("con_db.php");
 session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <center>  <h3>leave application status</h3></center>
    <table class="table" style="background-color:whitesmoke;width:75vw;">
    <tr>
    <th>S.no</th>
    <th>subject</th>
    <th>message</th>
    <th>status</th>

    </tr>
    <?php
   
    $sno =1;
    $query = "select * from leaves where uid = $_SESSION[uid]";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        ?>
        <tr>
           <td>  <?php echo $sno; ?></td>
            <td><?php echo $row['subject']; ?></td>
            <td><?php  echo $row['message']; ?></td>
            <td><?php  echo $row['status']; ?></td>
        </tr>
        <?php
        $sno =$sno +1;
    }
    ?>
    

    </table>
    
</body>
</html>