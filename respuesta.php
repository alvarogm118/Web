<?php
require_once 'conectar.php';

define("RECIPIENT_NAME", "Alvaro Gomez");
define("RECIPIENT_ADDRES", "alvaro.gomezm118@ono.com");
define("EMAIL_SUBJECT", "Formulario PHP");

$senderName = $_REQUEST['name'];
if (!isset($senderName)) {
    $errorName = "Debe escribir su nombre";
} else {
    $senderName = filter_var($senderName, FILTER_SANITIZE_STRING);
    if ($senderName == "") {
        $errorName = "Debe escribir un nombre válido";
    }
}

$senderEmail = $_REQUEST['mail'];
if (!isset($senderEmail)) {
    $errorEmail = "Debe escribir una dirección de correo";
} else {
    $senderEmail = filter_var($senderEmail, FILTER_SANITIZE_EMAIL);
    if (!filter_var($senderEmail, FILTER_VALIDATE_EMAIL)) {
        $errorEmail = "La dirección de correo electrónica es incorrecta";
    }
}

$message = $_REQUEST['message'];
if (!isset($message)) {
    $errorMessage = "Debe escribir un mensaje";
} else {
    $message = filter_var($message, FILTER_SANITIZE_STRING);
    if ($message == "") {
        $errorMessage = "Debe escribir un mensaje válido";
    }
}

$success = false; //Se enviará el correo si ttodo está en orden
if (!isset($errorEmail) && !isset($errorName) && !isset($errorMessage)) {
    $recipient = RECIPIENT_NAME . " <" . RECIPIENT_ADDRES . ">";
    $headers = "From: " . $senderName . " <" . $senderEmail . ">";
    $success = mail($recipient, EMAIL_SUBJECT, $message, $headers);
}

//Fichero

ini_set('display_errors', 'On'); //Muestra mensajes de error al depurar
error_reporting(E_ALL | E_STRICT); //Nos indica niveles de error (todos)

function find_spaces($name)
{
    return strpos($name, ' ');
}

function is_valido($fichero)
{
    $extValidas = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES[$fichero]["name"]);
    $extension = end($temp);
    $tipo = $_FILES[$fichero]["type"];
    $tiposValidos = array("image/jpeg", "image,jpg", "image/pjeg", "image/x-png", "image/png");
    $maxTamano = 10000000; // Como mucho 10MB de imagen
    // echo "<p>Extensión válida " . in_array($extension, $extValidas) . "</p>";
    // echo "<p>Tipo válido " . in_array($tipo, $tiposValidos) . "</p>";
    // echo "<p>Tamaño " . $_FILES[$fichero]["size"] . "</p>";
    // echo "<p>Tamaño permitido " . ($_FILES[$fichero]["size"] < $maxTamano) . "</p>";
    return (in_array($extension, $extValidas)
        && in_array($tipo, $tiposValidos) && ($_FILES[$fichero]['size'] < $maxTamano));
}

/* function muestraFichero($fichero){
    echo "<p>Subido: " . $_FILES[$fichero]['name'] . "</p>";
    echo "<p>Tipo: " . $_FILES[$fichero]['type'] . "</p>";
    echo "<p>Tamaño: " . $_FILES[$fichero]['size'] . "</p>";
    echo "<p>Fichero temporal: " . $_FILES[$fichero]['tmp_name'] . "</p>";
} */

function mueveFichero($origen, $destino)
{
    move_uploaded_file($origen, $destino);
    echo "Almacenado en " . $destino;
}

function existe_directorio($destino)
{
    return file_exists($destino) && is_dir($destino);
}

