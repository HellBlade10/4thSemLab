<?php
function area($b,$h){
    return 0.5 * $b * $h;
}
?>
<html>
    <head>
        <title>Area</title>
    </head>
    <body>
        <form method="POST">
            <h1>Calculate Area of Triangle</h1>
            <input type="text" name="base" placeholder="Base">
            <input type="text" name="height" placeholder="Height">
            <input type="submit" value="Calculate Area">
        </form>
    </body>
</html>

<?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $base = $_POST['base'];
        $height = $_POST['height'];
        echo "Area of triangle with base: <i>$base</i> and height: <i>$height</i> = ".area($base, $height)." sq meters";
    }
?>