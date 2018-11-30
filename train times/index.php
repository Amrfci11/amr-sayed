<?php
include_once"database.php";
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <div class="cont">
            <div class= "head">
                <div class="text"><font size="6" style="color:white;font-family: Algerian;font-size: 35px"> Egypt Trains Times </font></div>

            </div>
            <div class="insert">
            <div class="insert_item">
            <form action="display.php" method="POST">
            
                <input class="txt1" type="text" name="depart"  placeholder="current_station" heddin=null  required/><br>
                <input class="txt2" type="text" name="arrive"  placeholder="destnation" heddin=null  required/><br>
                <!--<input class="txt3" type="text" name="class"  placeholder="class" heddin=null /><br>-->
                  <select name="class">
                    
                    <option value="Express">Express</option>
                    <option value="VIP-1">VIP-1</option>
                    <option value="VIP-2">VIP-2</option>
                    <option value="SLEEPING-1">SLEEPING-1</option>
                    <option value="SLEEPING-2">SLEEPING-2</option>
                    <option value="DISTINCTIVE">DISTINCTIVE</option>
                </select>
                <input class="btn" type="submit" value="SEARCH" name="GO" size=20px /><br>
              
            </form>
            </div>
            <div>
        </div>
    </body>
</html>