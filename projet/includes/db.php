<?php
   

   $connection = mysqli_connect('localhost', 'root', '', 'mcw');  
    if(!$connection) {
        die("Database connection failed");
    }