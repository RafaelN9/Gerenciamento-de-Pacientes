<!doctype html>
<html lang="en">

<head>
    <title>Médico</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap IMPORTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <style>
        tbody td {
            vertical-align: middle !important;
        }
    </style>
</head>

<body>

    <!-- Modal Solicita Exame -->
    <div class="modal fade" id="modalSolicitaExame" tabindex="-1" role="dialog" aria-labelledby="modalSolicitaExameLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalSolicitaExameLabel">Solicitar Exames</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <label for="solicita_exame">Exame</label>
                        <select class="selectpicker form-control" id="solicita_exame" multiple data-live-search="true">
                            <option value="1">Raio-x</option>
                            <option value="2">Ultrasson</option>
                            <option value="3">Endoscopia</option>
                        </select>
                        <label for="local">Local</label>
                        <input type="text" id="local" class="input-group">
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="cancelar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <input type="submit" value="Solicitar" class="btn btn-primary"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Diagnostico -->
    <div class="modal fade" id="modalDiagnostico" tabindex="-1" role="dialog" aria-labelledby="modalDiagnosticoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDiagnosticoLabel">Diagnóstico</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <textarea class="form-control" id="diagnostico" placeholder="" rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="cancelar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <input type="submit" value="Confirmar" class="btn btn-primary"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Receita -->
    <div class="modal fade" id="modalReceita" tabindex="-1" role="dialog" aria-labelledby="modalReceitaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalReceitaLabel">Receita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body" > 
                        <div id="receitas">
                        
                        </div> 
                        <div class="d-flex justify-content-end m-2">
                            <button type="button" onclick="addConteudo()" class="btn btn-success rounded-circle">+</button></div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" id="cancelarReceita" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <input type="submit" value="Confirmar" class="btn btn-primary"></input>
                    </div>
                </form>
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
                        <li class="nav-item">
                            <a class="nav-link" href="index_medico.php">Atendimentos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../medico/redirects/exibir_exames.php">Exames</a>
                        </li>

                    
                        <li class="nav-item">
                            <a class="nav-link" href="../medico/redirects/exibir_plantao.php">Plantão</a>
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
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modalSolicitaExame">Solicitar exame</button>
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modalDiagnostico">Diagnóstico</button>
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modalReceita">Receita</button>
                        <button type="button" class="btn btn-danger" onclick="location.href='index_medico.php'">Finalizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="script.js" type="text/javascript"></script>

</html>