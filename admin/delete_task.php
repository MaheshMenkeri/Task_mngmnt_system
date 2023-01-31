<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>delete task </h3>
    

    
</body>
</html>
<?php
    include("../con_db.php");
    $query = "delete from tasks where tid = $_GET[id]";
    $query_run = mysqli_query($connection  ,$query);
    if($query_run)
    {
        echo "<script>alert('task deleted successfully');
        window.location.href='admin_dashboard.php';
        </script>";
    }
    else{
        echo "<script>alert('errpr...');
        window.location.href='admin_dashboard.php';
        </script>";
    }























