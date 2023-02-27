<!DOCTYPE html>
       <html lang="en">
       <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web NEWS</title>
        <link rel="stylesheet" href="https://bootswatch.com/5/journal/bootstrap.min.css">
        
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
        <script src="js/app.js"></script>

       </head>
       <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-4">
                <div class="container-fluid">
                    <a class="navbar-brand categories" categoryId="general" href="#">NEWS</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active categories" categoryId="general" href="#">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link categories" categoryId="technology" href="#">Technology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link categories" categoryId="business" href="#">Business</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link categories" categoryId="sports" href="#">Sports</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link categories" categoryId="entertainment" href="#">Entertainment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link categories" categoryId="health" href="#">Health</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link categories" categoryId="science" href="#">Science</a>
                        </li>
                    </ul>
                    <form id="search" class="d-flex">
                        <input id = "name" class="form-control me-sm-2" type="search" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    </div>
                </div>
            </nav>

            
        <div class="container px-3">
        
            <div class="row">
            <div class="container">
            <div class="jumbotron pb-2 ">

                <div  class="container" id="post"></div>
               
            </div>
        </div>

       </body>
       </html>
       
       
       
       
       