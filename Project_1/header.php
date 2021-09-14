<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<style>
     *
        {
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        #container{
            background-color: rgb(55, 231, 23);
            width: 60%;
            height: 40%;
            position: relative;
            left: 23%;
            border-radius: 10px;
           
        }
        #upheader
        {
            display: flex;
            justify-content: space-between;
            border-bottom: 2px solid white;
        }
        img
        {
            height: 150px;
            width: 150px;
            border: 2px solid white;
            border-radius: 50%;
            margin: 10px;
        }
        #lowerheader
        {
            display: inline-block;
            height: 35px;
            width: 100%;
            margin: 0px;
            font-size: 25px;
            
            
        }
        a{
            text-decoration: none;
           padding-left: 10px;
           padding-right: 10px;
            color: white;
            transition: 0.5s;
            margin: 0px;
        }
        #admin
        {
            display: inline-block;
            width: 65%;
            text-align:right;
        }
        
      
</style>
<body>
        <div id="container">
            <div id="upheader">
            <img src="images/logo.jpg" alt="Logo Images" id="logo">
            <h1 style="font-size: 50px; margin:10px;color:rgb(83, 107, 235);">Project 1 <br> for Neo-G</h1>
            </div>
            <div id="lowerheader">
                <a href="index.php">Home</a>
                <a href="game.php">Start Game</a>
                <span id="admin"><a href="login.php">Admin Login</a></span>
            </div>
            
        </div>
</body>
</html>