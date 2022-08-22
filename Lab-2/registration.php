<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="done.php" method="POST">

        <label for="fname">First Name</label>
        <input type="text" name="fname" id="" ><br><br>
        
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="" required><br><br>
        
        <label for="address">Address</label>
        <textarea name="address" id="" cols="20" rows="5"></textarea><br><br>

        <label for="name">Country</label>
        <select name="country" id="" required>
            <option value="egy">Egypt</option>
            <option value="ger">German</option>
        </select><br><br>

        <label for="gender">Gender</label>
        <input type="radio" name="gender" value="Male">
        <label for="gender">Male</label>
        <input type="radio" name="gender" value="Female">
        <label for="gender">Female</label>

        <br><br>

        <label for="skills">Skills</label>

        <input type="checkbox" name="js" id="js">
        <label for="js">JS</label>

        <input type="checkbox" name="php" id="php">
        <label for="php">PHP</label>

        <input type="checkbox" name="mysql" id="mysql">
        <label for="mysql">MySQL</label>

        <input type="checkbox" name="css" id="css">
        <label for="css">CSS</label><br><br>

        <label for="username">Username</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="pass">Password</label>
        <input type="password" name="password" id="password" required><br><br>

        <label for="department">Department</label>
        <input type="text" name="department" id="department" placeholder="Open Source" required><br><br>

        <label for="captcha">Captcha : "Sh7ja9" (Please Insert the code below)</label><br><br>
        <input type="text" name="captcha" id="captcha" value="Sh7ja9" required>
        <br><br>
        <input  value="Register" type="submit" name="submit" id="submit">
        <input type="reset" value="Reset">

    </form>
</body>
</html>

