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
    <style>
       .delimitacoes{
            background-color: #FFFFFF;
            box-shadow: 0px 0px 10px -3px rgba(0,0,0,0.57);
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
    </style>
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
            Intra-Operatório
        </h1>

        <!--TIPO PROCEDIMENTO-->
        <div class="input-group mb-3">
            <span class="input-group-text" id="nomePaciente" name="nomePaciente">Nome do paciente</span>
            <input type="text" class="form-control me-2" disabled value="Paloma Dantas">
        </div>

        <div class="delimitacoes">
            <h1 class="text-center">
                Exames Intra-Operatórios
            </h1>

            <div class="d-grid gap-2">
                <!--BOTÃO MODAL-->
                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Exames hematológicos
                </button>
            </div>

            <!--MODAL-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Exames Hematológicos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">Valores de HB</th>
                            <th scope="col">Valores de HT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Pré-CEC</th>
                                <td><input type="number" class="form-control me-2"></td>
                                <td><input type="number" class="form-control me-2"></td>
                            </tr>
                            <tr>
                            <th scope="row">Intra-CEC</th>
                                <td><input type="number" class="form-control me-2"></td>
                                <td><input type="number" class="form-control me-2"></td>
                            </tr>
                            <tr>
                            <th scope="row">Pós-CEC</th>
                                <td><input type="number" class="form-control me-2"></td>
                                <td><input type="number" class="form-control me-2"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Salvar</button>
                    <a href="intraop.php" type="button" class="btn btn-secondary">Voltar</a>
                </div>
                </div>
            </div>
            </div>
 
            <div class="input-group mb-3">
                <!--TCA-->
                <span class="input-group-text" id="tca" name="tca">TCA</span>
                <input type="number" class="form-control">
            </div>
        </div>

        <div class="delimitacoes">
            <h1 class="text-center">
                Dados finais
            </h1>

            <div class="input-group mb-2"> 
                <!--PROCEDIMENTO-->
                <span class="input-group-text" id="procedimentosR" name="procedimentosR">Procedimentos realizados</span>
                <input type="text" class="form-control" placeholder="Entra uma lista de procedimentos existentes">
                <button type="button" class="btn btn-primary"><i class="bi bi-plus-lg"></i></button>
            </div>

            <div class="input-group mb-2"> 
                <!--PROCEDIMENTO X-->
                <input type="text" class="form-control" value="000x - Revascularização do miocárdio" disabled>
                <button type="button" class="btn btn-danger"><i class="bi bi-dash"></i></button>
            </div>

            <div class="input-group mb-2"> 
                <!--PROCEDIMENTO Y-->
                <input type="text" class="form-control" value="000y - Troca de válvula aórtica" disabled>
                <button type="button" class="btn btn-danger"><i class="bi bi-dash"></i></button>
            </div>
        </div>

        <div class="delimitacoes">
            <h1 class="text-center">
                Tempos cirúrgicos
            </h1>

            <div class="input-group mb-3"> 
                <!--TEMPO CEC-->
                <span class="input-group-text" id="tCec" name="tCec">Tempo de CEC</span>
                <input type="number" class="form-control me-2">

                <!--TEMPO CLAMPEAMENTO AÓRTICO-->
                <span class="input-group-text" id="tAor" name="tAor">Tempo de Clampeamento Aórtico</span>
                <input type="number" class="form-control me-2">
            </div>
            
            <div class="input-group mb-3"> 
                <!--DIURESE-->
                <span class="input-group-text" id="diurese" name="diurese">Diurese Final</span>
                <input type="number" class="form-control me-2">
            </div>

        </div>

        <div class="delimitacoes"> 
            <h1 class="text-center">
                Condutas CEC
            </h1>
            <div class="input-group mb-3">
                <!--RAP-->
                <span class="input-group-text" id="RAP" name="RAP">RAP</span>
                <input type="number" class="form-control me-2">

                <!--CUF-->
                <span class="input-group-text" id="CUF" name="CUF">CUF</span>
                <input type="number" class="form-control me-2">   

                <!--MUF-->
                <span class="input-group-text" id="MUF" name="MUF">MUF</span>
                <input type="number" class="form-control me-2">
            </div>
        </div> 

        <div class="delimitacoes">
            <h1 class="text-center">
                Hemoderivados
            </h1>
            
            <div class="input-group mb-3"> 
                <!--HEMODERIVADOS-->
                <span class="input-group-text" id="hemoderivados" name="hemoderivados">Hemoderivados</span>
                <select class="form-select me-2">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div> 

            <div class="input-group mb-3"> 
                <!--CONCENTRADO DE HEMÁCIAS-->
                <span class="input-group-text" id="cHemacias" name="cHemacias">Concentrado de hemácias</span>
                <input type="number" class="form-control me-2">

                <!--PLAQUETAS-->
                <span class="input-group-text" id="plaquetas" name="plaquetas">Plaquetas</span>
                <input type="number" class="form-control me-2"> 
            </div>  

            <div class="input-group mb-3"> 
                <!--PLASMA FRESCO-->
                <span class="input-group-text" id="pfc" name="pfc">Plasma Fresco Congelado</span>
                <input type="number" class="form-control me-2">

                <!--CRIOPRECIPITADO-->
                <span class="input-group-text" id="crio" name="crio">Crioprecipitado</span>
                <input type="number" class="form-control me-2">
            </div>
        </div>

        <div class="delimitacoes"> 
            <h1 class="text-center">
                Medicamentos
            </h1>
            <div class="row g-3">
                <div class="col-9 d-flex">
                    <div class="input-group">
                        <!--DROGAS-->
                        <span class="input-group-text" id="medicamentos" name="drogas">Medicamentos</span>
                        <input type="text" id="medicamentos" class="form-control" placeholder="Lista de drogas pré-definida">
                        <button type="button" class="btn btn-primary"><i class="bi bi-plus-lg"></i></button>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="input-group">
                        <!--QUANTIDADE-->
                        <span class="input-group-text" name="qtd">Quantidade</span>
                        <input type="number" id="qtd" class="form-control me-2">
                    </div>
                </div>
                <div class="col-9 d-flex">
                    <div class="input-group">
                        <!--DROGAS-->
                        <input type="text" id="medicamentos" class="form-control" value="001x - DrogaX">
                        <button type="button" class="btn btn-danger"><i class="bi bi-dash"></i></button>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="input-group">
                        <!--QUANTIDADE-->
                        <span class="input-group-text" name="qtd">Quantidade</span>
                        <input type="number" id="qtd" class="form-control me-2" value="2">
                    </div>
                </div>
            </div>
        </div> 

        <div class="d-grid gap-2 d-flex justify-content-end">
            <button class="btn btn-primary me-md-1" type="button">Salvar</button>
            <a href="fichaPaciente.php" class="btn btn-danger" type="button">Voltar</a>
        </div>
    </main>

    <!--RODAPÉ-->
    <footer class="fixed-bottom">
        <h2>
            Desenvolvido por Data Fusion
        </h2>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>