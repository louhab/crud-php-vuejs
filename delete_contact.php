<?php
require('database/conexion.php');
$id=$_GET['id'];
$sql="delete from contacts where id = '$id'";
if($result=mysqli_query($connexion,$sql)){
    $message=['deleted'=>true];
    echo json_encode($message);
}
?>