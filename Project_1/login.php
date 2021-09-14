
<?php
session_start();
if(isset($_SESSION['username']))
{
    header("location:http://localhost/Neo-G/Project_1/admin.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
       
        #home
        {
            height: 80%;
            width: 56%;
            position: relative;
            left: 23%;
            background-color: rgba(245, 236, 222,0.5);
            padding: 30px;
            margin: 10px;
            border-radius: 10px;
            
        }
        form
        {
            display: grid;
            width: 200px;
            position: relative;
            left: 35%;
            font-size: 25px;
            border: 2px rgba(197, 198, 202,0.5);
            padding: 20px;
            background-color: rgba(197, 198, 202,0.5);
            border-radius: 10px;
            color: rgb(66, 181, 212);
        }
        input
        {
            height: 30px;
            border-radius: 3px;
        }
        #submit{
            height: 40px;
            background-color: lawngreen;
            border: 2px solid lawngreen;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
        }
       
    </style>
</head>
<body>
    <?php include "header.php"?>
    <div id="home">
    <h1 style="text-align: center;">Admin Login</h1>
        <form action="loginprocess.php" method="POST">
            
        Username: <input type="text" name="name" placeholder="Enter username.."><br>
        Password: <input type="password" name="password" placeholder="Enter Password.."><br>
        <input id="submit" type="submit" name="login" value="Login">

        </form>
       
       
    </div>
    <?php  include "footer.php"?>
    
</body>
</html>