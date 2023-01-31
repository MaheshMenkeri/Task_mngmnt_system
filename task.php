<?php
session_start();
include("con_db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/styl.css">

</head>
<body>
    <center><h3>Your tasks </h3></center><br>
    <table class="table" style="background-color:whitesmoke;width:75vw;">
        <tr>
            <th>S.NO</th>
            <th>Task ID </th>
            <th>Description</th>
            <th>Start_date</th>
            <th>End_date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php
        include("con_db.php");
        $connection1 = mysqli_connect("localhost","root","","tms");

        $query = "select * from tasks ";
        
        $query_run = mysqli_query($connection1, $query);

        $sno=1;
        
    
        while($row1 = mysqli_fetch_assoc($query_run))
        {
            ?> 

<tr>
                <td>
                    <?php echo $sno; ?>
                </td>
                <td><?php echo $row1['tid'] ; ?></td>
                <td><?php echo $row1['description'] ; ?></td>
                <td><?php echo $row1['start_date'] ; ?></td>
                <td><?php echo $row1['end_date'] ; ?></td>
                <td><?php echo $row1['status'] ; ?></td>

                <td><a href="update_status.php?id=<?php echo $row1['tid']; ?>">update</a></td>

            </tr>

            <?php
            $sno = $sno +1;
        }
     
        ?>
    


    </table>
    
</body>
</html>