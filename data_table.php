<?php 
    session_start();
    include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <title>Data-Table</title>
</head>
<body>
    <div><h1>Student Data Table</h1></div>
    <?php if(isset($_SESSION["message"])){ ?>
        <div class="msg">
        <?php 
            echo $_SESSION["message"];
            unset($_SESSION["message"]);
        ?>
    </div>
    <?php } ?>
    <table>
        <thead>
            <th>Name</th>
            <th>Father Name</th>
            <th>Mother Name</th>
            <th>Phone Number</th>
            <th>E-mail</th>
            <th>Date Of Birth</th>
            <th class="action" colspan="3">Action</th>
        </thead>
        <tbody>
        <?php 
            $sql = "SELECT * FROM student_form";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                while($res = $result->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $res['name'];?></td>
                <td><?php echo $res['fname'];?></td>
                <td><?php echo $res['mname'];?></td>
                <td><?php echo $res['phone'];?></td>
                <td><?php echo $res['email'];?></td>
                <td><?php echo $res['dob'];?></td>  
                <td>
                    <span class="hovertext" data-hover="Back to input form page">
                        <a href="index.php">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </span>
                </td>
                <td class="action"><a href="edit.php?edit=<?php echo $res['id'];?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td class="action"><a href="delete.php?del_row=<?php echo $res['id'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
            <?php } ?>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>