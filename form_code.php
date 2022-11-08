<?php 
    session_start();
    include "db.php";
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $dob = $_POST["dob"];
        
        $sql = "INSERT INTO student_form (name, fname, mname, phone, email, dob)VALUES('$name', '$fname', '$mname', '$phone', '$email', '$dob')";
        
        if($con->query($sql)===TRUE){
            
            $_SESSION["message"] = "Data Saved";
            header('location:data_table.php');
        }else{
            echo "error :".$sql."<br>".$con->error;
        }
    }
?>