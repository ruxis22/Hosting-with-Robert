<?php

$connection = mysqli_connect ('localhost', 'id8167044_123', '123123123', 'id8167044_123');
    if($connection) {
        print "We are connected to your database";
    } else {
        die("databese connection failed");
    } 

?>