<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--dodano Jakisa
        <link rel="stylesheet" href="css/app.css">
        <script src="js/app.js"></script>-->
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

       

        <!--dodano Jakisa savi yield-->
        <title>Knjižara</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        

        <!-- Styles, izbrisano jer koristim bootstrap povise -->
    </head>
 
    <body>
<!--dodano Jakisa, navbar-->


<nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="#">BD knjižara</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Početna <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">O nama</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="#">Kontakt</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Prijava</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registracija</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<hr/>

 
<div class="container">

<!--dodano Jakisa za prikaz knjiga-->
    <div class="card-deck">
    @foreach($books as $item)
   
        <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$item->naslov}}</h5>
            <p class="card-text">Opis...</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">{{$item->autor}}</small>
        </div>
        </div>   
     
    @endforeach
    </div>
   
   


    



</div>           
    </body>
</html>
