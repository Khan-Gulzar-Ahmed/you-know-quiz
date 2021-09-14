

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
       
        #ownerImage{
            height: 200px;
            width: 200px;
            border: 2px solid white;
            border-radius: 50%;
            opacity: 0.8;
        }
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
        #para{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            line-height: 30px;
            font-size: 20px;
            text-align: justify;
        }
    </style>
</head>
<body>
    <?php include "header.php"?>
    <div id="home">
    <img src="images/owner.png" alt="Project Owner Image" id="ownerImage">
    <p id="para">
        Hello Firends,<br>
        &nbsp;&nbsp;&nbsp;&nbsp;
        I am Khan Gulzar Ahmed born at UP on 26<sup>th</sup>,January 1997.I am currenlty leaving at Mumbai after my birth. My aim to work as IT professional with my team and friends. Because of I am leaving in Mumbai after birth like fast foods of Mumbai very much like Vada pav and all.This project is for submittion of Neo-G camp Level one selection hope they will give me a chance to make my future and help me to achieve there and mine gaols as well.I am Graduated in BSc IT from Mumbai Unversity at SPDT college JB Nagar. <br> 
        Thanking you all. 
    </p>
    </div>
    <?php include "footer.php"?>
</body>
</html>