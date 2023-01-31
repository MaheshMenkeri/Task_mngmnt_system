<?php
    include("../con_db.php");
    $query = "update leaves set status = 'Approved' where lid = $_GET[id]";
    $query_run = musqli_query($connection , $query);

    if($query_run)
    {
        echo "<script> aler('leave status  changed successfully');
        window.location.href('admin_dashboard.php');
        <script>";
    }
    else{
        echo "<script> aler('Error pls try again....');
        window.location.href('admin_dashboard.php');
        script>";

    }


?>