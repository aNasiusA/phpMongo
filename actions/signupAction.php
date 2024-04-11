<?php
use MongoDB\Operation\InsertMany;
use MongoDB\Operation\InsertOne;

// Pulling Driver from vendor folder
require_once  '../vendor/autoload.php';

// Connect to MongoDB server
$databaseConnection = new MongoDB\Client;

// Connect to Database
$Database = $databaseConnection -> myDB;

//Connecting MongoDB to Collection(Table in SQL)
$userCollection = $Database->users;

// Verifying Connection
// if($userCollection){
//     echo'Connection '.$userCollection. " Connected";
// }
// else{
//     echo "Failed to Connect to Database/Collection";
// }
if(isset($_POST['signup'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
}

$data = array(
    "FirstName" => $fname,
    "LastName"=> $lname,
    "Email"=> $email,
    "Phone Number"=> $phoneNumber,
    "Password"=> $password
);

// inserting data into Collection

$insert = $userCollection ->InsertOne($data);
if($insert){
    ?>
    <center><h4 style="color: green;">Sucessfully Registed</h4></center>
    <center><a href="../index.php">Login</a></center>
    <?php
}else{
    ?>
    <center><h4 style="color: red;">Cannot Register</h4></center>
    <center><a href="../index.php">Signup</a></center>
    <?php
}