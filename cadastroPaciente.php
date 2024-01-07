<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Paloma Dantas">
    <title>Coleta de Dados HSVP</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <!--CABEÇALHO DATA FUSION-->
    <header class="bg-light">
        <div>
            <div class="row m-0">
                <!--LOGO E NOME-->
                <div class="col-sm-11 d-flex">
                    <img id="logo" class="ms-4" src="images/data-fusion.png">
                    <h1 class="mt-3 mb-2 ms-2">Data Fusion</h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        <h1 class="text-center">
            Cadastro do Paciente
        </h1>
        
        <div class="input-group mb-3">
            <!--NOME PACIENTE-->
            <span class="input-group-text" id="nomePaciente" name="nomePaciente">Nome do paciente</span>
            <input type="text" class="form-control">
        </div>

        <div class="input-group mb-3">     
             <!--IDADE-->   
            <span class="input-group-text" id="idade" name="idade">Idade</span>
            <input type="number" class="form-control me-2" min="1">

            <!--DATA-->       
            <span class="input-group-text" id="data" name="data">Data do procedimento</span>
            <input type="date" class="form-control me-2">

            <!--MODO-->
            <span class="input-group-text" id="modo" name="modo">Convênio</span>
            <select class="form-select">
                <option value="1">SUS</option>
                <option value="2">Unimed</option>
                <option value="3">SC Saúde</option>
            </select>
        </div>
        
        <div class="input-group mb-2"> 
            <!--PROCEDIMENTO-->
            <span class="input-group-text" id="procedimentosP" name="procedimentosP">Procedimentos propostos</span>
            <input type="text" class="form-control" placeholder="Entra uma lista de procedimentos existentes">
            <button type="button" class="btn btn-primary"><i class="bi bi-plus-lg"></i></button>
        </div>

        <div class="input-group mb-2"> 
            <!--PROCEDIMENTO X-->
            <input type="text" class="form-control" placeholder="000x - Revascularização do miocárdio" disabled>
            <button type="button" class="btn btn-danger"><i class="bi bi-dash"></i></button>
        </div>

        <div class="input-group mb-4"> 
            <!--PROCEDIMENTO Y-->
            <input type="text" class="form-control" placeholder="000y - Troca de válvula aórtica" disabled>
            <button type="button" class="btn btn-danger"><i class="bi bi-dash"></i></button>
        </div>

        <!--SALVAR E VOLTAR-->
        <div class="d-grid gap-2 d-flex justify-content-b-2">
            <button class="btn btn-success me-md-1" type="button">Salvar</button>
            <a href="index.php" class="btn btn-danger" type="button">Voltar</a>
        </div>
    </main>

    <!--RODAPÉ-->
    <footer class="fixed-bottom">
        <h2>
            Desenvolvido por Data Fusion
        </h2>
    </footer>
</body>
</html>