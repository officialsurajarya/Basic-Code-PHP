<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Table</title>
</head>
<body>
    <form action="">
        <p><b>Enter a Number That You Want To Find Square Root</b></p>
        <input type="number" name="num" id="">
        <br><br>
        <input type="submit" value="Generate Factorial"> 
        <br><br>
    </form>

    <?php
        $num=$_GET['num'];
        if ($num % 5 == 0){
            echo"It is Divisible by 5";
        }
        else{
            echo"It is not divisible by 5";
        }
    ?>
</body>
</html>