<!doctype html>
<html lang="en">

<head>
    <title>Tabela Plantão</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        tbody td {
            vertical-align: middle !important;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
</head>

<body>
    <div class="container-fluid" style="min-height: 100vh;">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Hospital Regional</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../index_medico.php">Atendimentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="exibir_exames.php">Exames</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="#">Plantão</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="m-3 d-flex justify-content-between align-content-center p-3 w-100">
            <div class="container-fluid">
                <form action="">
                    <div class="form-row">
                        <div class="form-group col-md-2 ml-3">
                            <label for="tempoPlantao">Plantão</label>
                            <select class="selectpicker form-control" id="tempoPlantao" multiple data-actions-box="true">
                                <option value="1">Finalizado</option>
                                <option value="2">Em andamento</option>
                                <option value="3">Futuro</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 ml-3">
                            <label for="medico" class="col-form-label-sm mb-0">Nome do Médico</label>
                            <input type="text" class="form-control" id="inputMedico" placeholder="Médico">
                        </div>
                        <div class="form-group col-md-2 ml-3">
                            <label for="filtroDataE" class="col-form-label-sm mb-0">Data de Entrada</label>
                            <input type="date" class="form-control p-1" name="filtroDataE" min="1990-01-01">
                        </div>
                        <div class="form-group col-md-2 ml-3">
                            <label for="filtroDataS" class="col-form-label-sm mb-0">Data de Saída</label>
                            <input type="date" class="form-control p-1" name="filtroDataS" min="1990-01-01">
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <div class="modal fade" id="addPlantao" tabindex="-1" role="dialog" aria-labelledby="addPlantaoLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addPlantaoLabel">Adicionar plantão</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="POST">
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="crmPlantao" class="input-group-text">CRM</label>
                                </div>
                                <input type="text" id="crmPlantao" class="form-control">
                            </div>

                            <div class="d-flex justify-content-around">
                                <div class="form-group">
                                    <label for="dataEntrada" class="col-form-label-sm mb-0">Data de Entrada</label>
                                    <input type="date" id="dataEntrada" class="form-control p-1" name="dataEntrada" min="1990-01-01">
                                </div>
                                <div class="form-group">
                                    <label for="horaEntrada" class="col-form-label-sm mb-0">Hora de Entrada</label>
                                    <input type="time" class="form-control p-1" id="horaEntrada" name="horaEntrada">
                                </div>
                            </div>

                            <div class="d-flex justify-content-around">
                                <div class="form-group">
                                    <label for="dataSaida" class="col-form-label-sm mb-0">Data de Saída</label>
                                    <input type="date" class="form-control p-1" id="dataSaida" name="dataSaida" min="1990-01-01">
                                </div>
                                <div class="form-group">
                                    <label for="horaSaida" class="col-form-label-sm mb-0">Hora de Saida</label>
                                    <input type="time" class="form-control p-1" name="horaSaida" id="horaSaida">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="cancelarPlantao" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <input type="submit" value="Adicionar" class="btn btn-primary"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8 justify-content-center align-content-center">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">CRM</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Data/Hora Entrada</th>
                                <th scope="col">Data/Hora Saída</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>22/07/2020 15:00</td>
                                <td>22/07/2020 22:00</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>22/07/2020 15:00</td>
                                <td>22/07/2020 22:00</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>22/07/2020 15:00</td>
                                <td>22/07/2020 22:00</td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-secondary float-right" data-toggle="modal" data-target="#addPlantao">
                        Adicionar Plantão
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="script.js" type="text/javascript"></script>

    <script src="script_redirects.js" type="text/javascript"></script>
</body>

</html>