<?php
    $host_name  = "_";
    $database   = "_";
    $user_name  = "_";
    $password   = "_";


    $connect = mysqli_connect($host_name, $user_name, $password, $database);
    
    if(mysqli_connect_errno())
    {
    echo '<p>Not Working: '.mysqli_connect_error().'</p>';
    }
    else
    {
    echo '<p>Its working!</p>';
    }
?>