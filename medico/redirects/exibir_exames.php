<!doctype html>
<html lang="en">
  <head>
    <title>Tabela Exames</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        tbody td{
            vertical-align: middle !important;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

                        <li class="nav-item active">
                            <a class="nav-link" href="#">Exames</a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link" href="exibir_plantao.php">Plantão</a>
                        </li>                   
                    </ul>
                </div>
            </nav>
        </div>
        <div class="m-3 d-flex justify-content-between align-content-center p-3 w-100">
            <div class="container-fluid">
                <form action="">
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-8 col-sm-12 col-lg-4">
                            <label for="filtroDataE" class="col-form-label-sm mb-0">Nome do Paciente</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Fulano da Silva">
                        </div>
                    </div>
                </form>
                
            </div>
        </div>

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

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8 justify-content-center align-content-center">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Temperatura °C</th>
                                <th>Pressão mmHg</th>
                                <th>Sintomas</th>
                                <th>Urgência</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><a href="atender.php">1</a></th>
                                <td>Mark</td>
                                <td>111.111.111-11</td>
                                <td>36,5</td>
                                <td>12 por 8</td>
                                <td>dor abdominaldor abdominaldor abdominaldor abdominaldor abdominaldor abdominaldor abdominaldor abdominaldor abdominaldor abdominaldor abdominaldor abdominaldor abdominal</td>
                                <td>Urgente</td>
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
                    <button class="btn btn-secondary float-right" data-toggle="modal" data-target="#exampleModal">
                        Adicionar
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
  </body>
</html>