<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
</head>
<body>

<?php

$fname = $lname = $address = $gender = $username = $password = $department = "";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['fname'])){
        $error = "Not done yet, First Name is required";
    }else{
        $fname = test_input($_POST["fname"]);
    }

    if(empty($_POST['lname'])){
        $error = "Not done yet, Last Name is required";
    }else{
        $lname = test_input($_POST["lname"]);
    }

    if(empty($_POST['address'])){
        $error = "Not done yet, Address is required";
    }else{
        $address = test_input($_POST["address"]);
    }

    if(empty($_POST['username'])){
        $error = "Not done yet, username is required";
    }else{
        $username = test_input($_POST["username"]);
    }

    if(empty($_POST['password'])){
        $error = "Not done yet, password is required";
    }else{
        $password = test_input($_POST["password"]);
    }

    if(empty($_POST['department'])){
        $error = "Not done yet, department is required";
    }else{
        $department = test_input($_POST["department"]);
    }

    if(isset($_POST['gender'])){
        $gender = $_POST["gender"];
    }else{
        $error = "Not done yet, gender is required";
    }

    if(empty($_POST['captcha']) && $_POST['captcha'] != "Sh7ja9"){
        $error = "Not done yet, Captcha is required";
    }

    if($error != ""){
        echo $error . "<br><br>";
    }else{
    
    $checkGender = "";
    
    if($gender == "Male")
        $checkGender= "Mr";
    else
        $checkGender = "Mrs";
       
    $skills = [];
    
    if(isset($_POST['js']))
        $skills[0] = "JS";
    if(isset($_POST['php']))
        $skills[1] = "PHP";
    if(isset($_POST['mysql']))
        $skills[2] = "MySql";
    if(isset($_POST['css']))
        $skills[3] = "CSS";
    
    echo "Thanks " . $checkGender . " " . $fname . " ". $lname . " " . "<br><br>";
    echo "Please Review Your information <br><br>";
    echo "Name: " . $fname . " " . $lname . "<br><br>";
    echo "Address: " . $address . "<br><br>";
    echo "Your Skills: ";
    foreach($skills as $skill){
        echo " " . $skill . " "; 
    }
    echo "<br><br>";
    
    echo "Departmen: " . $department ."<br><br>";
    
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// initiate associated array

$jsonArr = array("fname" => "$fname",
            "lname" => "$lname",
            "gender" => "$gender",
            "Address" => "$address",
        "department" => "$department");

// create new file
$myfile = fopen("test.json", "w");

// write to file
fwrite($myfile, json_encode($jsonArr));

echo "<br><br>";

echo "===== Reading from json file =======<br><br>";

$jsonContent = file_get_contents("test.json");
$jsonContent = json_decode($jsonContent, true);

foreach($jsonContent as $k => $v){
    echo " " . $k . " => " . $v . "<br>"; 
}



// close the file
fclose($myfile);

?>
    
</body>
</html>