<?php

include('db.php');

if(isset($_POST['submit']))
{
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];

    // image
    $img_name = $_FILES['image']["name"];
    $tmp_name = $_FILES['image']['tmp_name'];
    $dir = "./image/" . $img_name;

    if(empty($userName) || empty($userEmail)){
            echo "fill the input fields";
        }

     $query = "INSERT INTO users(name,email,image) VALUES('$userName','$userEmail','$img_name')";

     $prep = $con->prepare($query);

     $exec = $prep->execute();

     if (move_uploaded_file($tmp_name, $dir)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }

     if($exec){
        echo "<h3> Record has been added successfully...redirecting.</h3><br><br>";
        header( "Refresh:3; url=index.php", true, 303);
    }else{
        echo "<h3> Error... </h3>";
    }
}

?>

<form action="" method="post" enctype="multipart/form-data">

        <label for="name">Name</label>
        <input type="text" name="name" id="" ><br><br>

        <label for="email">Email</label>
        <input type="text" name="email" id="" ><br><br>

        <label for="fname">Image</label>
        <input type="file" name="image" id="" ><br><br>

        <input  value="Add User" type="submit" name="submit" id="submit">
        <input type="reset" value="Reset">
</form>
