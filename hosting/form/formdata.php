<?php
include "db.php";

if (isset($_POST['submit'])) {
    $error=false;
        print_r($_POST);

if(strlen($_POST['username'])<8){
    $error=true;
    print"Username incorrect";

    }
if(strlen($_POST['username'])>64){
        $error=true;
        print"Username Too Long";
    }
if(strlen($_POST['password'])<8){
        $error=true;
        print"Password too incorrect";
    }
}
if ($error==false) {
    $username = $_POST['username'];
    $password = $_POST ['password'];
    $query = "INSERT INTO `users` (`indexd`, `username`, `password`, `created`) ";
    $query .= "VALUES (NULL, '$username', '$password', CURRENT_TIMESTAMP);";
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die("Query failed". mysqli_error ());   
    } else {
        print "<br>User Saved!!!";
    }
    
    
   
}   
?>