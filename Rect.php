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
        <h1>Area of Rectangle</h1>
        <img src="rect.gif" style="margin-top: 3%;">
         </div>
         <div>
             <br> <br>
             <form action="Rect.php" method="get">
             <h4>Length</h4>
             <input type="text" name="length" placeholder="Enter Length"><br><br>
             <h4>Width<h4>
             <input type="text" name="width" placeholder="Enter Width"><br><br>
             <input type = "Submit" name="submit"><br>
             <?php

            if(isset($_GET["submit"])){
            $h = $_GET["length"]; 
            $b = $_GET["width"]; 
            $R = $h * $b;
            echo("<br><h4>Result</h4>");
            echo($R);}
            ?>
         </div>
        </center>

    </body>
</html>