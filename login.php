<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="index.css">

    <Style>
        *{
            background-color:gray;
            padding:  0px;
            margin: 0px;
            font-family: 'Poppins', sans-serif;
        }
        center{
            margin-top: 100px;
        }
        form{
            background-color: lightgray;
            width: 300px;
            height: 200px;
        }
        table{
            padding: 20px;
            
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
        <h2 Style='color: white;'>Student Login</h2><br>
    <div >
        <form action="submit.php" method="post">
         <table>
            <tr>
                <td><br><label for="text">Email</label></td>
                <td><br><input type="email" name="email" Style="background-color: lightgray; " placeholder="Email"></td>
            </tr>
            <tr>
                <td><br><label for="text">Password</label></td>
                <td><br><input type="password" name="password" Style="background-color: lightgray;" placeholder="Password"> </td>
            </tr>
         </table><br>
         <div style="background-color: lightgray; position:static ;">
         <a href="Registration.php" style="text-decoration: underline; background-color: lightgray; color: black; margin-right: 100px;">New Account</a>
         <input Style="cursor: pointer; background-color: lightgray; "   type="Submit" ><br>
         </div>
         
         
     </form>
    </div>
</center>
3

</body>
</html>