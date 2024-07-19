<?php
function test($a,$b=10){
echo $a+$b;
};
test(4);

//function expression
function expression(){
    echo "<br>";
    echo "function expression is working";
}
$var="expression";
$var();
?>