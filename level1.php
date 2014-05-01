
<html>
    <head>
    <title>GAME</title>
    <style>
        div.scoreimg
        {
            position: absolute;
            left :1070px;
            top :30px;
        }
        body{
            
            background-image:url("./bg.gif");
            background-size: 60%;
            overflow: hidden;
        }
        *{
            color:white;
        }
        h2{
            color :white;
        }
        hr{
            color:white;
            height: 5px;
        }
        input
        {
            color:black;
        }
        table.one
        {
            position: absolute;
            bottom:10px;
            
            font-size: 30px;
            border-right: aqua;
        }
        table.two
        {
            left: 630px;
            position: absolute;
            bottom:90px;
            font-size: 40px;
            border-bottom: 0px;
            border-right: aqua;
        }
        div
        {
            rotation:  89deg;
        }
        div.ans
        {
            position: absolute;
            bottom:150px;
            left: 670px;
            width :500px;
            height :10px;
        }
        div.opt
        {
            background-color: red;
            position: absolute;
            bottom:70px;
            left: 650px;
            height: 20px;
            
        }
    </style>
    <script>
opt_div_value=650;
opt_div_control=0;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","level1.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML; 

x=xmlDoc.getElementsByTagName("LEVEL1");
i=0;

quesion_cnt=0;
var solved_q_no = new Array();
array_val=0;
QUE1="";
ANS1="";
POS1="";

function question()
{
    if(quesion_cnt>9)
        {
            alert("level 1 completed");
            if(score===0)
                {
                   <?php setcookie("score", "0", time()+3600); ?>
                }
                if(score===10)
                {
                    <?php setcookie("score", "10", time()+3600); ?>
                }
                if(score===20)
                {
                    <?php setcookie("score", "20", time()+3600); ?>
                }
                if(score===30)
                {
                 <?php setcookie("score", "30", time()+3600); ?>   
                }
                if(score===40)
                {
                 <?php setcookie("score", "40", time()+3600); ?>   
                }
                if(score===50)
                {
                 <?php setcookie("score", "50", time()+3600); ?>   
                }
                if(score===60)
                {
                 <?php setcookie("score", "60", time()+3600); ?>   
                }
                if(score===70)
                {
                 <?php setcookie("score", "70", time()+3600); ?>   
                }
                if(score===80)
                {
                 <?php setcookie("score", "80", time()+3600); ?>   
                }
                if(score===90)
                {
                 <?php setcookie("score", "90", time()+3600); ?>   
                }
                if(score===100)
                {
                 <?php setcookie("score", "100", time()+3600); ?>   
                }
                if(score===-10)
                {
                 <?php setcookie("score", "-10", time()+3600); ?>   
                }
                if(score===-20)
                {
                 <?php setcookie("score", "-20", time()+3600); ?>   
                }
                if(score===-30)
                {
                 <?php setcookie("score", "-30", time()+3600); ?>   
                }
                if(score===-40)
                {
                 <?php setcookie("score", "-40", time()+3600); ?>   
                }
                if(score===-50)
                {
                 <?php setcookie("score", "-50", time()+3600); ?>   
                }
                if(score===-60)
                {
                 <?php setcookie("score", "-60", time()+3600); ?>   
                }
                if(score===-70)
                {
                 <?php setcookie("score", "-70", time()+3600); ?>   
                }
                if(score===-80)
                {
                 <?php setcookie("score", "-80", time()+3600); ?>   
                }
            if(score===-90)
                {
                 <?php setcookie("score", "-90", time()+3600); ?>   
                }
                            <?php setcookie("level","1",time()+3600)?>
           window.location.replace('level_finished.php');
        }
   if(quesion_cnt===0)
       {
          rand_no=Math.floor((Math.random()*100)%20); 
          solved_q_no[0]=rand_no;
          quesion_cnt++;
       } 
    else
       {  
          
           //logic to fetch randum questions
          for(j=0;j<solved_q_no.length;j++)
             {    
              //alert("fn");  
                if(rand_no==solved_q_no[j])
                 {
                   rand_no=Math.floor((Math.random()*100)%20); 
                   j=-1;
                   
                 }
                 else
                     {                      
                     }
              }
             // alert(solved_q_no.length);
              solved_q_no[solved_q_no.length+1]=rand_no;
              quesion_cnt++;
        }
    
    
    QUE1=(x[rand_no].getElementsByTagName("QUESTION")[0].childNodes[0].nodeValue);
    ANS1=(x[rand_no].getElementsByTagName("ANS")[0].childNodes[0].nodeValue);
    POS1=(x[rand_no].getElementsByTagName("POS")[0].childNodes[0].nodeValue);
   
    document.getElementById("que").innerHTML="<h1>"+QUE1+"</h1>";
}

