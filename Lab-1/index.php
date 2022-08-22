<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session 1</title>
</head>
<body>

<?php 

echo "Welcome to PHP"; 

$x = 5;
$y = "Welcome";
$z = True;

echo "<br>==============<br>";

echo "x is an " .gettype($x). " and y is a " . gettype($y) . " and z is a " . gettype($z);

echo "<br>==============<br>";

echo "Loop Method 1 <br>";

$i = 0;

while($i < 16){
	echo " " . $i . " ";
	$i++;
}

echo "<br>==============<br>";

echo "Loop Method 2 <br>";

for($i = 0; $i < 16; $i++){
	echo " " . $i . " ";
}
echo "<br>==============<br>";

const c = "ITI";

echo "x is an " .gettype($x). " and y is a " . gettype($y) . " and z is a " . gettype($z) . " and c is a " . gettype(c);

echo "<br>==============<br>";
echo "----- isset test ----- <br>";
echo isset($x);echo isset($y);echo isset($z);

echo "<br>==============<br>";
echo "----- empty test ----- <br>";

if(!empty($x)){
	if(!empty($z))
		if(!empty($y))
			echo "x , y , z variables are not empty";
}else echo "empty";

echo "<br>==============<br>";

$m = 20;
$n = 40;
$sum = $m+$n;

if($sum > 50)
	echo "Accepted";
else 
echo "Not Accepted";

echo "<br>==============<br>";

echo "
<table  border='1'>
	<tr>
		<td>Salary of Mr A </td>
		<td>1000$</td>
	</tr>
	<tr>
		<td>Salary of Mr B </td>
		<td>1200$</td>
	</tr>
	<tr>
		<td>Salary of Mr C </td>
		<td>1400$</td>
	</tr>
</table>
";

echo "<br>==============<br>";

function numbToString($num){
	return (string) $num;
}

echo "Way 1: " . numbToString(99);

echo "<br>==============<br>";

function numToString($num){
	return strval($num);
}

echo "Way 2: " . numToString(150);

?>

</body>
</html>