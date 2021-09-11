<?php
include '../../Servidor/servidor.php';
$server= new servidor();

$Titulo = $_POST['Titulo'];
$Subtitulo = $_POST['Subtitulo'];
$Contenido = $_POST['Contenido'];
$Imagen = $_POST['Imagen'];
$Autor = $_POST['Autor'];
$Fecha = $_POST['Fecha'];

$post = $server->CrearPost($Titulo, $Subtitulo, $Contenido, $Imagen, $Autor, $Fecha);

echo $post;
return $post;

?>