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
        <title>Venta de productos</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript">

            $(window).scroll(function () {
                var sticky = $('.sticky'),
                        scroll = $(window).scrollTop();

                if (scroll >= 100)
                    sticky.addClass('fixed');
                else
                    sticky.removeClass('fixed');
            });
        </script>

    </head>

    <body>
        <header class="grey-light sticky" >

            <div class="flex-align contenedor-interno header-section">
                <div class="logo ">
                    <i class="material-icons grey-darken-text">account_balance</i>
                </div>
                <nav  id="main-header">
                    <ul class="flex-align">
                        <li><a  class=" grey-darken-text" href="#">Menu 1</a></li>
                        <li><a  class=" grey-darken-text" href="#">Menu 2</a></li>
                        <li><a  class=" grey-darken-text" href="#">Menu 3</a></li>
                    </ul>
                </nav>
                <div>
                    <a href=""><i class="material-icons grey-darken-text">email</i></a> 
                </div>
            </div>
        </header>

        <section class="grey-light grey-darken-text presentacion ">
            <div class="contenedor-interno flex-align  ">  

                <div class="item-align" >
                    <h1>Lorem ipsum dolor sit amet</h1>
                </div>
                <div class="item-align  grey grey-text">
                    <div class="contenedor-interno">
                        <p> Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                        <br>
                        <a href=""> Lorem ipsum</a>
                    </div>
                </div>

            </div> 

        </section>

        <section class="grey grey-text">
            <div class="contenedor-interno flex-align servicios">  
                <div> 
                    <h1><strong>Nuestros</strong> servicios</h1> 
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                    <br>
                    <a href="" class="grey-text">Lorem ipsum</a>
                </div>

                <div class="item-align">
                    <i class="material-icons">settings_input_component</i>
                    <h3>  Lorem Ipsum</h3>
                </div>
                <div class="item-align">
                    <i class="material-icons">settings_remote</i>
                    <h3> Lorem Ipsum</h3>
                </div>
                <div class="item-align">
                    <i class="material-icons">settings_phone</i>
                    <h3> Lorem Ipsum</h3>
                </div>
            </div> 
        </section>


        <section class=" grey-light grey-darken-text">
            <div class="contenedor-interno flex-align quienes-somos">  
                <div class="item-align">
                    <img src="assets/images/puzzle-pezzo.png">
                </div>
                <div class="item-align">
                    <h1><strong>Nuestro</strong> equipo</h1> 

                    <h3>  <i class="material-icons">face</i> Quienes somos</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                    <br>
                    <h3>   <i class="material-icons">favorite_border</i>Que hacemos</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                </div>
            </div> 
        </section>


        <footer class="grey grey-text">
            <div class="contenedor-interno flex-align ">
                <div>
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
                <div class="item-align">
                    <h2><strong>Elaborado </strong> por</h2>
                    <ul>
                        <li>Yadira Torres</li>
                        <li>Yeferson Torres</li>
                        <li>Samuel López</li>
                    </ul>

                </div>
                <div class="item-align">
                    <h2><strong>Lorem </strong> impsu</h2>
                    <ul>
                        <li>Lorem impsu</li>
                        <li>Lorem impsu</li>
                        <li>Lorem impsu</li>
                    </ul>

                </div>



            </div> 
            <div class="copyrigth">
                <p>@Copyright 2016</p>
            </div>

        </footer>
    </body>
</html>
