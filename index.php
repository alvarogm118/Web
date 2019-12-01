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
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>

    <style type="text/css">
        /* Reloj */
        #clocks-container {
            padding: 10px;
            width: 50%;
            margin: 30px auto;
            text-align: center;
        }

        /* SAMPLE CSS STYLES FOR JQUERY CLOCK PLUGIN */
        .jqclock {
            text-align: center;
            border: 2px #369 ridge;
            background-color: #232E38;
            padding: 10px;
            margin: 20px auto;
            width: 75%;
            box-shadow: 5px 5px 15px #005;
        }

        .clockdate {
            color: #FFFFFF;
            font-weight: bold;
            background-color: #232E38;
            margin-bottom: 10px;
            font-size: 18px;
            display: block;
            padding: 5px 0;
        }

        .clocktime {
            border: 2px inset #232E38;
            background-color: #B6E4F5;
            padding: 5px 0;
            font-size: 14px;
            font-family: "Courier";
            color: #E64D3A;
            margin: 2px;
            display: block;
            font-weight: bold;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script type="text/javascript"
            src="//gitcdn.link/repo/Lwangaman/jQuery-Clock-Plugin/master/jqClock.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            customtimestamp = parseInt($("#jqclock").data("time"));
            $("#jqclock").clock({"langSet": "en", "timestamp": customtimestamp});
            $("#jqclock-local").clock({"langSet": "es"});
        });
    </script>
</head>

<body id="top">
<header class="tf-header">
    <h1 class="navbar-brand" style="text-align: center"> KoSaEducation <img src="images/favicon.ico"
                                                                            width="35px"/></h1>
    <nav class="navbar" id="navbar">
        <ul class="nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="#work">Proyecto</a></li>
            <li class="nav-item"><a class="nav-link" href="#des">Desarrolladores</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
        </ul>
    </nav>
</header>

