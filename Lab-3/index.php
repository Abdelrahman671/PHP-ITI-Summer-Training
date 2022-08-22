<?php

// database connection
include('db.php');

// query 

//$query = "SELECT products.name, products.price, category.name AS Category_Name, products.created_at FROM
//products INNER JOIN category ON category.id = products.category_id;";


$query = "SELECT * from users";

// prepare query

$sql = $con->prepare($query);

// execute the prepared query

$result = $sql->execute();

// fetch users
$users = $sql->fetchAll(PDO::FETCH_ASSOC);

//var_dump($products);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: black;
  color: white;
}
a{
  text-decoration: none;
}
</style>
</head>
<body>
    
<table id="customers">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Image</th>
            <th>Time</th>
            <th>Operations</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><?php echo $user['image'] ?></td>
            <td><?php echo $user['created_at'] ?></td>
            <td>      
              <button type="submit"><a style="color: green;" href="update.php?edit=<?php echo $user['id']; ?>">Update</a></button>
              <button type="submit"><a style="color: red;" href="delete.php?edit=<?php echo $user['id']; ?>">Delete</a></button>
            </td>
        </tr>
        
        <?php endforeach; ?>

        <tr>
          <td colspan="5">
             <button type="submit"><a style="color: blue;" href="add.php">Create New User</a></button>        
          </td>
        </tr>
    </tbody>

</table>

</body>
</html>