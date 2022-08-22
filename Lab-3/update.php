<?php

// db conn

include('db.php');

// get user id
$getUserQuery = explode("=", $_SERVER["QUERY_STRING"]);

$userID = $getUserQuery[1];

//var_dump($userID);

// query
$query = "SELECT * from users where id = $userID";

// prepare query

$sql = $con->prepare($query);

// execute the prepared query

$result = $sql->execute();

// fetch users
$user = $sql->fetch(PDO::FETCH_ASSOC);

// message to current user

echo "<h1>" .
"Hello " . $user['name'] .
"</h1>";
echo "<br>" . "<h2> Update your profile </h2>";

if(isset($_POST['update'])){

    $user_name = $_REQUEST['name'];
    $user_email = $_REQUEST['email'];

    // image
    $img_name = $_FILES['image']["name"];
    $tmp_name = $_FILES['image']['tmp_name'];
    $dir = "./image/" . $img_name;

    //query

    if(empty($user_name) || empty($user_email)){
        echo "<h3> Please fill your name in the input field. </h3>";
        header( "Refresh:2; url=index.php", true, 303);
        exit();
    }


    $update_query = "UPDATE users SET name='$user_name', email='$user_email', image='$img_name' WHERE id='$userID'";

    // prepare query

    $update_prepare = $con->prepare($update_query);

    // execute the prepared query

    $update_execute = $update_prepare->execute();

    if (move_uploaded_file($tmp_name, $dir)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }

    if($update_execute){
        echo "<h3> Record has been updated successfully...redirecting.</h3><br><br>";
        header( "Refresh:3; url=index.php", true, 303);
    }else{
        echo "<h3> Error... </h3>";
    }
    
}


?>

<form action="" method="post" enctype="multipart/form-data">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br><br>
    <label for="name">Email</label>
    <input type="text" name="email" id="email">
    <br><br>
    <label for="name">Image</label>
    <input type="file" name="image" id="email">
    <br><br>
    <input type="submit" name="update" value="Update">
</form>