<div class="page-content">
    <div class="container" style="color: #232E38; margin-top: 20px; text-align: center">
        <div class="row">
            <div class="col-12">
                <h2 style="font-weight: bold">KoSaEducation, un único entorno para la gestión, la comunicación, la
                    enseñanza y el aprendizaje</h2>
            </div>
        </div>
    </div>
    <div class="tf-work-section">
        <div class="container" id="work">
            <h2 class="h3">Proyecto</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 pt-2">
                    <div class="card"><img class="img-fluid card-img-top mx-auto" src="images/2-start-simple.jpg"
                                           alt="2-start-simple"/>
                        <div class="card-body">
                            <p class="text-muted">Cubre todas las necesidades de gestión de un centro educativo:
                                facturación, ventas, estructura académica, sistemas de evaluación, programación de
                                aula, documentación oficial, etc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 pt-2">
                    <div class="card"><img class="img-fluid card-img-top mx-auto" src="images/3-start-simple.jpg"
                                           alt="3-start-simple"/>
                        <div class="card-body">
                            <p class="text-muted">Es un punto de encuentro entre el centro y la comunidad educativa.
                                Permite la comunicación en entre ambos de forma rápida y sencilla.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 pt-2">
                    <div class="card"><img class="img-fluid card-img-top mx-auto" src="images/4-start-simple.jpg"
                                           alt="4-start-simple"/>
                        <div class="card-body">
                            <p class="text-muted">Promueve la autonomía del alumno y potencia la metodología propia
                                del centro educativo, aportando flexibilidad en los contenidos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 pt-2">
                    <div class="card"><img class="img-fluid card-img-top mx-auto" src="images/5-start-simple.jpg"
                                           alt="5-start-simple"/>
                        <div class="card-body">
                            <p class="text-muted">Realiza todo la contabilidad financiera, presupuestaria y
                                analítica controlando los documentos administrativos de la empresa y generando
                                multitud de informes y listados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tf-quotes-section">
        <div class="carousel slide mt-5" id="tf-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="active" data-target="#tf-carousel" data-slide-to="0"></li>
                <li data-target="#tf-carousel" data-slide-to="1"></li>
                <li data-target="#tf-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active"
                     style="background-image: url('images/8-start-simple-slider.jpg');">
                    <div class="carousel-caption">
                        <p class="slider-text-1">"La plataforma es muy útil, me ha ayudado a organizarme día a día
                            con el grado."</p>
                        <p class="slider-text-2">Alberto Jiménez<br>Alumno de Grado Superior de Informtáica</p>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('images/9-start-simple-slider.jpg');">
                    <div class="carousel-caption">
                        <p class="slider-text-1">"Gracias a KoSaEducation hemos mejorado nuestro nivel educativo,
                            además de la ayuda que ofrece en el resto de gestiones administrativas."</p>
                        <p class="slider-text-2">Mateo Rodríguez<br>Director del IES Clara del Rey</p>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('images/10-start-simple-slider.jpg');">
                    <div class="carousel-caption">
                        <p class="slider-text-1">"El servicio es muy sencillo de utilizar y los alumnos rápidamente
                            se adaptan al sistema."</p>
                        <p class="slider-text-2">Sofía González<br>Profesora de Grado Superior de Administración y
                            finanzas</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#tf-carousel" role="button" data-slide="prev"><span
                    class="carousel-control-prev-icon" aria-hidden="true"></span><span
                    class="sr-only">Previous</span></a><a class="carousel-control-next"
                                                          href="#tf-carousel" role="button"
                                                          data-slide="next"><span
                class="carousel-control-next-icon" aria-hidden="true"></span><span
                class="sr-only">Next</span></a>
        </div>
    </div>

    <div class="tf-des-section">
        <div class="container" id="des">
            <h2 class="h3">Desarrolladores</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card"><img class="img-des mx-auto" src="images/11-start-simple-des.png"
                                           alt="11-start-simple-des"/>
                        <div class="card-body">
                            <h5 style="color:#232E38; text-align: center"> Oscar Sanz </h5>
                            <p class="text-muted">20 años, estudiante de Grado Superior de Informática en Madrid.
                                Gran manejo de lenguajes de programación y uno de los creadores de este
                                proyecto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card"><img class="img-des mx-auto" src="images/12-start-simple-des.png"
                                           alt="11-start-simple-des"/>
                        <div class="card-body">
                            <h5 style="color:#232E38; text-align: center"> David Sokol </h5>
                            <p class="text-muted">21 años, estudiante de Grado Superior de Informática en Madrid.
                                Buen dominio de equipos informático y junto con Oscar, diseñador de la
                                herramienta.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tf-contact-section">
        <div class="container" id="contact">
            <h2 class="h4">Contacto</h2>
        </div>

        <div class="container" id="contact2">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3 class="h5">Formulario</h3>
                    <form action="respuesta.php" target="_blank" method="POST" enctype="multipart/form-data">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 tf-contact-col">
                                <input class="bg-light form-control" type="text" name="name" placeholder="*Nombre"
                                       required="required"/>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 pb-2">
                                <input class="bg-light form-control" type="email" name="mail"
                                       placeholder="*Correo electrónico" required="required"/>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 pb-2">
                                <label for="foto">Introduce tu foto</label>
                                <input class="bg-light form-control" type="file" name="foto" id="foto"/>
                            </div>
                        </div>
                        <div class="row pb-2 no-gutters">
                            <div class="col-md-12 col-sm-12">
                                    <textarea class="bg-light mb-2 form-control" name="message" placeholder="*Mensaje"
                                              rows="5" required="required"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </form>
                </div>
                <div class="col-md-6 col-sm-12 float-right text-right">
                    <h3 class="h5">Dirección</h3><span>KoSaEducation<br/>España</span>
                    <p></p>
                    <h3 class="h5">Teléfono</h3>
                    <p>+34 912345678</p>
                    <h3 class="h5">Email</h3>
                    <p>kosaeducation@example.com</p>
                </div>
            </div>
        </div>
    </div>

    <div class="tf-clk-section">
        <div class="container" id="clk">
            <div class="row">
                <div class="col-12">
                    <div id="clocks-container">
                        <div id="jqclock-local" class="jqclock"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark py-4 mt-5 tf-footer">
    <div class="container text-light">
        <div class="row">
            <div class="col-md-6 col-sm-12">&copy; KoSaEducation. All rights reserved.</div>
            <div class="col-md-6 col-sm-12 text-right tf-design">Design - <a href="https://templateflip.com"
                                                                             target="_blank">Templateflip</a></div>
        </div>
    </div>
</footer>

<script src="scripts/main.js"></script>


</body>

</html>
