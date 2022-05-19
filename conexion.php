<?php
/* Aqui creamos la conexion para usarla despues en registrar.php y login.php */
/* Declaro las bariables que alojan el host, user ,pass,bd */

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "bdregistro";
/* La variable $conectar guardara los datos de conexion */

$conectar = mysqli_connect($host,$usuario,$clave,$bd);

/*  Este se usa para verificar si tenemos acceso a la base de datos pero la dejo en forma de comentario porque ya no la necesitare  */
/*if($conectar){
    echo "estas conectado";
}
else{
    echo "no estas conectado";
}
*/
?>

