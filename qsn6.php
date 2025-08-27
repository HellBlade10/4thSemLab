<?php
function age($age_years){
    $age_days = $age_years * 365;
    return $age_days;
}
?>
<html>
    <head>
        <title>Age Calculator</title>
    </head>
    <body>
        <h1>Calculate age in years to days</h1>
        <form method="POST">
    <input type="number" name="age" placeholder="Enter your age in years">
    <input type="submit" value="Convert to days">
    </form>
        
    </body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $age_years = $_POST['age'];
    echo "$age_years years = ".age($age_years)." days";
}
?>