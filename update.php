<?php 
    session_start();
    include "db.php";
    if(isset($_POST["submit"])){
        $id = $_POST["id"];
        $name = $_POST["name"];
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $dob = $_POST["dob"];
        
        $sql = "UPDATE student_form SET name = '$name', fname = '$fname', mname = '$mname', phone = '$phone', email = '$email', dob = '$dob' WHERE id = $id";
        if($con->query($sql)){
            session_start();
            $_SESSION["msg"] = "Update Successfully";
            header('location:data_table.php');
            $_SESSION["message"] = "Data Updated";
        }
    }    
    
    
    
    
    
?>