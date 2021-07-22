<!doctype html>
<html lang="en">
  <head>
    <title>Adicionar Atendimento</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid bg-warning" style="min-height: 100vh;">
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

                        <li class="nav-item active">
                            <a class="nav-link" href="#">Adicionar Atendimento</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cadastrar
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="cadastra_atendente.php">Atendente</a>
                                <a class="dropdown-item" href="cadastra_medico.php">Médico</a>
                                <a class="dropdown-item" href="cadastra_paciente.php">Paciente</a>
                            </div>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link" href="exibir_atendentes.php">Atendentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="exibir_medicos.php">Médicos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="exibir_pacientes.php">Pacientes</a>
                        </li>
                        
                        
                    </ul>
                    
                </div>
                <button class="btn btn-sm btn-outline-secondary p-2 float-right" type="button">Cadastrar</button>
            </nav>
        </div>
        
        <div class="container mt-2">
            <div class="row justify-content-center">
                <div class="col-8 p-4">
                    <h3 class="mb-5">
                        Adicionar Atendimento
                    </h3>
                    <form>
                        
                        
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCPFPac">CPF do Paciente</label>
                                <input type="text" class="form-control" id="inputCPFPac" placeholder="111.111.111-11">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputTemp">Temperatura</label>
                                <input type="text" class="form-control" id="inputTemp" placeholder="37.8 ºC">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPress">Pressão</label>
                                <input type="text" class="form-control" id="inputPress" placeholder="12/8">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputUrgen">Urgência</label>
                                
                                <select id="inputUrgen" class="form-control p-1">
                                    <option selected="">Escolha...</option>
                                    <option>Não urgente</option>
                                    <option>Urgente</option>
                                    <option>Emergência</option>
                                </select>
                                
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="inputObs">Observação</label>
                          <textarea class="form-control" id="inputObs" placeholder="Algo útil a se acrescentar sobre a situação do paciente." rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputSint">Sintomas</label>
                            <textarea class="form-control" id="inputSint" placeholder="Febre, pressão alta, dor de estômago." rows="3"></textarea>
                        </div>
                        

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Confirmar</button>
                    </form>
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