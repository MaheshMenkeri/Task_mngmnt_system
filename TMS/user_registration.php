<?php
    include("con_db.php");
    if(isset($_POST["Registration"]))
    {
            $query = " insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[mobile]')";
            $query_run = mysqli_query($connection,$query);
            if($query_run)
            {
                echo "<script> alert('user reg successfully....');
                window.location.href='index.php';
                </script>";
                

            }
            else{
                echo "<script> alert('Errorr....');
                window.location.href='user_registration.php';
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
    <h1>user Registration</h1>
    <div class="row">
        <div class="col-md-3 m-auto" id="registration_homepage" >
            <form action="" method="post" >

            <div class="form-group">
                    
                Name:<input type="name" name="name" id="" class="form-control" placeholder="enter name     " require>

                 </div> <br>
                
            

                <div class="form-group">

                    Email:<input type="email" name="email" id="" class="form-control" placeholder="enter email" require>

                 </div>
                 <div class="form-group">
                    password:<input type="password" name="password" id="" class="form-control" placeholder="enter password" require>

                </div>

                <div class="form-group">

                    Number:<input type="number" name="mobile" id="" class="form-control" placeholder="enter Mobile number " require>
                     </div> <br>
                     
                <div class="form-group">
                    <input type="submit" value="Register" name = "Registration" class="btn btn-warning">
                </div>


            </form><br>

           
           <a href="index.php" class="btn btn-danger"> home</a>

        </div>
       
        
    </div>
    
</body>
</html>