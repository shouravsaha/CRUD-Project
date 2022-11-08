<?php 
    session_start();
    include "db.php";
    if(isset($_GET["del_row"])){
        $id = $_GET["del_row"];
        if($con->query("DELETE FROM student_form WHERE id=$id")){
            header('location:data_table.php');
            $_SESSION["message"] = "Data Deleted";
        }else{
            // echo "";
        }
    }

?>