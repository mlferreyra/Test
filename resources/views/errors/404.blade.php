<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Vida Digital Test</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,900;1,900&family=Source+Sans+Pro:wght@900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css" >
    </head>
    <body>
        <div id="cargando">
            <img src="{{asset('images/puff.svg')}}"  alt="precarga">
        </div>
        <div class="error">  
            <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
                <div class="container-fluid menu-contenedor">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">   
                        <div class="row">             
                            <div class="col login">
                                <ul class="navbar-nav">
                                    <li class="">
                                        <a class="error-login_a" aria-current="page" href="/">Home</a>
                                    </li>
                                    <li class="">
                                        <a class="error-login_a" href="{{ route('login') }}" tabindex="-1" aria-disabled="true">Login</a>
                                    </li>
                                </ul> 
                            </div> 
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container contenedor-404">
                <br>
                <br>
                    <i class="under-construction color-pasific"></i><i class="under-construction color-dark"></i><br>
                <br>
                <div class="alineado">
                    <p class="error-text">Oops.. nothing here</p>
                </div>
                <div class="">
                    <h1 class="error-code"><strong>404</strong></h1>
                </div>
            </div>   
        </div>   

        <footer>
            <div class="container">
                <p class="footer-error">©2021 Todos los derechos reservados.</p>
            </div>
        </footer>


        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <script>
            function cargando(){
                setTimeout(function(){ 
                    $("#cargando").fadeOut(300); 
                }, 800);    
            }

            $( document ).ready(function(){
                cargando();
                if(screen.width < 766){
                    $('nav').addClass("navbar2");
                }
                $(window).scroll(function() {    
                    var scroll = $(window).scrollTop();
                    console.log("scroll",scroll);
                    console.log(screen.width)
                    if(screen.width > 766){
                        if (scroll > 0) {
                            $('nav').removeClass("navbar");
                            $('nav').addClass("navbar2");
                        } else {
                            $('nav').removeClass("navbar2");
                        }
                    }
                });
            });
        </script>      
    </body>
</html>

