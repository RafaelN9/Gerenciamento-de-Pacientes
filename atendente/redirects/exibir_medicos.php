<!doctype html>
<html lang="en">
  <head>
    <title>Tabela Médicos</title>
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
    <div class="container-fluid" style="min-height: 100vh; max-width:100vw;">
        <div class="container-fluid" >
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Hospital Regional</a>
                <button class="navbar-toggler   mr-2 ml-auto collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../index_atendente.php">Atendimentos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="adicionar_atendimento.php">Adicionar Atendimento</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cadastrar
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="cadastra_medico.php">Médico</a>
                                <a class="dropdown-item" href="cadastra_paciente.php">Paciente</a>
                            </div>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link" href="exibir_atendentes.php">Atendentes</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Médicos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="exibir_pacientes.php">Pacientes</a>
                        </li>
                        
                    </ul>
                    
                </div>
                <a class="btn btn-sm btn-outline-secondary p-2 float-right" href="cadastra_atendente.php" type="button">Cadastrar</a>
            </nav>
        </div>
        <div class="m-3 d-flex justify-content-between align-content-center p-3 w-100">
            <div class="container-fluid">
                <form action="">
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-4 col-sm-12">
                            <label for="filtroCRMMed" class="col-form-label-sm mb-0">CRM</label>
                            <input type="text" class="form-control" id="filtroCRMMed" placeholder="1111111-1">
                        </div>
                        <div class="form-group col-md-4 col-sm-12">
                            <label for="filtroCPFMed" class="col-form-label-sm mb-0">CPF</label>
                            <input type="text" class="form-control" id="filtroCPFMed" placeholder="111.111.111-11">
                        </div>
                        <div class="form-group col-md-4 col-sm-12">
                            <label for="filtroNomeMed" class="col-form-label-sm mb-0">Nome do Médico</label>
                            <input type="text" class="form-control" id="filtroNomeMed" placeholder="Fulano da Silva">
                        </div>
                    </div>
                </form>
                
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 justify-content-center align-content-center">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">CRM</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Carga Horária Semanal</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Especialização</th>
                                <th scope="col">Horário de Entrada</th>
                                <th scope="col">Horário de Saída</th>
                                <th scope="col">Endereço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>José</td>
                                <td>111.111.111-11</td>
                                <td>10/12/1998</td>
                                <td>30 Horas</td>
                                <td>jose111@hotmail.com</td>
                                <td>Pneumologista</td>
                                <td>07:10</td>
                                <td>14:30</td>
                                <td>Rua das Laranjeiras, 1234</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Marcos</td>
                                <td>111.111.111-11</td>
                                <td>01/02/1975</td>
                                <td>60 Horas</td>
                                <td>dr.marcos@hotmail.com</td>
                                <td>Pneumologista</td>
                                <td>07:10</td>
                                <td>14:30</td>
                                <td>Rua do Peixe, 4321</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ronaldo</td>
                                <td>111.111.111-11</td>
                                <td>30/10/1970</td>
                                <td>60 Horas</td>
                                <td>ron4ldo10@hotmail.com</td>
                                <td>Pneumologista</td>
                                <td>07:10</td>
                                <td>14:30</td>
                                <td>Rua Granja Nova, 555</td>
                            </tr>
                        </tbody>
                    </table>
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