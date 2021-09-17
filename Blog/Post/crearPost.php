<!DOCTYPE html>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
      src="https://kit.fontawesome.com/1e193e3a23.js"
      crossorigin="anonymous"
    ></script>
    <script src="/Javascript/hyf.js"></script>
    <script src="/Blog/Post/crearPost.js"></script>

    <link rel="stylesheet" href="/styles/styles.css" />
    <title>TotumDev | Crear Post</title>
  </head>
  <body>
    <div id="header"></div>

    <div class="plan-wrapper-form">
      <img
        class="mont1"
        src="/media/svg/Mont1.svg"
        alt=""
      />
      <img
        class="mont2"
        src="/media/svg/Mont2.svg"
        alt=""
      />

      <form action="crear.php" enctype="multipart/form-data" method="POST">
      
        <img src="/media/svg/LogoHorizontal.svg" />

        <h1>Crear Post</h1>
        <div class="input-wrapper">
            <label for="titulo">Titulo:</label>
            <input
              type="text"
              placeholder="Titulo"
              name="titulo"
              id="titulo"
              required
            />

          <label for="subtitulo">Subtitulo:</label>
          <input
            type="text"
            placeholder="Subtitulo"
            name="subtitulo"
            id="subtitulo"
            required
          />

          <input name="uploadedfile" type="file" />

          <label for="Contenido">Contenido:</label>
          <textarea
            placeholder="Contenido del Post"
            name="Contenido"
            id="contenido"
            required
          ></textarea>

          <label for="Autor">Autor:</label>
          <input
            type="text"
            placeholder="Autor"
            name="Autor"
            id="autor"
            required
          />

          <label for="Fecha">Fecha:</label>
          <input
            type="text"
            placeholder="Fecha"
            name="Fecha"
            id="fecha"
            value=" <?php
                      date_default_timezone_set('America/Montevideo');
                      $date = date('Y-m-d');

                      echo $date;
            
                    ?>"
            readonly
          />

        </div>
        <div class="loader">
          <i class="fas fa-spinner"></i>
        </div>

        <p class="mensaje"></p>

        <input type="submit" value="Enviar" />
      </form>
    </div>

    <div id="footer"></div>

    <script src="ckeditor/ckeditor.js"></script>
    <script>
      CKEDITOR.replace('Contenido');
    </script>
  </body>
</html>
