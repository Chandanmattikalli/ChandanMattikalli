<?php
$level="d";
if(isset($_POST['level']))
{
     $level=$_POST['level'] ; 
     echo "LEVEL :".$level;
      echo "<script>alert('PRESS OK TO START GAME.  AS SOON AS U PRESS OK TIMER WILL START')</script>";
     if($level==1)
     {
        
         echo "<script>window.location.replace('level1.php');</script>";
         
     }
     if($level==2)
     {
         echo "<script>window.location.replace('level2.php');</script>";
     }
     if($level==3)
     {
         
     }
     if($level==4)
     {
         
     }
}
else
{
echo "retriving level value failed";
echo "<script>alert('PLEASE SELECT A LEVEL')</script>";
echo "<script>window.location.replace('welcome_page.php');</script>";
}
?>