var t =60;
function onTimer() { 										
   // function to start the timer
    //document.getElementById('t1').disabled='false';
  document.getElementById("timer").value = t;
  t--;
  if (t < -1) {
   // alert('TIME IS UP!');
    question();
     
    score=score-10;
    t=60;
    setTimeout(onTimer, 1);
    //alert(score);
    
      // document.getElementById('sco').value=score;
       if(score==0)
                      {
                          document.getElementById("score_img").src="helth0.jpg";
                      }
                      if(score==10)
                      {
                          document.getElementById("score_img").src="helth1.jpg";
                      }
                  if(score==20)
                      {
                          document.getElementById("score_img").src="helth2.jpg";
                      }
                  if(score==30)
                      {
                          document.getElementById("score_img").src="helth3.jpg";
                      }
                  if(score==40)
                      {
                          document.getElementById("score_img").src="helth4.jpg";
                      }
                  if(score==50)
                      {
                          document.getElementById("score_img").src="helth5.jpg";
                      }
                  if(score==60)
                      {
                          document.getElementById("score_img").src="helth6.jpg";
                      }
                  if(score==70)
                      {
                          document.getElementById("score_img").src="helth7.jpg";
                      }
                  if(score==80)
                      {
                          document.getElementById("score_img").src="helth8.jpg";
                      }
                  if(score==90)
                      {
                          document.getElementById("score_img").src="helth9.jpg";
                      }
                  if(score==100)
                      {
                          document.getElementById("score_img").src="helth10.jpg";
                      }
                  if(score==-10)
                      {
                          document.getElementById("score_img").src="helth-1.jpg";
                      }
                      if(score==-20)
                      {
                          document.getElementById("score_img").src="helth-2.jpg";
                      }
                      if(score==-30)
                      {
                          document.getElementById("score_img").src="helth-3.jpg";
                      }
                      if(score==-40)
                      {
                          document.getElementById("score_img").src="helth-4.jpg";
                      }
                      if(score==-50)
                      {
                          document.getElementById("score_img").src="helth-5.jpg";
                      }
                      if(score==-60)
                      {
                          document.getElementById("score_img").src="helth-6.jpg";
                      }
                      if(score==-70)
                      {
                          document.getElementById("score_img").src="helth-7.jpg";
                      }
                      if(score==-80)
                      {
                          document.getElementById("score_img").src="helth-8.jpg";
                      }
                      if(score==-90)
                      {
                          document.getElementById("score_img").src="helth-9.jpg";
                      }
                  
  

  }
  else {
    setTimeout(onTimer, 1000);
  }
}

function disp_opts()
{
    
   // $doc = new DOMDocument();
    //$doc->load('level1.xml');
    //print "<div class='opt' id='opts'>";
    //print "<table>";
    //print "<tr>";
    //$x = $doc->getElementsByTagName( "LEVEL1" );
    //foreach( $x as $y )
    //{
     // $ans = $y->getElementsByTagName("ANS");
     // $answer = $ans->item(0)->nodeValue;
     // print "<td>$answer</td>";
   // }
   // print "</tr>";
   // print "</table>";
   // print "</div>";
      //for($j=19;$j>-1;$j--)
      //  {    
      //   echo $A=x[j]->getElementsByTagName('ANS')[0]->childNodes[0]->nodeValue;
      //   echo $txt=$txt+'&nbsp&nbsp&nbsp&nbsp'+A;
      // }
      // document.getElementById("opts").style.left    = opt_div_value+"px";
        
      // document.getElementById("opts").innerHTML="<h1>"+txt+"<h1>";
    
}
function displayquestions()
{
//Q=(x[i].getElementsByTagName("QUESTION")[0].childNodes[0].nodeValue);
A=(x[i].getElementsByTagName("ANS")[0].childNodes[0].nodeValue);
//POS=(x[i].getElementsByTagNamea"POS")[0].childNodes[0].nodeValue);
//txt="QUESTION :" + Q + "<br>ANS :" + A + "<br>POS :"+ POS;

document.getElementById("answer").innerHTML="<h1>"+A+"</h1>";
}

function next()
{
if (i<x.length-1)
  {
  i++;
  displayquestions();
  }
}

