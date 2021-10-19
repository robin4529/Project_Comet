<?php 

include_once "autoload.php"; 

$delet= $_GET['delete_id'];
  
  connect()-> query("DELETE FROM products WHERE id='$delet'");




   header ("location:index.php");

?>