function error_procesa_fichero($f, $d)
{
    if (!is_valido($f)) {
        return "Fichero inválido";
    } elseif (find_spaces($_FILES[$f]['name']) != false) {
        return "Nombre con espacios";
    } elseif ($_FILES[$f]["error"] > 0) {
        return "Error: " . $_FILES[$f]['error'];
    } else {
        $fichero_movido = $d . $_FILES[$f]['name'];
        if (!existe_directorio($d)) {
            return "Error: no existe el directorio destino $d";
            // mkdir $d;
        } elseif (file_exists($fichero_movido)) {
            return "Ya existe el fichero " . $fichero_movido;
        } else {
            mueve_fichero($_FILES[$f]['tmp_name'], $fichero_movido);
            return false;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KoSaEducation</title>
    <meta name="description"
          content="This is a basic starter template for MMPilot which includes Bootstrap Framework."/>
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,600,700" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico">
    <script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
</head>

<body style="color:#232E38" id="top">

<header class="tf-header-form">

    <?php
    if ($success):
        ?>
        <div class="panel panel-succes">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 style="color:#232E38" ;>¡Gracias por contactarnos!</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p style="color:#232E38" ; class="mt-4">Aquí le dejamos los datos que ha enviado para que pueda
                            comprobarlos:</p>
                    </div>
                </div>
            </div>
        </div>
    <?php
    else:
        ?>
        <div class="panel panel-danger">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 style="color:#232E38" ;>¡Ha ocurrido un error!</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="mt-4">Por favor, inténtelo de nuevo.</p>
                    </div>
                </div>
            </div>
        </div>
    <?php
    endif
    ?>

</header>

<div class="container">
    <div class="row">
        <div class="col-8">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th scope="row">Nombre</th>
                    <td><?php echo $senderName ?></td>
                </tr>
                <tr>
                    <th scope="row">Correo Electrónico</th>
                    <td><?php echo $senderEmail ?></td>
                </tr>
                <tr>
                    <th scope="row">Mensaje</th>
                    <td><?php echo $message ?></td>
                </tr>
                <tr>
                    <th scope="row">Imagen</th>
                    <td>
                        <?php
                        $f = 'foto';
                        $d = "../tmp/";
                        if (!is_valido($f)) {
                            echo "<p>Fichero inválido</p>";
                        } elseif (find_spaces($_FILES[$f]['name']) != false) {
                            echo "<p>Nombre con espacios</p>";
                        } elseif ($_FILES[$f]["error"] > 0) {
                            echo "<p>Error: " . $_FILES[$f]['error'] . "</p>";
                        } else {
                            //muestraFichero($f);
                            $fichero_movido = $d . $_FILES[$f]['name'];
                            if (!existe_directorio($d)) {
                                echo "<p>Error: no existe el directorio destino $d </p>";
                            } elseif (file_exists($fichero_movido)) {
                                echo "<p>" . $fichero_movido . " ya existe.</p>";
                            } else {
                                echo "<p>Imagen Válida" . "</p>";
                                mueveFichero($_FILES[$f]['tmp_name'], $fichero_movido);
                            }
                        }
                        ?>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container">

    <?php
    $error_fichero = error_procesa_fichero($f, $d);

    if ($error_fichero != false) {
        $sql_insert = "INSERT INTO `BBDD` (nombre, email, mensaje, imagen) " . "
			      VALUES (:nombre, :email, :mensaje, :imagen)";
        try {
            $sentencia = $db->prepare($sql_insert);
            $sentencia->execute(array(
                    'nombre' => $senderName,
                    'email' => $senderEmail,
                    'mensaje' => $message,
                    'imagen' => $_FILES[$f]['name'])
            );
        } catch (PDOException $error) {
            die("Error a insertar " . $error->getMessage());
        }
    }

    ?>
    <div class="row">
        <div class="col-12">
            <h4 style="color:#232E38" ;>Aquí puede ver la BBDD con el resto de mensajes</h4>
            <table class="table table-bordered">
                <tbody>
                <?php
                $sql = "SELECT  nombre, email, mensaje, imagen FROM BBDD LIMIT 6";
                foreach ($db->query($sql) as $fila) {
                    ?>
                    <tr>
                        <th>
                            <?php print $fila['nombre']; ?>
                        </th>
                        <td>
                            <?php print $fila['email']; ?>
                        </td>
                        <td>
                            <?php print $fila['mensaje']; ?>
                        </td>
                        <td>
                            <?php print $fila['imagen']; ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

</div>


<footer class="footerdown bg-dark py-4 mt-5 tf-footer">
    <div class="container text-light">
        <div class="row">
            <div class="col-md-6 col-sm-12">&copy; KoSaEducation. All rights reserved.</div>
            <div class="col-md-6 col-sm-12 text-right tf-design">Design - <a href="https://templateflip.com"
                                                                             target="_blank">Templateflip</a></div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="scripts/main.js"></script>
</body>

</html>
