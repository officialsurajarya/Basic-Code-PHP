<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body{
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            scale: 140%;
        }
    </style>
</head>
<body>
    <h1>Registration Page</h1>
    <table style="background-color: greenyellow;" border="5px" cellpadding="5" cellspacing="0">
        <form>
            <tr>
                <th><label for="name">Full Name</label></th>
                <td><input type="text" value="" id="name" placeholder="Enter Your name"></td>
            </tr>
            <tr>
                <th>DOB:</th>
                <td><input type="date"></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>
                    <label for="male">
                        <input type="radio"  name="Gender" id="male">Male 
                    </label>
                    <label for="female">
                        <input type="radio" name="Gender" id="female">Female
                    </label>
                </td>
            </tr>
            <tr>
                <th>Course:</th>
                <td>
                    <select name="Course" >
                        <option selected>--select option--</option>
                        <option>Diploma</option>
                        <option>B.Tech</option>
                        <option>M.Tech</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Branch</th>
                <td>
                    <select>
                        <option selected>--select option--</option>
                        <option>CSE</option>
                        <option>EE</option>
                        <option>CE</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th colspan="2" style="color: red;">Contact Info</th>
            </tr>
            <tr>
                <th>Email ID: </th>
                <td><input type="email" placeholder="Email Address" required></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td><input type="number" placeholder="Ph. Number"></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><textarea name="text" placeholder="Address"></textarea></td>
            </tr>
        </table>
        <div style="margin-top: 10px; text-align: center;">
            <input type="reset" style="margin-right: 30px; width: 80px; background-color: greenyellow;">
            <input type="submit" style="width:100px; background-color: greenyellow;"> 
        </div>
        </form>  
</body>
</html>