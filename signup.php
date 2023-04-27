<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <Style>
        *{
            background-color:gray;
            padding:  0px;
            margin: 0px;
        }
        center{
            margin-top: 100px;
        }
        table{
            padding: 20px;
            border: black solid 3px;
            background-color: lightgray;
        }
        tr td {
            background-color: lightgray;
        }
        label{
            background-color: lightgray;
        }
        
    </Style>
</head>
<body>
    <center>
        <h2 Style='color: white;'>Student SignUp form</h2><br>
    <div >
        <form action="submit.php" method="post">
        <table>
            <tr>
                <td><label for="text">Name:</label></td>
                <td><input type="text" name="email" Style="background-color: lightgray;"></td>
            </tr>
            <tr>
                <td><br><label for="text">Email:</label></td>
                <td><br><input type="email" name="email" Style="background-color: lightgray;"></td>
            </tr>
            <tr>
                <td><br><label for="text">Gender</label></td>
                <td><br><input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female</td>
            </tr>
            <tr>
                <td><br><label for="text">password</label></td>
                <td><br><input type="password" name="password" Style="background-color: lightgray;"> </td>
            </tr>
            <tr >
                <td><br><label for="text">Confirm password</label></td>
                <td><br><input type="password" name="Confirm password" Style="background-color: lightgray;"></td>
            </tr>
        
            <tr> 
                <td><br><input Style="cursor: pointer; background-color: lightgray "  type="Submit" ></td>
            </tr>
        </table>
     </form>
    </div>
</center>
3

</body>
</html>