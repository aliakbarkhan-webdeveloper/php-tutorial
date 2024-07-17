<!-- strings -->

<?php
$str = "string Data Type";
echo $str;
echo "<br>";
?>

<!-- numbers -->
<?php
$number=123;
echo $number;
echo "<br>";
?>

<!-- floats -->
<?php
$float=12.5;
echo $float;
echo "<br>";
?>

<!-- boolean -->
<?php
$bool=true;
echo $bool;
echo "<br>";
?>
<!-- Null -->
<?php
$null=null;
echo var_dump($null);
echo "<br>";
?>
<!-- Array -->
<?php
$arr=[1.4,"2",3];
echo var_dump($arr);
echo "<br>";
?>

<!-- Object -->
<!-- <?php
// $obj=new User();
?> -->

<!-- Resources -->
 <?php
 $connection=ftp_connect("mongodb://localhost:27017");
 echo var_dump($connection);
 ?>