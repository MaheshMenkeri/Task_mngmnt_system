<?php
 include('../con_db.php'); 
    if(isset($_POST['edit_task']))   
    {
        $query = "update tasks set uid= $_POST[id],description = '$_POST[description]' ,start_date = '$_POST[start_date]' where tid = $_GET[id]";
        $query_run = mysqli_query($connection,$query);
        if($query_run)
        {
            echo "<script>alert('task updated successfully');
            window.location.href='admin_dashboard.php';
            </script>";
        }
        else{
            echo "<script>alert('Error... try again');
            window.location.href='admin_dashboard.php';
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
    
    <link rel="stylesheet" href="../css/styl.css">
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
                    <label for="">select user:</label>

                    <select name="id" id="" class="form-control" required>
                        <option value="">-selct-</option>
                        <?php
                         
                          $query1  = "select uid,name from users";
                          $query_run1 = mysqli_query($connection,$query1);

                          if(mysqli_num_rows($query_run1))
                          {

                            while($row1 = mysqli_fetch_assoc($query_run1))
                            {
                                ?>
                                <option value="<?php echo $row1['uid']; ?>">
                                    <?php
                                    echo $row1['name'];

                                    ?>
                                </option>
                                <?php
                            }
 
                          }

                          
                         
                                                                

                        ?>
                    </select>

                </div>
                <div class="form-group">
                <label for="">Description</label>
                    <textarea class="form-control" rows="3" cols="50" name="description"  id="" cols="30" rows="10" required> <?php  echo $row['description'] ;?></textarea>
                </div>
                
                <div class="form-group">
                    Strart date:
                    <input type="date" name="start_date" id="" class="form-control" 
                  
                     value="<?php echo $row['start_date']; ?>">

                </div>

                <div class="form-group">
                    end date:
                    <input type="date" name="end_date" id="" class="form-control"  value="<?php echo $row['start_date']; ?>">

                </div>

                <input type="submit" value="update" class="btn btn-warning"  name="edit_task">


            </form>
            <?php
                }
                ?>

        </div>
    </div>
   

    
</body>
</html>