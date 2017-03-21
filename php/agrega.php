<?php
function Conectarse()
{ if (!($link=mysql_connect("localhost","root","root")))
   { echo "Error conectando a la base de datos.";
      exit(); }
   if (!mysql_select_db("contacto",$link))
   {  echo "Error seleccionando la base de datos.";
      exit(); }
   return $link;
}
   $Nombre = $_POST["Nombre"];
   $E_mail = $_POST["E-mail"];
   $Asunto = $_POST["Asunto"];
   $Mensaje = substr($_POST["mensaje"], 0, 500);
   $link = Conectarse();
   //devuelve el ultimo comentario, muy necesario para evitar doble envio de los datos

   mysql_query("INSERT INTO datos
   Nombre, E_mail,Asunto,mensaje)
   VALUES ( '$nombre', '$E_mail', '$Asunto','$Mensaje')",
   $link);
   }
   ?>
