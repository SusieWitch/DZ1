<?php
$today = date("dm");
$min = date("i");
for($i=0;$i<$min;$i++) {
    $myarray[$i] = $today+$min*$i;
};
$count=count($myarray);
for($j=0;$j<$count;$j++){
    if ($j%2==0){
        $array1[$j]=$myarray[$j];
    }
    else $array2[$j]=$myarray[$j];
}
?>
<html>
<head>
    <style>
        b {
            color: red;
        }
    </style>
</head>
<body>
<p>Группа 1 (с нечётными индексами):</p>
<?php
foreach ($array2 as $key => $value){
    echo "<b>$key</b> => $value".PHP_EOL;
}?>
<p>Группа 2 (с чётными индексами):</p>
<?php
foreach ($array1 as $key => $value){
    echo "<b>$key</b> => $value".PHP_EOL;
}
?>
</body>
</html>
