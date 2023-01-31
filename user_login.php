<?php
    session_start();
    include("con_db.php");
    if(isset($_POST["login"]))
    {
        $query = "select uid,name,email,password  from users where email = '$_POST[email]'   AND  password =  '$_POST[password]'";
        $query_run = mysqli_query($connection, $query);
        
        if(mysqli_num_rows($query_run))
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
                
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['uid'] = $row['uid'];
            }

            echo "<script> window.location.href='user_dashboard.php';
            </script>";

        }
        else
        {
            echo "<script>alert('email or password incorrect');
            window.location.href='user_login.php';
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
    <h1></h1>
    <div class="row">
        <div class="col-md-3 m-auto" id="login_homepage" >
            <center><h3 style="background-color:#5A8F7B; padding:5px;width:15vw;">User login</h3></center>
            <form action="" method="post" >
                <div class="form-group">
                    Email:<input type="email" name="email" id="" class="form-control" placeholder="enter email" require>

                 </div>
                 <div class="form-group">
                    password:<input type="password" name="password" id="" class="form-control" placeholder="enter password" require>

                </div> <br>
                <div class="form-group">
                    <input type="submit" value="Login"  name="login" class="btn btn-warning">
                </div>


            </form><br>

           
           <a href="index.php" class="btn btn-danger" style="text-alignment:left;"> Go To Home</a></center>
          

        </div>
       
        
    </div>
    
</body>
</html>