<?php
function generateRandomString(int $n=0)
{
    $al = [
        '0', '1' , '2', '3', '4', '5', '6', '7', '8', '9'];

    $len = !$n ? random_int(7, 12) : $n; // Chose length randomly in 7 to 12

    $ddd = array_map(function($a) use ($al){
        $key = random_int(0, 60);
        return $al[$key];
    }, array_fill(0,$len,0));
    return implode('', $ddd);
}
?>
