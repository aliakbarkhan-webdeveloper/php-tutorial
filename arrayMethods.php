<?php
$arr = ["i" => 1, 2, 3, 4];

print_r($arr);
echo "<br>";
//push method
array_push($arr, "pushed");
print_r($arr);
echo "<br>";
array_push($arr, "pushed_2");
print_r($arr);
echo "<br>";
array_push($arr, "pushed_3");
print_r($arr);
echo "<br>";
array_push($arr, "pushed_4");
print_r($arr);

//Pop()
echo "<br>";
array_pop($arr);
print_r($arr);
echo "<br>";
array_pop($arr);
print_r($arr);
echo "<br>";
array_pop($arr);
print_r($arr);
echo "<br>";
array_pop($arr);
print_r($arr);
echo "<br>";

//remove multiple elements from array
?>