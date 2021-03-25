<?php
require('database/conexion.php');
$sql="select * from contacts ";
if($query=mysqli_query($connexion,$sql)){
    $i=0;
    $contact=[];
    while($row=$query->fetch_assoc()){
        $contact[$i]['id']=$row['id'];
        $contact[$i]['name']=$row['name'];
        $contact[$i]['telephonne']=$row['telephonne'];
        $i++;
    }
    echo json_encode($contact);
}

?>