<?php 
    include "db.php";
?>
<?php
    if(isset($_GET["edit"])){
        $id = $_GET["edit"];
        $sql = "SELECT * FROM student_form WHERE id=$id";
        $result = $con->query($sql);
        $student= $result->fetch_assoc();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
        <input type="text" name="name" placeholder="Name" value="<?php echo $student['name'];?>" required><br/>
        <input type="text" name="fname" placeholder="Father Name" value="<?php echo $student['fname'];?>"  required><br/>
        <input type="text" name="mname" placeholder="Mother Name" value="<?php echo $student['mname'];?>"  required><br/>
        <input type="number" name="phone" placeholder="Phone Number" value="<?php echo $student['phone'];?>"  required><br/>
        <input type="email" name="email" placeholder="E-mail" value="<?php echo $student['email'];?>"  required><br/>
        <input type="date" name="dob" placeholder="Date Of Birth" value="<?php echo $student['dob'];?>" required><br/>
        <input class="btn" type="submit" name="submit" value="Update">
    </form>
</body>
</html>