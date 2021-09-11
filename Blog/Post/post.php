<?php

include '../../Servidor/servidor.php';
$server= new servidor();

$id = $_GET['ID'] - 1;

$post = $server->TraerPost();
$cantidadPost = count($post);

$fecha = $post[$id]["fechapublicacion"];

$fechaseparada = explode('-', $fecha);
$año = $fechaseparada[0];
$mes   = $fechaseparada[1];
$dia  = $fechaseparada[2];

$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

$monthNumber = date('n', mktime(0, 0, 0, $mes, 10));

$mes = $meses[($monthNumber - 1)];

echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="/media/svg/Favicon.svg"
      type="image/x-icon"
    />

    <script
      src="https://kit.fontawesome.com/1e193e3a23.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/Javascript/hyf.js"></script>

    <link rel="stylesheet" href="/styles/styles.css" />
    <title>TotumDev | Post</title>
  </head>
  <body>
    <div id="header"></div>

    <section class="blog-wrapper">

      <div class="post">
        <h1>'.$post[$id]["titulo"].'</h1>

              <div class="post-content">
                  <div class="post-body">
                  
                  <hr />
                  <h3>'.$post[$id]["subtitulo"].'</h3>
                  <p>
                  '.$post[$id]["contenido"].'
                  </p>
                  <div class="autorfecha">
                      <p>'.$post[$id]["autor"].' - '.$dia.' de '.$mes.' de '.$año.'</p>
                  </div>
                  </div>
                  <div class="post-img">
                  <img src="'.$post[$id]["imagen"].'" alt="" />
                  </div>
              </div>
              <div class="button-wrapper">';

              if(($id + 1) < $cantidadPost){
                echo '<button onclick="post('.(($id + 1) + 1).')" id="anterior"><i class="fas fa-chevron-circle-left"></i> Post Anterior</button>';
              }else{
                echo '<div></div>';
              }
              if(($id + 1) > 1){
                echo '<button onclick="post('.(($id + 1) - 1).')" id="siguiente"><i class="fas fa-chevron-circle-right"></i> Post Siguiente</button>';
              }                  
              echo '  
              </div>
      </div>

    </section>

    <div id="footer"></div>
  </body>
</html>'
?>