function previous()
{
if (i>0)
  {
  i--;
  displayquestions();
  }
}

        arrow=0;
        onload = function()
        {
          displayquestions();
          question();
         disp_opts();
         onTimer();
         
          document.onkeypress=function(e)
          {
              
          var evtobj=window.event? event : e
          var code=evtobj.charCode? evtobj.charCode : evtobj.keyCode
         // var asciiStr=String.fromCharCode(code);
         if(code==44)//< key
             {
                 if(opt_div_control>0 && opt_div_control<20)
                 {
                   opt_div_control=opt_div_control-1;
                   opt_div_value=opt_div_value+95;
                   document.getElementById("opts").style.left= opt_div_value+"px";
                 }
                 previous();
             }
         if(code==46)//> key
             {  
                if(opt_div_control>-1 && opt_div_control<19)
                 {
                   opt_div_control=opt_div_control+1;
                   opt_div_value=opt_div_value-95;
                   document.getElementById("opts").style.left    = opt_div_value+"px";
                 }   
                 next();
             }
         if(code== 32)//SPACE
             {
                 e.preventDefault();
                 animate_shoot();
                 
             }
          if(code==37)//left
              {
                  e.preventDefault();
                  arrow=arrow-1;
                  if(arrow==-4)
                      arrow=3;
                  //document.getElementById("gun").src="bb.jpg";
                  setarrow();
              }
          if(code==38)//up
              {alert("up");}
          if(code==39)//right
              {    
                                    e.preventDefault();
                  arrow=arrow+1;
                  if(arrow==4)
                      arrow=-3;
                  setarrow();
              }    
          if(code==40)//down
              {alert("down");}
          }
        } 
        function setarrow()
        {
            
            if(arrow==0)
              document.getElementById("gun").style.MozTransform    = "rotate(0deg)";
            if(arrow==-1)
              document.getElementById("gun").style.MozTransform    = "rotate(-20deg)";
            if(arrow==-2)
              document.getElementById("gun").style.MozTransform    = "rotate(-40deg)";
            if(arrow==-3)
              document.getElementById("gun").style.MozTransform    = "rotate(-60deg)";
            
            if(arrow==1)
              document.getElementById("gun").style.MozTransform    = "rotate(20deg)";
            if(arrow==2)
              document.getElementById("gun").style.MozTransform    = "rotate(40deg)";
            if(arrow==3)
              document.getElementById("gun").style.MozTransform    = "rotate(60deg)";
            
            
            
        }
        function animate_shoot()
        {
            if(arrow==0)
                {
                    animate_for_zero();
                    
                }
            if(arrow==1)
                {
                    animate_for_one();
                }
            if(arrow==2)
                {
                    animate_for_two();
                }
            
            if(arrow==3)
                {
                    animate_for_three();
                }
            if(arrow==-1)
                 {
                     animate_for_minusone();
                 }
             if(arrow==-2)
                 {
                     animate_for_minustwo();
                 }
              if(arrow==-3)
                 {
                     animate_for_minusthree();
                 }
             
        }
       
        score=0;
        function checkans()
        {
             
             
             
             selected_ans=(x[opt_div_control].getElementsByTagName("ANS")[0].childNodes[0].nodeValue);
             //alert(ANS1);
             //alert(selected_ans);
             //alert(arrow);
             //alert(POS1);
                 //alert(selected_ans);
                 if(ANS1==selected_ans)
                     {
                         if(arrow==POS1)
                         {
                            // alert("correct");
                           
                           score=score+10;
                         }
                         else
                             {
                             //  alert("incorrect");  
                             
                               score=score-10;
                             }
                     }
                  else
                      {
                          //alert("incorrect");
                          
                          score=score-10;
                      }
                     // alert(score);
                    
                  //   document.getElementById("sco").value=score ;
                  //question();
                  
                  if(score==0)
                      {
                          document.getElementById("score_img").src="helth0.jpg";
                      }
                      if(score==10)
                      {
                          document.getElementById("score_img").src="helth1.jpg";
                      }
                  if(score==20)
                      {
                          document.getElementById("score_img").src="helth2.jpg";
                      }
                  if(score==30)
                      {
                          document.getElementById("score_img").src="helth3.jpg";
                      }
                  if(score==40)
                      {
                          document.getElementById("score_img").src="helth4.jpg";
                      }
                  if(score==50)
                      {
                          document.getElementById("score_img").src="helth5.jpg";
                      }
                  if(score==60)
                      {
                          document.getElementById("score_img").src="helth6.jpg";
                      }
                  if(score==70)
                      {
                          document.getElementById("score_img").src="helth7.jpg";
                      }
                  if(score==80)
                      {
                          document.getElementById("score_img").src="helth8.jpg";
                      }
                  if(score==90)
                      {
                          document.getElementById("score_img").src="helth9.jpg";
                      }
                  if(score==100)
                      {
                          document.getElementById("score_img").src="helth10.jpg";
                      }
                  if(score==-10)
                      {
                          document.getElementById("score_img").src="helth-1.jpg";
                      }
                      if(score==-20)
                      {
                          document.getElementById("score_img").src="helth-2.jpg";
                      }
                      if(score==-30)
                      {
                          document.getElementById("score_img").src="helth-3.jpg";
                      }
                      if(score==-40)
                      {
                          document.getElementById("score_img").src="helth-4.jpg";
                      }
                      if(score==-50)
                      {
                          document.getElementById("score_img").src="helth-5.jpg";
                      }
                      if(score==-60)
                      {
                          document.getElementById("score_img").src="helth-6.jpg";
                      }
                      if(score==-70)
                      {
                          document.getElementById("score_img").src="helth-7.jpg";
                      }
                      if(score==-80)
                      {
                          document.getElementById("score_img").src="helth-8.jpg";
                      }
                      if(score==-90)
                      {
                          document.getElementById("score_img").src="helth-9.jpg";
                      }
                  
                  t=60;//to reset timer
                   
        }
        h=200;
        w=670;
        count=0;
        function animate_for_zero()
        {
          document.getElementById("answer").style.bottom    = h+"px";
          h=h+1;
          count=count+1;
          if(count<350)
          { t="ANSWER SHOOTED";//to hault timer
              window.setTimeout("animate_for_zero();",1);}
          else
          {
           checkans();
           question();
           count=0;
          h=200;
          w=670;
          document.getElementById("answer").style.left    = w+"px";
                document.getElementById("answer").style.bottom    = h+"px";   

t=60;//to reset timer (DONT KNOW WHY TIMER WAS NOT RESETTING FOR THIS PARTICULAR CONDITION IN CHECH_ANS FUNCTION SO I RESETED EXPLICITLY)                
              }
            
        }
        function animate_for_one()
        {
          document.getElementById("answer").style.left    = w+"px";
          document.getElementById("answer").style.bottom    = h+"px";
          w=w+1;
          h=h+1;
          count=count+1;
          if (count<350)
          {t="ANSWER SHOOTED";//to hault timer
                window.setTimeout("animate_for_one();",1);
          }
         else
         {     
          count=0;
                          checkans();
          question();
          h=200;
          w=670;
          document.getElementById("answer").style.left    = w+"px";
                document.getElementById("answer").style.bottom    = h+"px";   
                   
t=60;//to reset timer (DONT KNOW WHY TIMER WAS NOT RESETTING FOR THIS PARTICULAR CONDITION IN CHECH_ANS FUNCTION SO I RESETED EXPLICITLY)                
         }
          
        }
        function animate_for_two()
        {
          document.getElementById("answer").style.left    = w+"px";
          document.getElementById("answer").style.bottom    = h+"px";
          w=w+2;
          h=h+1;
          count=count+1;
          if (count<350)
          {t=0;//to hault and restart timer
                window.setTimeout("animate_for_two();",1);
          }
         else
         {     
                             checkans();
          count=0;question();
          h=200;
          w=670;
          document.getElementById("answer").style.left    = w+"px";
                document.getElementById("answer").style.bottom    = h+"px";   
                   
t=60;//to reset timer (DONT KNOW WHY TIMER WAS NOT RESETTING FOR THIS PARTICULAR CONDITION IN CHECH_ANS FUNCTION SO I RESETED EXPLICITLY)                
         }
          
        }
        function animate_for_minusone()
        {
          document.getElementById("answer").style.left    = w+"px";
          document.getElementById("answer").style.bottom    = h+"px";
          w=w-1;
          h=h+1;
          count=count+1;
          if (count<350)
          {t="ANSWER SHOOTED";//to hault timer
                window.setTimeout("animate_for_minusone();",1);
          }
         else
         {     
          count=0;                checkans();
          h=200;question();
          w=670;
          document.getElementById("answer").style.left    = w+"px";
                document.getElementById("answer").style.bottom    = h+"px";   
                   
t=60;//to reset timer (DONT KNOW WHY TIMER WAS NOT RESETTING FOR THIS PARTICULAR CONDITION IN CHECH_ANS FUNCTION SO I RESETED EXPLICITLY)                
         }
            
        }
        function animate_for_minustwo()
        {
          document.getElementById("answer").style.left    = w+"px";
          document.getElementById("answer").style.bottom    = h+"px";
          w=w-2;
          h=h+1;
          count=count+1;
          if (count<350)
          {t="ANSWER SHOOTED";//to hault timer
                window.setTimeout("animate_for_minustwo();",1);
          }
         else
         {     
                             checkans();
          count=0;question();
          h=200;
          w=670;     
          document.getElementById("answer").style.left    = w+"px";
                document.getElementById("answer").style.bottom    = h+"px";   
                   
t=60;//to reset timer (DONT KNOW WHY TIMER WAS NOT RESETTING FOR THIS PARTICULAR CONDITION IN CHECH_ANS FUNCTION SO I RESETED EXPLICITLY)                
         }
          
        }
        function animate_for_three()
        {
            
              count=count+1;
              if (count<113)
               {
                document.getElementById("answer").style.left    = w+"px";
                document.getElementById("answer").style.bottom    = h+"px";   
                w=w+6;
                h=h+1;
                t="ANSWER SHOOTED";//to hault timer
                window.setTimeout("animate_for_three()",1);
               }
               else if (count<350)
               {
                document.getElementById("answer").style.left    = w+"px";
                document.getElementById("answer").style.bottom    = h+"px";   
                w=w-6;
                h=h+1;
                t="ANSWER SHOOTED";//to hault timer
                window.setTimeout("animate_for_three()",1);
               }
               else
              {                 checkans();
                  question();    
                count=0;
                h=200;
                w=670;     
                document.getElementById("answer").style.left    = w+"px";
                document.getElementById("answer").style.bottom    = h+"px";   
                  
                t=60;//to reset timer (DONT KNOW WHY TIMER WAS NOT RESETTING FOR THIS PARTICULAR CONDITION IN CHECH_ANS FUNCTION SO I RESETED EXPLICITLY)
              }
        }
        function animate_for_minusthree()
        {
            
              count=count+1;
              if (count<113)
               {
                document.getElementById("answer").style.left    = w+"px";
                document.getElementById("answer").style.bottom    = h+"px";   
                w=w-6;
                h=h+1;
                t="ANSWER SHOOTED";//to hault timer
                window.setTimeout("animate_for_minusthree()",1);
               }
               else if (count<350)
               {
                document.getElementById("answer").style.left    = w+"px";
                document.getElementById("answer").style.bottom    = h+"px";   
                w=w+6;
                h=h+1;
                t="ANSWER SHOOTED";//to hault timer
                window.setTimeout("animate_for_minusthree()",1);
               }
               else
              {                 checkans();
                  question();    
                count=0;
                h=200;
                w=670;     
                document.getElementById("answer").style.left    = w+"px";
                document.getElementById("answer").style.bottom    = h+"px";   
                  
t=60;//to reset timer (DONT KNOW WHY TIMER WAS NOT RESETTING FOR THIS PARTICULAR CONDITION IN CHECH_ANS FUNCTION SO I RESETED EXPLICITLY)                
              }
        }
        
    </script>
    </head>
    <body  id="body" on ="message();">
        <table cellpadding="1" border="0">
            <tr>
                <td><h2>LEVEL : 1</h2></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REMAINING TIME :<input id="timer" type="text" size="20" value="" ></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                
            </tr>    
        </table>
        <hr>
        <table id="que">
            
        </table>
        <table class="options" border="0" cellspacing="5" cellpadding="10">
            
        </table>
        <table class="two" align="middle">
            <tr>
                <td><div class="two"><img id="gun" src="verticalgun.jpg" height="110" width="100"></div></td>
                
            </tr>
        </table>
        <div class="ans" id="answer" >
           
            <?php
              
            ?>
          </div>
        
       <div class='opt' id='opts' >
      <?php
          $doc = new DOMDocument();
          $doc->load('level1.xml');
    
          print "<table cellpadding='30px' border='1'>";
          print "<tr>";
          $x = $doc->getElementsByTagName( "LEVEL1" );
    foreach( $x as $y )
    {
      $ans = $y->getElementsByTagName("ANS");
      $answer = $ans->item(0)->nodeValue;
      if(strlen($answer)===1 )
      {print "<td ><h2>$answer</h2></td>";}
      else if(strlen($answer)===2 )
      {print "<td ><h2>&nbsp;$answer</h2></td>";}
      else if(strlen($answer)===3 )
      {print "<td ><h2>&nbsp;&nbsp;$answer</h2></td>";}
      else 
      {print "<td ><h2>&nbsp;&nbsp;$answer</h2></td>";}
    }
    print "</tr>";
    print "</table>";
    
    ?>
       </div>
        <div class="scoreimg">
            <img id="score_img" src="helth0.jpg">
        </div>
    </body>
</html>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>