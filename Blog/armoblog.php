<?php
include '../Servidor/servidor.php';
$server= new servidor();

$post = $server->TraerPost();

$postlength = count($post);

$plantillaPost = '';

for($x = 0; $x < $postlength; $x++){

    $str = $post[$x]["contenido"];

    $plantillaPost .= ' <div class="post">
                            <div class="post-img">
                                <img src="'.$post[$x]["imagen"].'" alt="" />
                            </div>

                            <h1>'.$post[$x]["titulo"].'</h1>
                            <hr>
                            <p class="desc">';

                            if (strlen($str) > 100){
                                $str = substr($str, 0, 97) . '...';

                                $plantillaPost .= $str;
                            }else{
                                $plantillaPost .= $post[$x]["contenido"];
                            }

                            $plantillaPost .= '  </p>

                            <button onclick="post('.$post[$x]["id"].')">Ver más <i class="fas fa-angle-double-right"></i></button>
                        </div>';
}


echo $plantillaPost;
return $plantillaPost;


?>