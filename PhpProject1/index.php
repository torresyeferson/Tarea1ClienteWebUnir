<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
    Created on : 11-ene-2017, 9:19:51
    Author     : Yadira Torres, Yeferson Torres, Samuel Lopez
-->

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta name="author" content="Yadira Torres, Yeferson Torres, Samuel López">
        <title>Venta de computadores y accesorios</title>
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="assets/css/mobile.css" media="screen" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/funcionalidades.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
    </head>
    <body>
        <header class="grey-light-1 sticky" >
            <div class="flex-align contenedor-interno header-section">
                <div class="logo ">
                    <i class="material-icons grey-darken-text">account_balance</i>
                </div>
                <nav  id="main-header">
                    <ul class="flex-align">
                        <li><a  class=" grey-darken-text" href="#">Inicio</a></li>
                        <li><a  class=" grey-darken-text" href="pages/productos.php">Productos</a></li>
                        <li><a  class=" grey-darken-text" href="#servicios">Servicios</a></li>
                        <li><a  class=" grey-darken-text" href="#galeria">Galería</a></li>
                        <li><a  class=" grey-darken-text" href="#equipo">Equipo</a></li>
                        <li><a  class=" grey-darken-text" href="#consulta">Consulta</a></li>
                    </ul>
                </nav>
                <div>
                    <a href=""> <i class="material-icons grey-darken-text">find_in_page</i></a> 
                    <a href="#openModal"><i class="material-icons grey-darken-text">email</i></a> 
                </div>
            </div>
        </header>
        <section class="grey-light grey-darken-text presentacion ">
            <div class="contenedor-interno flex-align  ">  
                <div class="item-align" >
                    <h1><strong>Actualízate con</strong> lo último en tecnología</h1>
                </div>
                <div class="item-align  descripcion grey-text">
                    <div class="contenedor-interno">
                        <br>
                        <p> Descubre nuestras increíbles ofertas en equipos portatiles y de escritorio</p>
                        <br>
                        <center>
                            <a href="#openModal" class="grey-text"> Solicita más información</a>
                        </center>
                        <br> 
                    </div>

                </div>
            </div> 
        </section>
        <a name="servicios" class="marcador"></a>
        <section class="grey grey-text">
            <div class="contenedor-interno flex-align servicios">  
                <div> 
                    <h1><strong>Nuestros</strong> servicios</h1> 
                    <p>Queremos satisfacer las necesidades de nuestros clientes, ofreciendole equipos que se ajusten a sus necesidades. </p>
                    <br>
                    <a href="pages/productos.php" class="grey-text">Conoce nuestros productos</a>
                </div>
                <div class="item-align">
                    <i class="material-icons">computer</i>
                    <h3>  Computadores portátiles</h3>
                </div>
                <div class="item-align">
                    <i class="material-icons">desktop_windows</i>
                    <h3> Computadores de escritorio</h3>
                </div>
                <div class="item-align">
                    <i class="material-icons">mouse</i>
                    <h3> Accesorios</h3>
                </div>
            </div> 
        </section>
        <a name="galeria" class="marcador"></a>
        <section class="grey-light-1 grey-darken-text">
            <div class="contenedor-interno flex-align galeria">  
                <div class="item-align">
                    <div class="contenedor-interno grey-text" >
                        <ul id="slider" class="slider-wrapper">
                            <li class="slide-current">
                                <img src="assets/images/image1.png" alt="Slider Imagen 1">
                                <div class="caption">
                                    <h3 class="caption-title">Equipos portartiles</h3>
                                    <p>Tenemos las últimas tendencias en equipos portatiles</p>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/image2.png" alt="Slider Imagen 2">
                                <div class="caption">
                                    <h3 class="caption-title">Equipos de escritorio</h3>
                                    <p>Estamos a la vanguardia con las mejores ofertas en equipos de escritorio </p>
                                </div>
                            </li>
                            <li>
                                <img align src="assets/images/image3.png" alt="Slider Imagen 3">
                                <div class="caption">
                                    <h3 class="caption-title">Equipos táctiles</h3>
                                    <p>Tenemos los mejores equipos táctiles que se ajustan a tus necesidades</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul id="slider-controls" class="slider-controls">
                    </ul>
                </div>
                <div class="item-align"> 
                    <h1><strong>Galería de </strong> productos</h1> 
                    <p>Los Mejores Laptops, Computadoras y Accesorios, consulta nuestros precios y solicita más información. </p>
                    <br>
                </div>
            </div> 
        </section>
        <a name="consulta" class="marcador"></a>
        <section class="grey grey-text consulta">
            <div class="contenedor-interno">
                <i class="material-icons">email</i>
                <h1><strong>¿Te interesan</strong> nuestros productos?</h1>
                <p>Ponte en contacto, ingresa a nuestro formulario de consultas y déjanos tus comentarios.</p>
                <br>
                <a href="#openModal" class="grey-text"> Solicita más información</a>
            </div>

            <div id="openModal" class="modalDialog">
                <div class="grey grey-text">
                    <a href="#close" title="Close"  class="close grey-light grey-darken-text"><strong>X</strong></a>
                    <h2><strong>Envíanos </strong> tus comentarios</h2>

                    <form> 
                        <div class="flex-align">
                            <div class="item-align">
                                <label for="nombre">Nombres:</label> 
                                <input  class="grey-text" type="text" placeholder="Escribe tus nombres..." name="nombre" required /> 
                            </div>  
                            <div class="item-align">
                                <label for="apellido">Apellidos:</label> 
                                <input class="grey-text" type="text" placeholder="Escribe tus apellidos..." name="apellido" required />
                            </div>  
                        </div>
                        <div class="flex-align">
                            <div class="item-align">
                                <label for="correo">Correo:</label> 
                                <input  class="grey-text" type="text" placeholder="ejemplo@email.com" name="correo" required />
                            </div> 
                            <div class="item-align">
                                <label for="interes">Interés:</label> 
                                <input  class="grey-text" type="text" placeholder="Escribe tu interés" name="interes" required />
                            </div> 
                        </div>
                        <br>
                        <label for="consulta">Escribe tu consulta:</label> 
                        <textarea class="grey-text" rows="4" placeholder="Escribe tu consulta..." name="consulta" required ></textarea>
                        <br> <br>
                        <button class="submit grey-text" type="submit">CONSULTAR</button> 
                    </form>
                </div>
            </div>
        </section>
        <a name="equipo" class="marcador"></a>
        <section class=" grey-light grey-darken-text">
            <div class="contenedor-interno flex-align quienes-somos">  
                <div class="item-align">
                    <img src="assets/images/puzzle-azul.png">
                </div>
                <div class="item-align">
                    <h1><strong>Nuestro</strong> equipo</h1> 
                    <h3><i class="material-icons">face</i> ¿Quiénes somos?</h3>
                    <p>Jóvenes emprendedores que quieren llegar a ser un ícono en tecnologías en Ecuador. </p>
                    <br>
                    <h3><i class="material-icons">favorite_border</i>¿Qué hacemos?</h3>
                    <p>Nos dedicamos a la comercialización de equipos portatiles y de escritorio. Además contamos con una gama de accesorios.</p>
                </div>
            </div> 
        </section>
        <footer class="grey grey-text">
            <div class="contenedor-interno flex-align ">
                <div class="item-align contacto">
                    <p>                        
                        <i class="material-icons">call</i> 098765432
                    </p>
                    <p>
                        <i class="material-icons">receipt</i> ejemplo@email.com
                    </p>
                    <p>
                        <i class="material-icons">room</i>Ecuador
                    </p>
                </div>
                <div class="item-align ">
                    <center>
                        <i class="material-icons">face</i> 
                        <h2> <strong>Quienes </strong> somos</h2>
                    </center>
                    <ul>
                        <li>Yadira Torres</li>
                        <li>Yeferson Torres</li>
                        <li>Samuel López</li>
                    </ul>
                </div>
                <div class="item-align">
                    <h2><strong>Acerca </strong> de</h2>
                    <ul>
                        <li><a class="grey-text" href="#servicios">Nuestros servicios</a></li>
                        <li><a class="grey-text" href="#galeria">Galería de productos</a></li>
                        <li><a class="grey-text" href="#equipo">Nuestro equipo</a></li>
                    </ul>
                </div>
            </div> 
            <div class="copyrigth">
                <p>@Copyright 2017</p>
            </div>
        </footer>
    </body>
</html>
