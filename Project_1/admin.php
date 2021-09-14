<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:http://localhost/Neo-G/Project_1/index.php");
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
            text-align: center;
        }
        table{
            text-align: center;
            position: relative;
            left: 20%;
            border: solid green;
            width: 400px;
        }
        td
        {
            padding: 10px;
            border: 1px solid green;
        }
        th{
            padding: 10px;
            color: blue;
            background-color: greenyellow;
            border: 1px solid green;
        }
        .btn{
                background-color:green;
                color: white;
                border: 1px solid green;
                height: 35px;
                width: 110px;
                font-size: 20px;
                cursor: pointer;
        }

      
    </style>
</head>
<body>
    <?php include "header.php"?>
    <div id="home">
        <div id="funcBtn" style="text-align: right;">
        <h3 style="text-align: left; color:blueviolet;">Hi, <?php echo $_SESSION['username']?></h3>
        <form action="#" method="POST">
            <input type="submit" value="Logout" name="logout" class="btn">
        </form>
            <?php
            if(isset($_POST['logout']))
            {
                header("location:http://localhost/Neo-G/Project_1/logout.php");
            }
            
            ?>
        </div>
        <h2>Detail of players </h2>
        <?php 
        $connect=mysqli_connect("localhost","root","","neog_p1") or die("Connection Failed !");
        $sql="select * from playerdetail order by score desc";
        $query=mysqli_query($connect,$sql) or die ("Query Failed !");
       
        ?>
        <table border="3px">
            <tr>
                <th>Name</th>
                <th>Score</th>
            </tr>
         <?php
            if(mysqli_num_rows($query)>0){
                while($row=mysqli_fetch_assoc($query)){

                
            ?>
            <tr>

                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['score'];?></td>
            </tr>
<?php
                }
            }
?>
        </table>
   
   
    </div>
    <?php include "footer.php"?>
</body>
</html>
