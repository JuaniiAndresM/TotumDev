<?php

    include '../../Servidor/servidor.php';
    $server= new servidor();

    $Titulo = $_POST['titulo'];
    $Subtitulo = $_POST['subtitulo'];
    $Autor = $_POST['Autor'];
    $Fecha = $_POST['Fecha'];

    echo $Contenido;

    /*
        Subo Imagen
    */

    $uploadedfileload="true";
    $uploadedfile_size=$_FILES['uploadedfile']['size'];

    //echo $_FILES['uploadedfile']['name'];

    if ($_FILES['uploadedfile']['size']>200000){

        $msg = "El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";
        $uploadedfileload="false";

    }

    if (!($_FILES['uploadedfile']['type'] =="image/pjpeg" || $_FILES['uploadedfile']['type'] =="image/gif" || $_FILES['uploadedfile']['type'] =="image/png" || $_FILES['uploadedfile']['type'] =="image/jpeg")){

        $msg= " Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
        $uploadedfileload = "false";

    }

    $file_name=$_FILES['uploadedfile']['name'];
    $add= "uploads/$file_name";

    $add2 = "https://www.totumdev.uy/Blog/Post/" . $add;

    /*if($uploadedfileload=="true"){

        echo 'Guardando...' . '<br>';

        //echo $add . '<br>';
        echo $add2 . '<br>';

        if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $add)){

            echo '1';

            $post = $server->CrearPost($Titulo, $Subtitulo, $Contenido, $add2, $Autor, $Fecha);

            echo $post;

            header('Location: http://www.totumdev.uy/Blog/Post/crearPost.php');

            echo 'hola';
            

        }else{

            echo "Error al subir el archivo";

        }

    }else{
        echo $msg;
    }*/

?>