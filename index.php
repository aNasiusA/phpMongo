<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="actions/loginAction.php" method="POST">
        <input type="email" placeholder="Email" name="email" id="email" required><br><br>
        <input type="password" placeholder="Password" name="password" id="password" required><br><br>
        <input type="submit" name="login" id="login" value="Login"><br><br>
        <a href="signup.php">Don't have an Account? SignUp</a>
    </form>
</body>
</html>