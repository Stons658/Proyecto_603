<?php
/* Hacemos un require para que los datos hechos en la conexion se insrten en este php */
require 'conexion.php';
/* Declaro un if que contine un isset que sirve de pregunta ¿si registrar que es un boton es pulsado? ejecuta una acion */
if(isset($_REQUEST['registrar'])){
/* Declaro variables para guardar los datos a registrar por el ususario */
    $nombre =$_REQUEST['nombre'];
    $apellido =$_REQUEST['apellido'];
    $usuario = $_REQUEST['usuario'];
    $clave = $_REQUEST['clave'];
    $sexo =$_REQUEST['sexo'];
    $correo =$_REQUEST['correo'];
/* Variable $veriusu1 mediante un query consulta la conexion y mediante el SELECT busca en la tabla registrar el usuario y lo guarda en si misma*/
    $veriusu1 = mysqli_query($conectar,"SELECT * FROM registrar WHERE usuario='$usuario'");
/* Condicional if verificara con el num_rows si $veriusu1 es mayor que 0 si lo es ejecuta la accion*/    
    if(mysqli_num_rows($veriusu1)>0){
        echo '<script>
          alert("El ususario ya esta registrado intenta con otro");
          window.history.go(-1);
        </script>';
        exit;
    }
/* Variable $veriusu2 mediante un query consulta la conexion y mediante el SELECT busca en la tabla registrar el correo y lo guarda en si misma*/
    $veriusu2 = mysqli_query($conectar,"SELECT * FROM registrar WHERE correo='$correo'");
/* Condicional if verificara con el num_rows si $veriusu2 es mayor que 0 si lo es ejecuta la accion*/     
    if(mysqli_num_rows($veriusu2)>0){
        echo '<script>
        alert("El correo ya esta registrado intenta con otro");
        window.history.go(-1);
      </script>';
        exit;
    }    
/* La variable $insertar guardara en la tabla registrar los datos introduciodos por el usuario solo si las condiciones previas no se han cumplido */
    $insertar = "INSERT INTO registrar (nombre,apellido,usuario,clave,sexo,correo) VALUES('$nombre', '$apellido', '$usuario', '$clave', '$sexo','$correo')";
/* Variable $ejecutar mediante un query consulta la conexion y los datos de $insertar y los guardara en si misma*/    
    $ejecutar = mysqli_query($conectar,$insertar);
    
}
/* header es como una redireccion que se ejecuta despues de el codigo anterior */
header("location:  ../P-Login.php");
?>
	