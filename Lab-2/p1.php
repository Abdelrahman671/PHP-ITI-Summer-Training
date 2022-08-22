<?php

$arr = array("PHP", "Open Source", "ITI", "Day2", "Arrays");

foreach($arr as $i){
    echo " " . $i . " ";
}

echo "<br> =========================<br>";

for($i=0; $i < sizeof($arr); $i++){
    echo " " . $arr[$i] . " ";
}

echo "<br> =========================<br>";

$info = array("Name" => "Abdelrahman",
            "Age" => "23",
        "Email" => "abdo@gmail.com",
        "College" => "FEE");

foreach($info as $k => $v){
    echo " " . $k . " " . $v . "<br>";
}

echo "<br> =========================<br>";

sort($arr);

foreach($arr as $i){
    echo " " . $i . " ";
}

echo "<br> =========================<br>";

// XAMP prob
$info_arrk = array_keys($info, "FEE");
print_r($info_arrk);

echo "<br> =========================<br>";



