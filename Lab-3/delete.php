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
echo "<br>" . "<h2> We will miss you :'( Bye Bye..! </h2>";

if(isset($_POST['del'])){

    // query

    $update_query = "DELETE FROM users WHERE id='$userID'";

    // prepare query

    $update_prepare = $con->prepare($update_query);

    // execute the prepared query

    $update_execute = $update_prepare->execute();

    if($update_execute){
        echo "<h3> Record has been updated successfully...redirecting.</h3><br><br>";
        header( "Refresh:1; url=index.php", true, 303);
    }else{
        echo "<h3> Error... </h3>";
    }
    
}


?>

<form action="" method="post">
    <input type="submit" name="del" value="Delete User">
</form>

