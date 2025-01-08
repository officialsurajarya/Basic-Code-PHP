<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="get">
        Name: <input type="text" name="name" placeholder="Enter Name"><br>
        Age: <input type="number" name="age" placeholder="Enter Age"><br>
        <input type="submit" name="submit">
    </form>


    <?php
    if(isset($_GET['submit'])){
        $name = $_GET['name'];
        $age = $_GET['age'];
        echo "Hello, $name. Your are $age years old.";
    }
    ?>
</body>
</html>