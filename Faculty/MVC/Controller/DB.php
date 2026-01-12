<?php

  $user_name="root";
  $host_name="localhost";
  $password="";
  $db_name="database_conn";

  $conn="";

  try{
    $conn= mysqli_connect( $host_name, $user_name ,$password , $db_name);
    echo "connected!";
  }

  catch(mysqli_connection_exception){
    echo" could not connected!";
  }



 ?>