<?php

$name= $_POST["name"]; echo "NAME  :".$name;echo"<br>";
 $password= $_POST["password"]; echo "password  :".$password;echo"<br>";
 

 $flag=0;
 $con=mysqli_connect("localhost","root","","shootOutAtC");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM user_details");
  while(($row = mysqli_fetch_array($result))!=0)
  {
            if($row[0]==$name)
              {
                if($row[1]==$password)
                {
                 $flag=1;
                 
                 echo "<script>alert('SUCCESSFUL LOGIN')</script>";
                 setcookie("user", $name, time()+3600);
                 echo "<script>window.location.replace('welcome_page.php');</script>";//path need to go to user MENU
                  break;
                }
              }
  }
if($flag==1)
{
    
}
else
{
    echo "<script>alert('LOGIN UNSUCCESSFUL PLEASE CHECK OUT USER NAME AND PASSWORD')</script>";
   echo "<script>window.location.replace('login_page.html');</script>"; 
}
?>
