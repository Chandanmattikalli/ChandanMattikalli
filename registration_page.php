<?php
$flag=0;
$name= $_GET["name"]; echo "NAME  :".$name;echo"<br>";
 $password= $_GET["password"]; echo "password  :".$password;echo"<br>";
 $con_password= $_GET["con_password"]; echo "con_password  :".$con_password;
if($password!=$con_password)
{
     echo "<script>alert('REGUSTRATION UNSUCCESSFUL PLZ CHECK OUT THE PASSOWRD')</script>";
    echo "<script>window.location.replace('main_page.html');</script>";
    echo"PASSWORD MISMATCH";
}
 else {
    

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
                $flag=1;
                echo "<br> USER ALREADY EXIXTS PLEASE CHOOSE SOME OTHER NAME";
                 echo "<script>alert('REGISTRATION UNSCUCCESSFUL USER ALREADY EXISTS PLEASE CHOOSE OTHER NAME')</script>";
                 echo "<script>window.location.replace('main_page.html');</script>";
                break;
              }
  }
  if($flag==0)
  {
  $sql="INSERT INTO user_details (name,password,score,level)VALUES('$name','$password',0,0)";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
  echo "<br>";
  echo "<script>alert('SUCCESSFULLY REGISTERED PLZ LOGIN TO PROCEED WITH GAME')</script>";
    echo "<script>window.location.replace('login_page.html');</script>";

  }//else of flag (user already esists)
 }//else of password mismatch
?> 
