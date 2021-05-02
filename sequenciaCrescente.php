<?php
$array = array(2, 3, 4, 10, 5, 25);
sort($array, SORT_NUMERIC);
    foreach ($array as $num) 
{
    echo "$num,";
}
