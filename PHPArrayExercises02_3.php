<!DOCTYPE html>
<html>
<body>

<?php
$arr = array(25, 47, 42, 56, 32);
$oddArray = array();
$evenArray = array();
echo "Input 5 elements in the array: " . "<br>";
$size = count($arr);
for ($i = 0; $i < $size; $i++) {
    echo "elements - "."$i ".": "."$arr[$i]"."<br>" ;
}


$j = 0;
$k = 0;
for ($i = 0; $i < $size; $i++) {
    if ($arr[$i] % 2 == 0) {
        $evenArray[$j] = $arr[$i];
        $j++;
    } else {
        $oddArray[$k] = $arr[$i];
        $k++;
    }
}
echo "<br>" . "The Even elements are : " . "<br>";
for ($i = 0; $i <= $j; $i++) {
    echo "$evenArray[$i] " . "\n" ;
}
echo "<br>The Odd elements are :<br> " . "\n";
for ($i = 0; $i <= $k; $i++) {
    echo "$oddArray[$i] " . "\n";
}
?>

</body>
</html>

