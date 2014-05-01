<html>
    <title>change password</title>
    <style>
     div
        {
            color: blue;
            border:2px solid #a1a1a1;
            padding:10px 90px; 
            width:500px;
            border-radius:25px;
            -moz-border-radius:50px; /* Old Firefox */
            box-shadow: 0px 0px 5px 5px;
            background: linear-gradient(red,brown);
            position: absolute;
            left:350px;
            top:200px;
        }
        </style>
    <body bgcolor="black">
        <div >
            <form action="change_pass_db.php" method="POST">
                CURRENT PASSWORD <input type="password" name="curr_pass" size="50">
                <br>
                <br>
                NEW PASSWORD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="change_pass" size="50">
                <br><br>
                CONFIRM PASSWORD <input type="password" name="con_pass" size="50">
                <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="            submit             " >
            </form>
        </div>
        
    </body>
</html>

<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
