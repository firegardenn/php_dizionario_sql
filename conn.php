<?php
    session_start();

    $host="localhost";
    $user="root";
    $password="";
    $database="dizionario";
    $conn = mysqli_connect( $host, $user, $password, $database);
    
    if( $conn === false )  
    {  
        
        echo "Unable to connect.</br>";
        
     
    }
    else{
        
        //echo"db connesso</br>";
    }
?>