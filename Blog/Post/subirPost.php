<?php
include '../../Servidor/servidor.php';
$server = new servidor();

if(isset($_POST['Titulo'], $_POST['Subtitulo'], $_POST['Contenido'], $_POST['Autor'], $_POST['Fecha'])){

    $Titulo = $_POST['Titulo'];
    echo $Titulo;

    $Subtitulo = $_POST['Subtitulo'];
    $Contenido = $_POST['Contenido'];
    $Autor = $_POST['Autor'];
    $Fecha = $_POST['Fecha'];

}

if(isset($_FILES['file']['name'])){

    $Imagen = 'https://www.totumdev.uy/Blog/Post/uploads/' . $_FILES['file']['name'];

    if ( $_FILES['file']['error'] > 0 ){
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        if(move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']))
        {
            $funciona = true;
        }
    }
}else{
    echo "No Funca che.";
}

if($funciona == true){
    $post = $server->CrearPost($Titulo, $Subtitulo, $Contenido, $Imagen, $Autor, $Fecha);

    echo "Post: " . $post;
}
return $post;

?>