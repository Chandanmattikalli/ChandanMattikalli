<?php
$name=$_COOKIE["user"];
echo"<table align='center'>";
echo"<tr>";           
         echo"<td><h1 class='two'>WELCOME  $name</h1></td></tr>";
         echo"<tr> <td><h1 class='two'></h1></td>";       
echo"</tr>";
echo"</table>";
?>
 
 <style>
      body{
            
            background-image:url("./anim1.gif");
            
            background-size: 60%;
            overflow: hidden;
        }
     #keyboard
        {
            color: blue;
            border:2px solid #a1a1a1;
            padding:10px 90px; 
            width:400px;
            border-radius:25px;
            -moz-border-radius:50px; /* Old Firefox */
            box-shadow: 0px 0px 5px 5px;
            background: linear-gradient(red,brown);
            position: absolute;
            left:50px;
            top:400px;
        }
        #logout
        {
            color: blue;
            border:2px solid #a1a1a1;
            padding:10px 90px; 
            width:400px;
            border-radius:25px;
            -moz-border-radius:50px; /* Old Firefox */
            box-shadow: 0px 0px 5px 5px;
            background: linear-gradient(red,brown);
            position: absolute;
            left:50px;
            top:550px;
        }
        #password
        {
            color: blue;
            border:2px solid #a1a1a1;
            padding:10px 90px; 
            width:400px;
            border-radius:25px;
            -moz-border-radius:50px; /* Old Firefox */
            box-shadow: 0px 0px 5px 5px;
            background: linear-gradient(red,brown);
            position: absolute;
            left:50px;
            top:470px;
        }
        
        h1.two{
            font-size: 50px;
        }
        h1
        {
            font-size: 20px;
            color:white;
        }
        div.one
        {
            color: blue;
            border:2px solid #a1a1a1;
            padding:10px 90px; 
            width:275px;
            border-radius:25px;
            -moz-border-radius:50px; /* Old Firefox */
            box-shadow: 0px 0px 5px 5px;
            background: linear-gradient(red,brown);
            position: absolute;
            left:50px;
            top:180px;
        }
         div.two
        {
            color: blue;
            border:2px solid #a1a1a1;
            padding:10px 90px; 
            width:275px;
            border-radius:25px;
            -moz-border-radius:50px; /* Old Firefox */
            box-shadow: 0px 0px 5px 5px;
            background: linear-gradient(red,brown);
            position: absolute;
            left:550px;
            top:180px;
            
            
        }
        div.img1
        {
            position: absolute;
            left:10px;
            top:50px;
            -moz-animation:leftgun 1s;
               animation: leftgun 1s;
               -webkit-animation:left 1s; 
               
               -moz-animation-iteration-count: infinite;
               animation-iteration-count: infinite;
               -webkit-animation-iteration-count: infinite;
        }
        div.img2
        {
            position: absolute;
            left:1200px;
            top:50px;
            
               -moz-animation:rightgun 1s;
               animation: rightgun 1s;
               -webkit-animation:right 1s; 
               
               -moz-animation-iteration-count: infinite;
               animation-iteration-count: infinite;
               -webkit-animation-iteration-count: infinite;
        }
        div.bull1
        {
            position: absolute;
            left:140px;
            top:70px;
            -moz-animation:leftbull 1s;
               animation: leftbull 1s;
               -webkit-animation: leftbull 1s; 
               
               -moz-animation-iteration-count: infinite;
               animation-iteration-count: infinite;
               -webkit-animation-iteration-count: infinite;
        }
        
         div.bull2
        {
            position: absolute;
            left:1200px;
            top:70px;
            -moz-animation:rightbull 1s;
             animation: rightbull 1s;
            -webkit-animation: rightbull 1s; 
            -moz-animation-iteration-count: infinite;
             animation-iteration-count: infinite;
            -webkit-animation-iteration-count: infinite;
        }
        
         #user
        {
            
            border-color: blue;
            border-bottom-width: 5px;
          height: 50px;
          width:460px;
          border-radius:25px;
          -moz-border-radius:25px;
          background:red;
           position: absolute;
            left:50px;
            top:410px;
        }
        #start
        {
            border-color: blue;
            border-bottom-width: 5px;
          height: 50px;
          width:460px;
          border-radius:25px;
          -moz-border-radius:25px;
          background:red;
           position: absolute;
            left:10px;
            top:225px;
        }
       
        button:hover
        {
            
            -moz-animation:myfirst 5s;
                animation: myfirst 5s;
               -webkit-animation: myfirst 5s;
        }
@keyframes myfirst /* Firefox */
{
from{        box-shadow: 10px 10px 5px blue;            }
to{        box-shadow: 10px 10px 5px black;            }
}
 
@keyframes leftbull /* Firefox */
{
  50%   {left:1320px;}
  100%   {left:1320px;}
}   
@keyframes rightbull /* Firefox */
{
  50%   {left:-1000px;}
  100%   {left:-1000px;}
}   
@keyframes rightgun /* Firefox */
{
  20%   {left:1150px;}
100%   {left:1150px;}
}
@keyframes leftgun /* Firefox */
{
  20%   {left:60px;}
  100%   {left:60px;}
}
        </style>
        
           
    <body bgcolor="black">
        <button id='password'  onclick="pass();">CLICK HERE TO CHANGE PASSWORD</button>
        <script>
          function pass()
         {
              alert("pass");
              window.location="change_pass.php";
          }
       </script>
       <button id='logout' onclick="logout();">LOG OUT</button>
       <script>
          function logout()
         {
         alert("THANK YOU FOR PLAYING THE GAME...!!!!");
              window.location="logout.php";
          }
       </script>
        <button id='keyboard' onclick="contorller();">CONTROLS</button>
       <script>
          function contorller()
         {
             window.location="controller.html";
         }
       </script>  
         <div class="img1" id="left_img"><img src="sda1.jpg" height="120"></div>
        <div class="bull1" id="left_bull"><img src="bullet.jpg" width="15" height="10"></div>
        <div class="img2" id="right_gun"><img src="sdf.jpg" height="120"></div>
        <div class="bull2" id="right_bull"><img src="bullet.jpg" width="15" height="10"></div>
        
        
        <form action="level_selector.php" method="POST">
            <?php
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
                break;
               }
             }
            echo "<div class='one'>";
            echo "<h1>YOUR DETAILS</h1>";
            echo "<h1>NAME          :$row[0]</h1>";
            echo "<h1>YOUR TOP    :$row[2]</h1>";
            echo "<h1>LEVEL REACHED :$row[3]</h1>";
           echo "</div>";
            echo "<div class='two'>";
     echo "<h1>LEVEL SELECTOR</h1>";
      for($i=0;$i<$row[3];$i++)
 {
     $temp=$i+1;
     echo "<input type='radio' id='level' name='level' value='$temp' >LEVEL$temp";
     echo "<br>";
 }
 if($row[3]==0)
 {
     echo "<input type='radio' id='level' name='level' value='1' >LEVEL 1";
     echo "<br>";
 }
 
 ?>
          <input type='submit' id='start' value="start">
        </form>
        
    </body>
</html>

 