<?php
 session_start();  
include('../con_db.php');
    if(isset($_POST["task_create"]))
    {
        $query = "insert into tasks values(null,$_POST[id],'$_POST[description]','$_POST[start_date]','$_POST[end_date]','not strtd')";
        $query_run = mysqli_query($connection,$query);
        if($query_run)
        {
            echo "<script>alert('task created successfully');
            window.location.href='admin_dashboard.php';
            </script>";
        }
        else{
            echo "<script>alert('Error .... plz try again...');
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
    <!-- jquery code -->
    <script type="text/javascript">                                                     
        $(document).ready(function(){
            $("#create_task").click(function(){
                $("#right_sidebar").load("create_task.php");
            });
        });

        $(document).ready(function(){
            $("#manage_task").click(function(){
                $("#right_sidebar").load("manage_task.php");
            });
        });

        $(document).ready(function(){
            $("#view_leaves").click(function(){
                $("#right_sidebar").load("view_leaves.php");
            })
        })
      </script>


</head>
<body>
    
 
    <!-- header code starts here -->
    <div class="row" id="header">
        <div class="col-md-12">
            <div class="col-md-4" style="display:inline-block;">
            <h3>Task management system</h3>
            </div>
           <div class="col-md-6" style="display:inline-block; text-align:right">
                <b>Email:</b> <?php  echo $_SESSION['email'] ;  ?>
                <span style="padding-left:10px"><b>Name: </b>  <?php echo $_SESSION['name']; ?></span>

            </div>
        </div>

        <div class="row">
            <div class="col-md-2" id="left_sidebar" style="color:white"  >
                <table class="table" >
                    <tr>
                        <td style="text-align=center;">
                            <a href="admin_dashboard.php" id="logout_link"  id="log_link"> Dashboard</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align=center;">
                            <a  class="link" id="create_task" type="button"> create task</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align=center;">
                            <a class="link" id="manage_task" type="button"> manage task</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align=center;">
                            <a class="link" id="view_leaves" type="button"> leave applications</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align=center;">
                            <a href="../logout.php" type="button" id="logout_link"> Logout </a>
                        </td>
                    </tr>

                </table>

            </div>
            <div class="col-md-10" id="right_sidebar">
                <h4>Instructions for admin</h4>
                <ul style="line-height:2em; font-size:1.2em; list-style-type:none;">
                    <li>
                        1. All the employee should come to meeting.

                    </li>
                    <li>
                        2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, quibusdam.
                    </li>
                    <li>
                        3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, quibusdam.
                    </li>
                    <li>
                        4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, quibusdam.
                    </li>
                </ul>

            </div>

        </div>

    </div>
    
</body>
</html>