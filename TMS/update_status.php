<?php
 include('con_db.php'); 
    if(isset($_POST['update_status']))   
    {
        $query = "update tasks set status= '$_POST[status]' where tid = $_GET[id] ";
        $query_run = mysqli_query($connection,$query);
        if($query_run)
        {
            echo "<script>alert('status updated successfully');
            window.location.href='user_dashboard.php';
            </script>";
        }
        else{
            echo "<script>alert('Error... try again');
            window.location.href='user_dashboard.php';
            </script>";
        }
    }
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

    <!-- header code start -->
    <div class="row" id="header">
        <div class="col-md-12">
        <h3>edit task</h3>

        </div>
    </div>
    <div class="row">
        <div class="col-md-4 m-auto" style="color:white;">
            <h3 style="color:white;">Edit the task</h3><br>
            <?php
                $query = "select * from tasks where tid =" .$_GET['id'];            
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run))
                {
                    ?>
           
            <form action="" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="" required >
                </div>
                <div class="form-group">
                   <select name="status" id="" class="form-control">
                    <option >Select -</option>
                    <option >In-progress</option>
                    <option>Complete</option>
                   </select>

                   
                </div>
                <input type="submit" value="update" class="btn btn-warning"  name="update_status">


            </form>
            <?php
                }
                ?>

        </div>
    </div>
   

    
</body>
</html>