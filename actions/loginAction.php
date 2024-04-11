<?php
session_start();
// Pulling Driver from vendor folder
require_once '../vendor/autoload.php';

// Connect to MongoDB server
$databaseConnection = new MongoDB\Client;

// Connect to Database
$Database = $databaseConnection->myDB;

// Connecting MongoDB to Collection(Table in SQL)
$userCollection = $Database->users;

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password']; // Don't hash the password here
}

$data = array(
    "Email" => $email,
);

// fetching data from Collection
$fetch = $userCollection->findOne($data);
if($fetch){
    // Verifying password
    if(password_verify($password, $fetch['Password'])){
        // Creating a Session
        $_SESSION["email"] = $fetch['Email'];
        header("Location: ../profile.php"); // Remove the space before /profile.php
        exit();
    } else {
        // Incorrect password
        ?>
        <center><h4 style="color: red;">Incorrect Password</h4></center>
        <center><a href="../index.php">Try Logging in again</a></center>
        <?php
    }
} else {
    // User not found
    ?>
    <center><h4 style="color: red;">User Not Found</h4></center>
    <center><a href="../index.php">Try Logging in again</a></center>
    <?php
}
?>
