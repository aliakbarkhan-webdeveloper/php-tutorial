<?php
$arr=["user"=>"ali","number"=>"0346", "city"=>"chishtian"];
echo $arr["city"];

foreach ($arr as $key => $value) {
    # code...
    echo "<br>";
    echo "the key of array is: $key which contains the value $value";
}
?>