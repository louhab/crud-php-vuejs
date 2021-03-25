<?php
require('database/conexion.php');
$data=file_get_contents("php://input");
$request=json_decode($data);

$sql="insert into contacts(name,telephonne) values('$request->name','$request->tel')";
if(mysqli_query($connexion,$sql)){
    $contact=[
        'name'=>$request->name,
        'tel'=>$request->tel,
       'id'=> mysqli_inser_id($connexion)
        
    ];
    header('index.php');
    echo json_encode($contact);
}
?>