<?php
require('database/conexion.php');
$data=file_get_contents("php://input");
$request=json_decode($data);

$sql="update contacts set  name='$request->name',telephonne='$request->tel'  where id = '$request->id'  ";
if(mysqli_query($connexion,$sql)){
    $contact=[
        'name'=>$request->name,
        'tel'=>$request->tel,
       'id'=> $request->id
        
    ];
    header('index.php');
    echo json_encode($contact);
}
?>