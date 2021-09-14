<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play Game</title>
    <style>
       
     
        #home
        {
            height: 80%;
            width: 56%;
            position: relative;
            left: 23%;
            background-color: rgba(245, 236, 222,0.5);
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            font-size: 20px;
            line-height: 15px;
        }
        input
        {
            height: 15px;
            width: 30px;
        }
        .btn{
                background-color: green;
                color: white;
                border: 1px solid green;
                height: 35px;
                width: 110px;
        }
        form{
            font-size: 18px;
        }

      
    </style>
</head>
<body>
    <?php include "header.php"?>
    <div id="home">
    <h2 style="text-align: center;">How much you know about "Gulzar".</h2>
    <div>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
        Enter Your Name to Play the game : <input style="height: 30px;width:200px" type="text" name="player" placeholder="Enter Your Name ..."  id='playerName'>
        
        <h2>Select the Appropiate option</h2>
        <h4 style="color: blue;">All Fields are mandatory !</h4>
        
        <p>Q1.) Full Name of Gulzar is...</p>
            <input id='one' type="radio" name="name" value="gulzar">Gulzar
            <input id='two' type="radio" name="name" value="khan gulzar">Khan Gulzar
            <input id='three' type="radio" name="name" value="gulzar ahmed"> Gulzar Ahmed
            <input id='four' type="radio" name="name" value="khan gulzar ahmed">Khan Gulzar Ahmed

            <p>Q2.) He is how many year old?</p>
            <input id='five' type="radio" name="age" value="22">22
            <input id='six' type="radio" name="age" value="23">23
            <input id='seven' type="radio" name="age" value="24">24
            <input id='eight' type="radio" name="age" value="25">25

            <p>Q3.) Currenlt living at ...</p>
            <input id='nine' type="radio" name="curr-live" value="mumbai">Mumbai
            <input id='ten' type="radio" name="curr-live" value="delhi">Delhi
            <input id='eleven' type="radio" name="curr-live" value="up"> UP
            <input id='twelve' type="radio" name="curr-live" value="gujrat">Gujrat

            <p>Q4.) What is his Birth PLace(Native Place)?</p>
            <input id='thirteen' type="radio" name="native" value="mumbai">Mumbai
            <input id='fourteen' type="radio" name="native" value="delhi">Delhi
            <input id='fifteen' type="radio" name="native" value="up"> UP
            <input id='sixteen' type="radio" name="native" value="gujrat">Gujrat

            <p>Q5.) Most like fast food is ..</p>
            <input id='seventeen' type="radio" name="ff" value="vada pav">Vada Pav
            <input id='eighteen' type="radio" name="ff" value="samosa">Samosa
            <input id='ninteen' type="radio" name="ff" value="chinese ff"> Chinese Fast Food
            <input id='twenty' type="radio" name="ff" value="idle-dosa">Idli and Dosa
            <br><br>
            <input type="submit" name="save" value="Submit" class="btn">
            </form>
       
        <?php 
        
      if(isset($_POST['save']))
      {
          
          $player=$_POST['player'];
          if($player!=''){
              $ans1=$_POST['name'];
              $ans2=$_POST['age'];
              $ans3=$_POST['curr-live'];
              $ans4=$_POST['native'];
              $ans5=$_POST['ff'];
              $score=0;
              if($ans1&&$ans2&&$ans3&&$ans4&&$ans5!=''){
                    if($ans1=='khan gulzar ahmed')
                    {
                        $score+=2;
                    }
                    if($ans2==24)
                    {
                        $score+=2;
                    }
                    if($ans3=='mumbai')
                    {
                        $score+=2;
                    }
                    if($ans4=='up')
                    {
                        $score+=2;
                    }
                    if($ans5=='vada pav')
                    {
                        $score+=2;
                    }
                    echo "<h3>Congradulation ".$player." Your score is ".$score."</h3>";
                    
                    $connect=mysqli_connect("localhost","root","","neog_p1") or die ("Connection Failed !");
                 
                    $sql="insert into playerdetail values('{$player}',{$score})";
                 
                    mysqli_query($connect,$sql) or die ("Query Failed !");
                    
            }
            else{
                echo "<h4 style='color:red;'>All selection is mandatory !</h4>";
            }
          }
          else{
            echo "<h4 style='color:red;'>Enter Player name to play !</h4>";
        }
      }
     
       

        ?>
    </div>

  
   
    </div>
    <?php include "footer.php"?>
</body>

</html>