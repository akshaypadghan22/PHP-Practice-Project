<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            background-color: azure;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
        <?php
            
        ?>


    <center>

        <h1>Megabit Campus Drive</h1>
        <br><br>
        <form  action="submit.php" method="post">
            
            <fieldset style="width: 280px;">
                <legend>Student Registration Form</legend>
            
            <table>
            
            <tr>
                <td><br><label for="text">First name</label></td>
                <td><br><input type="text" placeholder="First name"></td>

            </tr>
            <tr>
                <td><br><label for="text">Last name</label></td>
                <td><br><input type="text" placeholder="Last name"></td>
            </tr>
            <tr>
                <td><br><label for="text">Gender</label></td>
                <td><br><input type="radio" name="gender" value="male" >Male
                    <input type="radio" name="gender" value="female">Female</td>
            </tr>
            <tr>
                <td><br><label for="text">Date of Birth</label></td>
                <td><br><input type="date"></td>
            </tr>
            <tr>
                <td><br><label for="text">Choose Branch</label></td>
                <td><br><select name="Branch" id="branch">
                    <option value="CSE" >CSE</option>
                    <option value="Mech">Mech</option>
                    <option value="Civil">Civil</option>
                    <option value="CSE">EXTC</option>
                    <option value="CSE">IT</option>
                </select></td>
            </tr>
            <tr>
                <td><br><label for="text">College name</label></td>
                <td><br><input type="text" placeholder="Enter college name"></td>
            </tr>

            <tr>
                <td><br><label for="text">Percentage</label></td>
                <td><br><input type="text" placeholder="%"></td>
            </tr>
        </table>
        <br><br>  
        <div >
         <a href="login.php" style="text-decoration: underline; background: none; color: black; margin-right: 90px;">Already account</a>
         <input  type="button" name="Submit" value="Submit" style="cursor: pointer; background-color: lightblue;">
         </div>

        
    </form>
   
</fieldset>

</center>
</body>
</html>