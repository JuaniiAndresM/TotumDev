<?php
class servidor
{
    function conectar()
    {
        if (!$conexion = mysqli_connect('totumdev.uy', 'nqjctkft_totumdev', 'Manuni7817', 'nqjctkft_totumdev')) {
            echo "No se pudo conectar a la base de datos";
            exit;
        } else {
            $sql = "set names 'utf8'";
            mysqli_query($conexion, $sql);
            return $conexion;
        }
    }


    function TraerPost(){
        $conn = $this->conectar();
        $post = array();
        $sql = "CALL TraerPost()";
        $stmts = $conn->prepare($sql);


        if ($stmts->execute()) {
            $stmts->store_result();
            $stmts->bind_result($idblog, $titulo, $subtitulo, $contenido, $imagen, $autor, $fechapublicacion);
            while ($stmts->fetch()) {
                $data = array('id' => $idblog, 'titulo' => $titulo, 'subtitulo' => $subtitulo, 'contenido' => $contenido, 'imagen' => $imagen, 'autor' => $autor, 'fechapublicacion' => $fechapublicacion);
                $post[] = $data;
            }
            $stmts->close();
        }
        return $post;
    }

    function CrearPost($titulo, $subtitulo, $contenido, $imagen, $autor, $fecha){
        $conn = $this->conectar();
        $sql = "CALL CrearPost(?,?,?,?,?,?)";
        $stmts = $conn->prepare($sql);
        $execute = false;

        $stmts->bind_param("ssssss", $titulo, $subtitulo, $contenido, $imagen, $autor, $fecha);
        if($stmts->execute()){
            $execute = true;            
        }else{
            $execute = $stmts->error;
        }
        return $execute;
    }


}
?>