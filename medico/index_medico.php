<!doctype html>
<html lang="en">
  <head>
    <title>Médico</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        tbody td{
            vertical-align: middle !important;
        }
    </style>
    <!-- Bootstrap IMPORTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>
  </head>
  <style>
        tbody td{
            vertical-align: middle !important;
        }
    </style>
  <body>
  <div class="container-fluid " style="min-height: 100vh;">
  <div class="container-fluid" >
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Hospital Regional</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Atendimentos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Exames</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#">Plantão</a>
                    </li>                   
                </ul>
            </div>
            </nav>
      </div>

     <div class="container">
      <div class="mt-5 row w-100">
            <div class="m-3 display-4">
              Tabela
            </div>
          <div class="d-flex w-100 justify-content-center align-content-center">
          
          <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Temperatura</th>
                        <th>Pressão</th>
                        <th>Sintomas</th>
                        <th>Urgência</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><a href="atender.php">1</a></th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>dor abdominaldor abdominaldor abdominaldor abdominaldor abdominaldor abdominaldor abdominaldor abdominaldor abdominaldor abdominaldor abdominaldor abdominaldor abdominal</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td class="bg-danger">@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td class="bg-danger">@mdo</td>
                    </tr>
                </tbody>
            </table>
          </div>
      
      </div>
      </div>
    </div>
    
    </body>
</html>