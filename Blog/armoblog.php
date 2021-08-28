<?php
include '../Servidor/servidor.php';
$server= new servidor();

$post = $server->TraerPost();

$postlength = count($post);

$plantillaPost = '';

for($x = 0; $x < $postlength; $x++){
    $plantillaPost .= ' <div class="post">
                            <div class="post-img">
                                <img src="'.$post[$x]["imagen"].'" alt="" />
                            </div>

                            <h1>'.$post[$x]["titulo"].'</h1>
                            <hr>
                            <p class="desc">
                                '.$post[$x]["contenido"].'
                            </p>

                            <button onclick="post('.$post[$x]["id"].')">Ver más <i class="fas fa-angle-double-right"></i></button>
                        </div>';
}


echo $plantillaPost;
return $plantillaPost;


?>