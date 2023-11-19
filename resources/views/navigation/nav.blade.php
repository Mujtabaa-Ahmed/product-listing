<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://scontent.fkhi17-1.fna.fbcdn.net/v/t1.6435-9/187950159_168029361992076_2725177630152761380_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=2be8e3&_nc_ohc=ZWfRYT2iX0MAX-20tsr&_nc_ht=scontent.fkhi17-1.fna&oh=00_AfB_l_XiskaiimbJt6pIlmlCJfM26YZaabJDBIQvbXBWog&oe=6572097E">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>DevM</title>
    <style>
      
      </style>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #c5e2f7;">
        <a class="navbar-brand" href="/">DevM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <div class="nav-item nav-link"><a class="nav-item nav-link {{Route::is('home') ? 'border-bottom  border-dark text-dark' : ''}}" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a></div>
            <div class="nav-item nav-link"><a class="nav-item nav-link {{Route::is('view') ? 'border-bottom  border-dark text-dark' : ''}}" href="{{route('view')}}">view Product</a></div>
             <div class="nav-item nav-link"><a class="nav-item nav-link {{Route::is('list') ? 'border-bottom  border-dark text-dark' : ''}}" href="{{route('list')}}">Product List</a></div>
                <div class="nav-item nav-link"><a class="nav-item nav-link {{Route::is('add') ? 'border-bottom  border-dark text-dark' : ''}}" href="{{route('add')}}">Add Product</a></div>
               
          </div>
        </div>
      </nav>
   