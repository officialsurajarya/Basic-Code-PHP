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
        $num=$_GET['num']
            if ($num <= 100 && $num >= 95 ){
                echo "Grade O";
            }
            else if ($num <= 94 && $num >= 90 ){
                echo "Grade A";
            }
            else if($num <=89 && $num >= 80 ){
                echo "Grade A";
            }
            else if($num <=79 && $num >= 70 ){
                echo "Grade B";
            }
            else if($num <=69 && $num >= 60 ){
                echo "Grade B";
            }
            else if($num <=59 && $num >= 50 ){
                echo "Grade C";
            }
            else if($num <=49 && $num >= 40 ){
                echo "Grade C";
            }
            else if($num <=39 && $num >= 0 ){
                echo "Grade D";
            }
    ?>
</body>
</html>