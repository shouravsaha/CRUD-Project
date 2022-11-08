<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>CRUD Project</title>
</head>
<body>
    <div><h1>Admission Form</h1></div>
    <form action="form_code.php" method="POST">
        <input type="text" name="name" placeholder="Name" required><br/>
        <input type="text" name="fname" placeholder="Father Name" required><br/>
        <input type="text" name="mname" placeholder="Mother Name" required><br/>
        <input type="number" name="phone" placeholder="Phone Number" required><br/>
        <input type="email" name="email" placeholder="E-mail" required><br/>
        <input type="date" name="dob" placeholder="Date Of Birth" required><br/>
        <input class="btn" type="submit" name="submit" value="submit">
    </form>
</body>
</html>