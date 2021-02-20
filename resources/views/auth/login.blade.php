<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vida Digital Test</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css" >
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>

        <div id="cargando">
            <img src="{{asset('images/puff.svg')}}"  alt="precarga">
        </div>

        <div class="encabezado-login">    
            <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
                <div class="container-fluid">
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
            <div class="container form">
                <div class="form-login-contenedor">
                <h3>Login Form</h3>
                    <div class="form-login-espacio">
                        <input type="text" name="email" id="email" class="form-control form-control-input " placeholder="Username">
                    </div>
                    <div class="form-login-espacio">
                        <input type="password" name="password" id="password" class="form-control form-control-input " placeholder="Password">
                    </div>
                    <div class="form-login-espacio">
                        <button class="hvr-ripple-out form-control form-control-ingresar text-uppercase" onclick="ingresar()">Login</button><br><br>
                        <a href="#" class="link-login">Forgot Password?</a><br>
                        <a href="#" class="link-login" id="showFormRegister">Register Now.</a>
                    </div>
                </div>
            </div>   

            <footer>
                <div class="container">
                    <p class="footer-login">©2021 Todos los derechos reservados.</p>
                </div>
            </footer>
        </div> 

        

        <div class="modal fade" id="modalLodin" tabindex="-1" aria-labelledby="modalLodinLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLodinLabel">Mensaje del Sistema</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="mensaje-modal"><div>
                    </div>   
                </div>
            </div>
        </div>

     

      
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script>

            function cargando(){
                setTimeout(function(){ 
                    $("#cargando").fadeOut(300); 
                }, 800);    
            }

            function validarEmail(valor) {
                if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)){
                    return true;
                } else {
                    return false;
                }
            }


            function ingresar(){

                var email = $("#email").val();
                var password = $("#password").val();

                $("#mensaje-modal").html("");
                $("#mensaje-modal").removeClass("alert alert-success alert-danger");


                if(validarEmail(email)){

                    if(password.length >= 8){
                        if(email=='vidadigital@gmail.com' && password=='vidadigital'){
                            $("#mensaje-modal").html("Felicitaciones!!! los datos que ingresaste son correctos.");
                            $("#mensaje-modal").addClass( "alert alert-success" );
                        }else{
                            $("#mensaje-modal").html("Los datos ingresados son incorrectos.");
                            $("#mensaje-modal").addClass( "alert alert-danger" );
                        }
                    }else{
                        $("#mensaje-modal").html("Debe ingresar 8 o mas caracteres.");
                        $("#mensaje-modal").addClass( "alert alert-danger" );    
                    }
   
                }else{
                    $("#mensaje-modal").html("El email no es valido.");
                    $("#mensaje-modal").addClass( "alert alert-danger" );  
                }

                $("#modalLodin").modal('show');


            }

            function desarrollo(desarrollo){
                $(".quitar_active").removeClass("active");
                $("." + desarrollo + '_active').addClass("active");
                $(".ocultar-lenguaje").hide();
                $("." + desarrollo).fadeIn(1000);
                return false;
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
