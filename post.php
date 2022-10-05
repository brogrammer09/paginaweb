<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resumi</title>
        <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/560/560277.png" />
        
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <style>
        #foto{
            width: 120px;
            height: 190px;
        }
        fieldset{
            
            border: black 2px solid;
            margin-bottom: 10px;
        }
        #principal{
            border: solid 2px black;
            width:80%;
            margin: 0 auto;
            padding: 10px;
        }
        legend{
            border: solid 2px black;
            padding: 5px;
            font-weight: bold;
            border-radius: 20px;
            background-color: #F5EDDC;

        }
        #foto{
            margin: 5px;
            border: solid 4px black;
        }
        #principal{
            background-color: #F5EDDC;

        }
    </style>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
            <img src="https://cdn-icons-png.flaticon.com/512/560/560277.png" alt="" width="90px" >
                <a class="navbar-brand" href="index.html">Pagina Personal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">Quien soy?</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.php">Curriculum</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.php">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <header class="masthead" style="background-image: url('assets/img/resumi-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>Mi Curriculum</h1>
                            <h2 class="subheading"></h2>
                           
                        </div>
                    </div>
                </div>
            </div>
        </header>
       
        <div id="principal">
            <img src="./assets/img/foto.jpeg" alt="" id="foto">
            <h2>José Pablo Vargas Folgar</h2>

            <br><br>

            <fieldset>
                <legend>Datos generales</legend>
                <ul>
                    <li>DPI: 3003573380101</li>
                    <li>Direccion: Parramos Chimaltenango</li>
                    <li>Celular: +502 5913 6768</li>
                    <li>Email: jpablovargas.04@gmail.com</li>
                </ul>
            </fieldset>

            <fieldset>
                <legend>Estudios Realizados</legend>
                <ul>
                    <li>Estudios Primarios: Escuela San bernabé   <strong>2012-2014</strong></li>
                    <li>Estudios Basicos: Colegio Tridentino    <strong>2018-2020</strong></li>
                    <li>Estudios de diversificado: Liceo integral cientifico en computación   <strong>2021-2022</strong></li>
                </ul>
            </fieldset>
            <fieldset>
                <legend>Idiomas Dominados</legend>
                <ul>
                    <li>Español</li>
                    <li>Ingles A2</li>
                </ul>
            </fieldset>
            <fieldset>
                <legend>Lenguajes de programación</legend>
                <ul>
                    <li>Java</li>
                    <li>C++</li>
                    <li>PHP</li>
                    <li>Javascript</li>
                    <li>Python</li>
                </ul>
            </fieldset>
            <fieldset>
                <legend>Habilidades</legend>
                <ul>
                    <li>Lectura fluida</li>
                    <li>Retención de temas</li>
                    <li>Paciencia</li>
                </ul>
            </fieldset>
            
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="https://api.whatsapp.com/send?phone=50259136768">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fa-brands fa-whatsapp fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/profile.php?id=100010250469903">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/jpablovargas.04/">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fa-brands fa-instagram fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; JPablo</div>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <script src="js/scripts.js"></script>
    </body>
</html>
