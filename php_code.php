<!-- <?php include "db.php"; ?>
<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $dob = $_POST["dob"];
        
        $sql = "INSERT INTO";
        $sql = $sql."student_form(name, fname, mname, phone, email, dob)";
        $sql = $sql."VALUES('".$name."','".$fname."','".$mname."','".$phone."','".$email."','".$dob."')";
        
        
        if($con->query($sql)===TRUE){
            echo "New record is saved";
        }else{
            echo "error :".$sql."<br>".$con->error;
        }
    
    }
    

?> -->
