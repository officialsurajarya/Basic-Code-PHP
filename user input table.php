<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Table</title>
</head>
<body>
    <form action="">
        <p><b>Enter a Number That You Want To print you Table</b></p>
        <input type="number" name="num" id="">
        <br><br>
        <input type="submit" value="Create Table"> 
        <br><br>
    </form>

    <?php
        $num=$_GET['num'];
        
        $a=1;
        while ($a<=10) {   
        echo "$num * ". "$a = ". $num*$a."<br>";
        $a++;
        }
        
    ?>
</body>
</html>