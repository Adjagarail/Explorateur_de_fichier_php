<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Explorateur de fichier</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="Controls/Css/style.css">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top navigation">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto conca">
        <li class="nav-item document">
          <a class="nav-link create" href="#"></a>
        </li>
        <li class="nav-item document">
          <a class="nav-link delete" href="#"></a>
        </li>
        <li class="nav-item document">
          <a class="nav-link download " href="#"></a>
        </li>
        <li class="nav-item document">
          <a class="nav-link upload " href="#"></a>
        </li>
        <li class="nav-item document">
          <a class="nav-link file" href="#"></a>
        </li>
        <li class="nav-item document">
          <a class="nav-link delete_file" href="#"></a>
        </li>
        <li class="nav-item document">
          <a class="nav-link upload_file" href="#"></a>
        </li>
        <li class="nav-item document">
          <a class="nav-link download_file" href="#"></a>
        </li>
        <li class="nav-item document">
          <a class="nav-link trash" href="#"></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0 formu">
        <input class="form-control mr-sm-2 cherche" type="text" placeholder="Vous cherchez ...?" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
      </form>
      </div>
    </nav>
      <div class="container starter-template">
          <div class="row">
              <?php
              include('Controls/Traitement/Traitement.php');
              $folder="";
              echo show_folders($folder);
               ?>
          </div>
        </div>
      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="Controls/Js/main.js" charset="utf-8"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  </body>
</html>
