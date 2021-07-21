<!doctype html>
<html lang="en">

<head>
    <title>Médico</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap IMPORTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<style>
    tbody td {
        vertical-align: middle !important;
    }
</style>

<body>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Solicitar Exame</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Solicitar</button>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid " style="min-height: 100vh;">
        <div class="container-fluid">
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

   
</body>

</html>