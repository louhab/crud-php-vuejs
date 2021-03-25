<?php
require('database/conexion.php');
$id=$_GET['id'];
$sql="select * from contacts  where id='$id'";
if($query=mysqli_query($connexion,$sql)){
    $row=$query->fetch_assoc();
        $contact=[
         'name'=>$row['name'],
         'tel'=>$row['telephonne'],
         'id'=>$row['id']
        ];
    
    echo json_encode($contact);
}

?>