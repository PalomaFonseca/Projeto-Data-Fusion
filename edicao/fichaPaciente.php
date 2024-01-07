<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Paloma Dantas">
    <title>Coleta de Dados HSVP</title>
    <link rel="stylesheet" href="../style/style.css">
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
                    <img id="logo" class="ms-4" src="../images/data-fusion.png">
                    <h1 class="mt-3 mb-2 ms-2">Data Fusion</h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        <h1 class="text-center">
            Paloma Dantas - 25 anos 
        </h1>

        <!--LISTA DE MOMENTOS-->
        <ul class="list-group mb-4">
            <li class="list-group-item"><a href="dadosPaciente.php"><i class="bi bi-1-square me-2"></i>Dados do paciente</a></li>
            <li class="list-group-item"><a href="preop.php"><i class="bi bi-2-square me-2"></i>Pré-Operatório</a></li>
            <li class="list-group-item"><a href="intraop.php"><i class="bi bi-3-square me-2"></i>Intra-Operatório</a></li>
            <li class="list-group-item"><a href="posop.php"><i class="bi bi-4-square me-2"></i>Pós-Operatório</a></li>
        </ul>

        <div class="d-grid gap-2 d-flex justify-content-end">
            <a href="../index.php" class="btn btn-danger" type="button">Voltar</a>
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