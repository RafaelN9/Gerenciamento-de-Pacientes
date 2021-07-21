<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap IMPORTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </head>
  <body>
  <div class="container-fluid" style="min-height: 100vh;">
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
                        <a class="nav-link" href="#">Adicionar Atendimento</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cadastrar
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="cadastra_atendente.php">Atendente</a>
                            <a class="dropdown-item" href="#">Médico</a>
                            <a class="dropdown-item" href="cadastra_paciente.php">Paciente</a>
                        </div>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#">Atendentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Médicos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pacientes</a>
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
                        Cadastro Médico
                    </h3>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="fulano@gmail.com">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Senha</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="fulano123">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputName">Nome</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Fulano da Silva">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCPF">CPF</label>
                                <input type="text" class="form-control" id="inputCPF" placeholder="111.111.111-11">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCRM">CRM</label>
                                <input type="text" class="form-control" id="inputCRM" placeholder="111.111.111-11">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEsp">Especialização</label>
                                <input type="text" class="form-control" id="inputEsp" placeholder="111.111.111-11">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputBirthDate">Data de Nascimento</label>
                                <input type="date" class="form-control" name="inputBirthDate"placeholder="dd/mm/yyyy"  min="1900-01-01">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-10">
                                <label for="inputAddress">Rua</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Rua das Palmas">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputAddress">Número</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCity">Bairro</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Cidade</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Estado</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Escolha...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
                
    </div>

  </body>
</html>