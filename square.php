<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="CCLab.css">

    </head>
    <body>
        <ul>
            <li><a href="CCLab.php">Triangle</a></li>
            <li><a href="Rect.php">Rectangle</a></li>
            <li><a href="square.php">Square</a></li>
        </ul>
        <center>
        <div id="triangle">
        <h1>Area of Square</h1>
        <img src="square.gif" style="margin-top: 3%;">
         </div>
         <div>
             <br> <br>
             <form action="square.php" method="get">
             <h4>Length of Side</h4>
             <input type="text" name="length" placeholder="Enter Length"><br><br>
             <input type = "Submit" name="submit"><br>
             <?php

            if(isset($_GET["submit"])){
            $h = $_GET["length"]; 
            $R = $h * $h;
            echo("<br><h4>Result</h4>");
            echo($R);}
            ?>
         </div>
        </center>

    </body>
</html>