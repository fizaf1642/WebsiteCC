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
        <h1>Area of Triangle</h1>
        <img src="triangle.svg" style="margin-top: 3%;">
         </div>
         <div>
             <br> <br>
             <form action="CCLab.php" method="get">
             <h4>Height</h4>
             <input type="text" name="height" placeholder="Enter Height"><br><br>
             <h4>Base</h4>
             <input type="text" name="base" placeholder="Enter Base"><br><br>
             <input type = "Submit" name="submit"><br>
             <?php

            if(isset($_GET["submit"])){
            $h = $_GET["height"]; 
            $b = $_GET["base"]; 
            $R = $h * $b;
            echo("<br><h4>Result</h4>");
            echo($R/2);}
            ?>
         </div>
        </center>

    </body>
</html>