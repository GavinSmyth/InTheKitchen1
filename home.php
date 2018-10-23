<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="Style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="UTF-8">
  <title>Search page</title>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">InTheKitchen</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <div class="row justify-content-md-right">
        <div class="col col-md-3">
      <li class="nav-item active">
        
        <a class="nav-link" href="Home">Home <span class="sr-only">(current)</span></a>
      </li>
       </div>
     
       <div class="col col-md-3">
      <li class="nav-item">
        <a class="nav-link" href="Favourites">Favourites</a>
      </li>
       </div>
      
        <div class="col col-md-3">
      <li class="nav-item">
        <a class="nav-link" href="Nearest">Nearest</a>
      </li>
        </div>
    
      <div class="col col-lg-3">
      <li class="nav-item">
        <a class="nav-link" href="account">account</a>
      </li>
      </div>
      </div>
    
      
    </ul>
  </div>
</nav>
  
  <div class="container">
    <div class="col-md-8 col-centered">
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Favourites
      
      
      </button>
                    
    </div>
    <div class="col-md-4 col-centered">
                    
    </div>
    
    
  </div>
  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
 
</html>