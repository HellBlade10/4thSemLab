<?php 
$num = 1;
$dec = 0.1;
$word = "hello";
$boo = true || false;
$arr = [1,2,3,4];

echo "<h2>Using echo:<br></h2>";
echo "int = ".$num."<br>";
echo "float = ".$dec."<br>";
echo "string = ".$word."<br>";
echo "bool = ".$boo."<br>";
echo "array = ".implode(", ", $arr)."<br><br>";

print("<h2>Using print:</h2><br>");
print("int = ".$num."<br>");
print("float = ".$dec."<br>");
print("string = ".$word."<br>");
print("bool = ".$boo."<br>");
print("array = ".implode(", ", $arr)."<br><br>");

$Arr = ["Apple", "Banana", "Guava"];
print_r($Arr);
echo "<br><br>";
var_dump($Arr);

echo"<br>".is_string("string");
echo"<br>".is_int(2);
echo"<br>".is_array($Arr);
echo"<br>";
var_dump(is_string($word));
?>