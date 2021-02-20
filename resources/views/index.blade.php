<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vida Digital Test</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css" >
    </head>

    <body>
        <nav class="navbar navbar-light bg-main">
            <div class="container p-4">
                <a class="navbar-brand m-auto" href="#">
                    <img src="{{asset('images/logo.png')}}" width="120" alt="" loading="lazy">
                </a>
            </div>
        </nav>
        <section class="container-fluid content">
        
            <div class="row justify-content-center">
                <div class="col-10 col-md-12">
                    <nav class="text-center my-5">
                        <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline selected-category" >Todas</a>
                        <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline" >Programación</a>
                        <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline" >Desarrollo web</a>
                    </nav>
                </div>
            </div>
        </section>

        <footer class="container-fluid bg-main">
            <div class="row text-center p-4">
                <div class="mb-3">
                    <img src="{{asset('images/logo.png')}}" alt="YouDevs logo" width="120" id="logofooter">
                </div>
                <div id="col-md-10">
                    <a href="https://www.facebook.com/youdevs">
                        <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook youdevs">
                    </a>
                    <a href="https://www.instagram.com/youdevs">
                        <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram youdevs">
                    </a>
                    <a href="https://www.youtube.com/c/YouDevsOficial">
                        <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube youdevs">
                    </a>
                    <p class="mt-3">Copyright © 2020 YouDevs, Blog. <br> Todos los derechos reservados.</p>
                </div>
            </div>
        </footer>


   
    </body>
</html>