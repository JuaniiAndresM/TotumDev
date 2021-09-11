<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../Contacto/PHPMailer/src/Exception.php';
require '../../Contacto/PHPMailer/src/PHPMailer.php';
require '../../Contacto/PHPMailer/src/SMTP.php';

/*------------------------------------------------------------------------------------------*/
// Importar Variables (Opcional)
//
$plan = $_POST['plan'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$comentario = $_POST['comentario'];
//
/*------------------------------------------------------------------------------------------*/

$mail = new PHPMailer(true);

$mail->SMTPDebug = 0; 
$mail->IsSMTP();

$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;  // TCP port to connect to
$mail->CharSet = 'UTF-8';


$mail->Username ='totumdevcontacto@gmail.com';  //  Editar
$mail->Password = 'manuni7817'; //  Editar


$mail->From = $email; //  Editar
$mail->FromName = 'TotumDev';  //  Editar
$mail->addAddress('totumdevcontacto@gmail.com', $nombre);  //  Editar
$mail->isHTML(true);
$mail->Subject = "Nuevo Mensaje De: " . $nombre;    //  Editar

$mail->Body    = '  <div class="mail" style="max-width: 600px; background: #7200ff;">
                            <table style="width: 100%; background: linear-gradient(120deg, #42191b, #702c2e); border: none;" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td style="height: 150px; padding: 20px; text-align: center;">
                                        <img src="https://i.imgur.com/SKZoLgs.png" alt="" style="max-width: 300px;" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img
                                            style="width: 100%; height: 100px; margin: 0; padding: 0; vertical-align: middle;"
                                            class="vector-top"
                                            src="https://i.imgur.com/UHCg5RQ.png"
                                            alt=""
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="mail-content" style="width: 100%; padding: 40px 0; margin-top: -120px; background: white;">
                                            <h1 style="width: 80%; margin: 20px auto; color: #702c2e; font-family: Comfortaa;">Nueva Solicitud de Contacto</h1>
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                <b>Tipo de Plan</b>: ' . $plan . '
                                            </p>
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                <b>Nombre</b>: ' . $nombre . '
                                            </p>
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                <b>Correo Electronico</b>: ' . $email . '
                                            </p>
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                <b>Celular / Telefono</b>: ' . $celular . '
                                            </p>
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                ' . $comentario . '
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="mail-footer" style="width: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center; background: #42191b;">
                                        <p style="color: #aaa; font-size: 1em; margin: 5px auto; font-family: Comfortaa;">Copyright © 2021 <b style="font-weight: normal; color: white;">TotumDev</b>. Todos los derechos reservados.</p>
                                    </div>
                                    </td>
                                </tr>
                            </table>
                        </div>';


try {
    $mail->send();
    echo 1;
    return 1;

} catch (Exception $e) {

    echo "Mailer Error: " . $mail->ErrorInfo;
    //echo 0;
    return 0;
}
