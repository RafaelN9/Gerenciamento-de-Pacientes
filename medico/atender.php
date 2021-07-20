<!doctype html>
<html lang="en">
  <head>
    <title>Médico</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="script.js" type="text/javascript"></script>
  </head>
  <style>
        tbody td{
            vertical-align: middle !important;
        }
    </style>
  <body>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>



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
                        <a class="nav-link" href="index_medico.php">Atendimentos</a>
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
        <div class="mt-5 row justify-content-center w-100">
            <h3 class="m-4">
                João Vitor Couto Oliveira
            </h3>
            <div class="d-flex justify-content-center w-100 align-content-center">
        
                <div class="btn-group-vertical border w-50 p-4 rounded">
                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">Solicitar exame</button>
                    <button type="button" class="btn btn-primary mb-2">Resultado exame</button>
                    <button type="button" class="btn btn-primary mb-2">Diagnóstico</button>
                    <button type="button" class="btn btn-primary mb-2">Receita</button>
                    <button type="button" class="btn btn-danger">Finalizar</button>
                </div>
            </div>
      </div>
      </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>