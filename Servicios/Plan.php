<?php

$plan = $_GET['Plan'];

$tipo_plan = "";

if($plan == 1){
    $tipo_plan = "OnePage";
}
else if($plan == 2){
    $tipo_plan = "Corporativo";
}
else if($plan == 3){
    $tipo_plan = "Inmobiliaria";
}

echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="https://www.totumdev.uy/media/svg/Favicon.svg" type="image/x-icon"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/1e193e3a23.js" crossorigin="anonymous"></script>
        <script src="https://www.totumdev.uy/Javascript/hyf.js"></script>
        <script src="https://www.totumdev.uy/Servicios/JS/MailPlan.js"></script>

        <link rel="stylesheet" href="https://www.totumdev.uy/styles/styles.css">
        <title>TotumDev | Contratar Plan</title>
    </head>
    <body>

        <div id="header"></div>

        <div class="plan-wrapper-form">
            <img class="mont1" src="https://www.totumdev.uy/media/svg/Mont1.svg" alt="" />
            <img class="mont2" src="https://www.totumdev.uy/media/svg/Mont2.svg" alt="" />

            <form action="javascript: enviar()" method="POST">
                <img src="https://www.totumdev.uy/media/svg/LogoHorizontal.svg">

                <div class="input-wrapper">

                    <label for="Plan">Tipo de Plan:</label>
                    <input type="text" placeholder="Tipo de Plan" name="Plan" id="plan" readonly value="'.$tipo_plan.'"/>

                    <label for="nombre">Nombre:</label>
                    <input type="text" placeholder="Nombre Completo" name="nombre" id="nombre" required/>

                    <label for="email">Email:</label>
                    <input type="email" placeholder="Correo Electronico" name="email" id="email" required/>

                    <label for="Celular">Celular:</label>
                    <input type="text" placeholder="Celular" name="Celular" id="celular" required/>

                    <label for="Comentario">Comentario:</label>
                    <textarea placeholder="¿Qué tienes en mente?" name="Comentario" id="comentario" required></textarea>

                </div>

                <div class="loader">
                    <i class="fas fa-spinner"></i>
                </div>

                <p class="mensaje"></p>

                <input type="submit" value="Enviar" />
            </form>

        </div>

        <div id="footer"></div>

    </body>
    </html>';

?>