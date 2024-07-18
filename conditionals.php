<?php

$name = "ali";
if ($name == "ali") {
    echo "BBA Graduate";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//week days with switch statement

$day = "t";

switch ($day) {
    case 'monday':
        echo "today is monday";
        break;

    case 'tuesday':
        echo "today is tuesday";
        break;
    case 'wednesday':
        echo "today is wednesday";
        break;
    case 'thursday':
        echo "today is thursday";
        break;
    case 'friday':
        echo "today is friday";
        break;
    case 'saturday':
        echo "today is saturday";
        break;
        case 'sunday':
            echo "today is sunday";
            break;

    default:
        echo "please choose valid day";
        break;
}
