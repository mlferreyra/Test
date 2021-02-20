<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vida Digital Test</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">        
        <link rel="stylesheet" href="css/styles.css" >
    </head>
    <body>
        <div id="cargando">
            <img src="{{asset('images/puff.svg')}}"  alt="precarga">
        </div>
        <div class="encabezado">  
            <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
                <div class="container-fluid menu-contenedor">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <div class="row">
                            <div class="col logo">
                                <img class= "logo-img" src="{{asset('images/Logo6.png')}}" style="display:inline-block" >
                            </div>
                            <div class="col login">
                                <ul class="navbar-nav">
                                    <li class="">
                                        <a class="login_a" aria-current="page" href="/">Home</a>
                                    </li>
                                    <li class="">
                                        <a class="login_a" href="{{ route('login') }}" tabindex="-1" aria-disabled="true">Login</a>
                                    </li>
                                </ul> 
                            </div> 
                        </div>      
                    </div>
                </div>
            </nav>

            <div class="container">
                <div class="row">
                    <div class="intro">
                        <div class="col-12 col-md-12">
                            <h1 class="intro-h1 col text-uppercase">Te guiamos hacia la transformación digital.</h1>
                            <p class="text-uppercase">Construcción de servicios para el mundo de hoy.</p> 
                        </div>                   
                    </div> 
                </div>
            </div>   
            <div class="intro-direction">
                <div class="mouse-icon"><div class="wheel"></div></div>
            </div> 
        </div> 

        <div class="container botonera">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills nav-justified">
                        <li class="quitar_active desarrollo_web_active"><a href="#" onclick="return desarrollo('desarrollo_web')">Desarrollo Web</a></li>
                        <li class="quitar_active desarrollo_movil_active"><a href="#" onclick="return desarrollo('desarrollo_movil')">Desarrollo Móvil</a></li>
                        <li class="quitar_active desarrollo_apis_active"><a href="#" onclick="return desarrollo('desarrollo_apis')">API's</a></li>
                    </ul>
                </div>
            </div>
            <div class="container img-slide">
                <div class="row row-img">                               
                    <div class="col-md-3 col-sm-4 col-xs-6 img-top ocultar-lenguaje desarrollo_movil">
                        <div class="contenedor-img">                            
                            <img class="img-logo" src="{{asset('images/VD-KOTLIN.png')}}">
                        
                            <div class="social">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                            <h5>Kotlin<small class="color-pasific">Desarrollo Móvil</small></h5>  
                        </div>                          
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 img-top ocultar-lenguaje desarrollo_movil"> 
                        <div class="contenedor-img">                            
                            <img class="img-logo" src="{{asset('images/VD-REACTNATIVE.png')}}">
                            
                            <div class="social">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                            <h5>React Native<small class="color-pasific">Desarrollo Móvil</small></h5>                            
                        </div>
                    </div>                
                    <div class="col-md-3 col-sm-4 col-xs-6 img-top ocultar-lenguaje desarrollo_movil">
                        <div class="contenedor-img">
                            <img class="img-logo" src="{{asset('images/VD-SWIFT.jpg')}}">
                        
                            <div class="social">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                            <h5>Swift<small class="color-pasific">Desarrollo Móvil</small></h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 img-top ocultar-lenguaje desarrollo_movil">
                        <div class="contenedor-img">
                            <img class="img-logo" src="{{asset('images/VD-JS.png')}}">
                        
                            <div class="social">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                            <h5>JavaScript<small class="color-pasific">Desarrollo Móvil</small></h5>
                        </div>
                    </div>
                </div>
                <div class="row row-img">
                    <div class="col-md-3 col-sm-4 col-xs-6 img-top ocultar-lenguaje desarrollo_web">
                        <div class="contenedor-img">
                            <img class="img-logo" src="{{asset('images/VD-JS.png')}}">
                        
                            <div class="social">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                            <h5>JavaScript<small class="color-pasific">Desarrollo Web</small></h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 img-top ocultar-lenguaje desarrollo_web">
                        <div class="contenedor-img">
                            <img class="img-logo" src="{{asset('images/VD-CS.png')}}">
                        
                            <div class="social">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                            <h5>C#<small class="color-pasific">Desarrollo Web</small></h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 img-top ocultar-lenguaje desarrollo_web">
                        <div class="contenedor-img">
                            <img class="img-logo" src="{{asset('images/VD-HTML.jpg')}}">
                       
                            <div class="social">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                            <h5>HTML5<small class="color-pasific">Desarrollo Web</small></h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 img-top ocultar-lenguaje desarrollo_web">
                        <div class="contenedor-img">
                            <img class="img-logo" src="{{asset('images/VD-CSS.png')}}">
                        
                            <div class="social">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                            <h5>CSS<small class="color-pasific">Desarrollo Web</small></h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 img-top ocultar-lenguaje desarrollo_web">
                        <div class="contenedor-img">
                            <img class="img-logo" src="{{asset('images/VD-REACT.jpeg')}}">
                       
                            <div class="social">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                            <h5>React<small class="color-pasific">Desarrollo Web</small></h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 img-top ocultar-lenguaje desarrollo_web">
                        <div class="contenedor-img">
                            <img class="img-logo" src="{{asset('images/VD-VUE.jpeg')}}">
                      
                            <div class="social">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                            <h5>Vue<small class="color-pasific">Desarrollo Web</small></h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 img-top ocultar-lenguaje desarrollo_web">
                        <div class="contenedor-img">
                            <img class="img-logo" src="{{asset('images/VD-PHP.png')}}">
                      
                            <div class="social">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                            <h5>PHP 8<small class="color-pasific">Desarrollo Web</small></h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 img-top ocultar-lenguaje desarrollo_web">
                        <div class="contenedor-img">
                            <img class="img-logo" src="{{asset('images/VD-NODEJS.png')}}">
                        
                            <div class="social">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                            <h5>NodeJs<small class="color-pasific">Desarrollo Web</small></h5>
                        </div>
                    </div>
                </div>
                <div class="row row-img">
                    <div class="col-md-3 col-sm-4 col-xs-6 img-top ocultar-lenguaje desarrollo_apis">
                        <div class="contenedor-img">
                            <img class="img-logo" src="{{asset('images/VD-NODEJS.png')}}">
                     
                            <div class="social">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                            <h5>NodeJs<small class="color-pasific">Desarrollo API</small></h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 img-top ocultar-lenguaje desarrollo_apis">
                        <div class="contenedor-img">
                            <img class="img-logo" src="{{asset('images/VD-PY.jpg')}}">
                     
                            <div class="social">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                            <h5>Python<small class="color-pasific">Desarrollo API</small></h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 img-top ocultar-lenguaje desarrollo_apis">
                        <div class="contenedor-img">
                            <img class="img-logo" src="{{asset('images/VD-PHP.png')}}">
                            
                            <div class="social">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                            <h5>PHP 8<small class="color-pasific">Desarrollo API</small></h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 img-top ocultar-lenguaje desarrollo_apis">
                        <div class="contenedor-img">
                            <img class="img-logo" src="{{asset('images/VD-REACT.jpeg')}}">
                        
                            <div class="social">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                            <h5>React<small class="color-pasific">Desarrollo API</small></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="encabezado2">
            <div class="intro2">
                <h1>Brindamos soluciones a medida.</h1>
                <p class="text2">Entendemos que cada organizacion es compleja y única por lo que nos comprometemos al 100% con cada proyecto.</p> 
                <a class="button">UNETE AL TEAM</a>                   
            </div>       
        </div> 

        <footer class="footer center">
            <div class="container">
                <div class="row">                    
                    <div class="col-md-12 col-lg-4 col-xs-12 footer-text">
                        <div class="text center">© 2021. Todos los derechos reservados.</div>
                    </div>                    
                    <div class="col-md-12 col-lg-4 col-xs-12 text-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="icon">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                </ul>
                            </div>                           
                        </div>
                    </div>                    
                    <div class="col-md-12 col-lg-4 col-xs-12">
                        <div class="redes-social">
                            <ul class="social-icon text-center">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-github"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div> 
                    </div>
                    
                </div>
                
            </div>
        </footer>
      
      
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        
        <script>

            function cargando(){
                setTimeout(function(){ 
                    $("#cargando").fadeOut(300); 
                }, 800);    
            }

            function desarrollo(desarrollo){
                $(".quitar_active").removeClass("active");
                $("." + desarrollo + '_active').addClass("active");
                $(".ocultar-lenguaje").hide();
                $("." + desarrollo).fadeIn(1000);
                return false;
            }

            $( document ).ready(function() {
                cargando();
                desarrollo('desarrollo_movil');
                var bandera = false;
                $(window).scroll(function() {    
                    var scroll = $(window).scrollTop();
                    if (scroll > 100) {
                        if (bandera==false){
                            desarrollo('desarrollo_movil');
                            bandera=true;
                        }  
                    }
                });
            });

            $( document ).ready(function(){
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
