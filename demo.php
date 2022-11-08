<?php 
    include "db.php";
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        
        $sql = "INSERT INTO users(name, fname, mname)VALUES('$name','$fname', '$mname')";
        $store = $con->query($sql);
        if($store === true){
        
            echo "data saved";
        }else{
            echo "data not saved".$store->connect_error;
        } 
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>CRUD Project</title>
</head>
<body>
    <div><h1>Admission Form</h1></div>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Name" required><br/>
        <input type="text" name="fname" placeholder="Father Name" required><br/>
        <input type="text" name="mname" placeholder="Mother Name" required><br/>
        
        <input class="btn" type="submit" name="submit" value="submit">
    </form>
    
    <table>
        <thead>
            <th>Name</th>
            <th>Father Name</th>
            <th>Mother Name</th>
        </thead>
        <tbody>
            <?php 
                $sql = "SELECT * FROM users";
                $storage = $con->query($sql);
                if($storage->num_rows > 0){
                    $i = 0;
                    while($result = $storage->fetch_assoc()){ ?>
                        <tr>
                        <td><?php echo $result['name']; ?></td>
                        <td><?php echo $result['fname']; ?></td>
                        <td><?php echo $result['mname']; ?></td>
                        </tr>
                   <?php 
                       $i++;  }     
                }
            ?>
        </tbody>
    </table>
</body>
</html>