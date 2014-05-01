<?php
$current_pass=$_POST['curr_pass'];echo $current_pass;echo "<br>";
$change_pass=$_POST['change_pass'];echo $change_pass;echo "<br>";
$con_pass=$_POST['con_pass'];echo $con_pass;echo "<br>";
$name=$_COOKIE['user'];echo $name;echo "<br>";
$con=mysqli_connect("localhost","root","","shootOutAtC");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $flag=0;
$result = mysqli_query($con,"SELECT * FROM user_details");
 while(($row = mysqli_fetch_array($result))!=0)
  {
            if($row[0]== $name && $row[1]==$current_pass)
            {
                $flag=1;
                break;
            }
  }
  if($flag==0)
  {
      echo "<script>alert('CURRENT PASSWORD DID NOT MATCHED')</script>";
      echo "<script>window.location.replace('change_pass.php');</script>";
  }
  else
  {
      if($con_pass!= $change_pass)
      {
           echo "<script>alert('PRESENT PASSWORD AND CONFIRM PASSWORD DID NOT MATCHED')</script>";
           echo "<script>window.location.replace('change_pass.php');</script>";
      }
      else
      {
          $con1=mysqli_connect("localhost","root","","shootOutAtC");
          // Check connection
          if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

         mysqli_query($con1,"update user_details set password='$con_pass' where name='$name'");

         mysqli_close($con1);
  
           echo "<script>alert('PASSWORD UPDATED SUCCESSFULLY...!!')</script>";
           echo "<script>window.location.replace('welcome_page.php');</script>";
      }
  }
mysqli_close($con);
?> 6