<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="number" name="num" id="">
        <br><br>
        <input type="submit" value="Check Number">
    </form>

    <?php
        $num=$_GET['num'];
        
        if($num%2 == 0){
            echo"Even Number";
        }  
        else {
            echo "Odd Number";
        }
    ?>
</body>
</html>