<?php

$conexion="";
Conectarse();


function Conectarse(){
  $conexion=mysql_connect("localhost","root","");
  if(!$conexion){
    echo "Error conectando a la base de datos";
    exit();

  } 
  if(mysql_select_db("lacava",$conexion)){
    $sql="INSERT INTO `datos`(`nombre`,`Apellido`, `e_mail`,`Telefono`, `asistentes`,`fecha`, `hora`) VALUES ('".$_POST['nombre']."','".$_POST['Apellido']."','".$_POST['Telefono']."','".$_POST['e_mail']."','".$_POST['asistentes']."','".$_POST['fecha']."','".$_POST['hora']."')";
    mysql_query($sql, $conexion);
  }else{
    echo "Error seleccionando la base de datos";
}
    exit();
}

?>
