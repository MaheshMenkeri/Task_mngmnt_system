<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>create task here</h2>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">select user:</label>

                    <select name="id" id="" class="form-control">
                        <option value="">-selct-</option>
                        <?php
                          include('../con_db.php');
                          $query  = "select uid,name from users";
                          $query_run = mysqli_query($connection,$query);

                          if(mysqli_num_rows($query_run))
                          {

                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                ?>
                                <option value="<?php echo $row['uid']; ?>">
                                    <?php
                                    echo $row['name'];

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
                    <textarea class="form-control" rows="3" cols="50" name="description" placeholder="mention task" id="" cols="30" rows="10"></textarea>
                </div>
                
                <div class="form-group">
                    Strart date:
                    <input type="date" name="start_date" id="" class="form-control">

                </div>

                <div class="form-group">
                    end date:
                    <input type="date" name="end_date" id="" class="form-control">

                </div>
                <input type="submit" value="Create" class="btn btn-warning"  name="task_create">


            </form>
        </div>
    </div>
    
</body>
</html>