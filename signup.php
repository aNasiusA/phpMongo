<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <form action="actions/signupAction.php" method="POST">
        <input type="text" placeholder="FirstName" name="fname" id="fname" ><br><br>
        <input type="text" placeholder="LastName" name="lname" id="lname" ><br><br>
        <input type="email" placeholder="Email" name="email" id="email" ><br><br>
        <input type="text" placeholder="Phone Number" name="phone" id="phone" ><br><br>
        <input type="password" placeholder="Password" name="password" id="password"><br><br>
        <input type="submit" name="signup" id="signup" value="Signup"><br><br>
        <a href="index.php">Already have an Account? Login</a>
    </form>
</body>
</html>