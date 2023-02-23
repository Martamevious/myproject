<?php
 $datasource="localhost";
 $user="root";
 $password="";
 $database="agimmo";
  $conn= mysqli_connect($datasource, $user,$password,$database);


  try {
   $conn;
   // echo "Connection réussie</br>";
} catch (mysqli_sql_exception $e) {
   
   // echo "Connection échouée<br>".$e;
}
?>