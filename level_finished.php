<?php
$name=$_COOKIE['user'];
$level=$_COOKIE['level'];
$score=$_COOKIE['score'];
if($score<20)
{
    echo "<script>alert('YOUR HEALTH IS TOO LESS TO GO TO NEXT LEVEL..... YOUR HEALTH NEED TO BE ATLEAST 60%(score more than 20) ....... PLEASE TRY AGAIN....')</script>";
    echo "<script>window.location.replace('welcome_page.php');</script>";
    $con=mysqli_connect("localhost","root","","shootOutAtC");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
    }
    mysqli_query($con,"update user_details set score='$score' where name='$name'");
}
else
{
    echo "<script>alert('CONGRATS YOU HAVE ACTIVATED NEW LEVEL....!!!!')</script>";
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
                $le=$row[3];
                $le+=1;
                break;
              }
    }
    mysqli_query($con,"update user_details set score='$score' where name='$name'");
    mysqli_query($con,"update user_details set level='$le' where name='$name'");
}
?>