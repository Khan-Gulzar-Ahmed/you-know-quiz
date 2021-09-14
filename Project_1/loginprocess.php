<?php
$username=$_POST['name'];
$pass=$_POST['password'];


if($username||$pass!='')
{
    $connect=mysqli_connect("localhost","root","","neog_p1") or die("Connection Failed !");
    $sql="select username,password from login";
    $query=mysqli_query($connect,$sql) or die ("Query Failed !");
    if(mysqli_num_rows($query)>0){
    while($row=mysqli_fetch_assoc($query))
    {
        if($row['username']==$username&&$row['password']==$pass){
        session_start();
        $_SESSION['username']=$row['username'];
        header("location:http://localhost/Neo-G/Project_1/admin.php");
        }
        else{
          
            header("location:http://localhost/Neo-G/Project_1/login.php");
            
        }
    }
    }
    else{
        
        header("location:http://localhost/Neo-G/Project_1/login.php");
        
    }

    
}
else{
    
    header("location:http://localhost/Neo-G/Project_1/login.php");
    
}

?>