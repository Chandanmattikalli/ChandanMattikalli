<!DOCTYPE html>
<html>
<head>

<script>
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","questions.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML; 

x=xmlDoc.getElementsByTagName("LEVEL1");
i=0;

function displayquestions()
{
Q=(x[i].getElementsByTagName("QUESTION")[0].childNodes[0].nodeValue);
A=(x[i].getElementsByTagName("ANS")[0].childNodes[0].nodeValue);
POS=(x[i].getElementsByTagName("POS")[0].childNodes[0].nodeValue);
txt="QUESTION :" + Q + "<br>ANS :" + A + "<br>POS :"+ POS;

document.getElementById("showquestion").innerHTML=txt;
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
</script>
</head>
<body onload="displayquestions()">

<div id='showquestion'></div><br>
<input type="button" onclick="previous()" value="<<" />
<input type="button" onclick="next()" value=">>" />

</body>
</html>

