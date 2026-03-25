<?php 
  session_start();
  
  if(!isset($_SESSION['Autenticado']) OR $_SESSION['Autenticado'] != 'SIM'){
    header('location: index.php?login=erro2');
  }

  echo $_SESSION['Autenticado'];

?>