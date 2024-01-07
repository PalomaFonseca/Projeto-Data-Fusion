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
        <div class="delimitacoes">
            <h1 class="text-center">
                Pós-Operatório
            </h1>

            <!--TIPO PROCEDIMENTO-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="nomePaciente" name="nomePaciente">Nome do paciente</span>
                <input type="text" class="form-control me-2" disabled value="Paloma Dantas">
            </div>

            <div class="input-group mb-3">
                <!--DRENO DE TORAX-->
                <span class="input-group-text" id="drenoT" name="drenoT">Dreno de Torax</span>
                <input type="number" class="form-control me-2" placeholder="quantidade drenada">
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
                Exames Pós-Operatórios
            </h1>

            <div class="input-group mb-3">
                <!--VALORES HB-->
                <span class="input-group-text" id="valoresHb" name="valoresHb">Valores de hb</span>
                <input type="number" class="form-control me-2" min="1">

                <!--VALORES HT-->
                <span class="input-group-text" id="valoresHt" id="valoresHt">Valores de ht</span>
                <input type="number" class="form-control me-2" min="1">
    
                <!--EXAMES DE IMAGEM-->
                <span class="input-group-text" id="exameImg" name="exameImg">Exames de imagem</span>
                <input type="text" class="form-control me-2" min="1">
            </div>

            <div class="input-group mb-3">
                <!--UREIA-->
                <span class="input-group-text" id="ureia" name="ureia">Ureia</span>
                <input type="number" class="form-control me-2" min="1">

                <!--CREATININA-->
                <span class="input-group-text" id="creatinina" id="creatinina">Creatinina</span>
                <input type="number" class="form-control me-2" min="1">
    
                <!--TAP-->
                <span class="input-group-text" id="tap" name="tap">TAP</span>
                <input type="number" class="form-control me-2" min="1">        
            </div>

            <div class="input-group mb-3">
                <!--KPTT-->
                <span class="input-group-text" id="kptt" name="kptt">KPTT</span>
                <input type="number" class="form-control me-2" min="1">

                <!--INR-->
                <span class="input-group-text" id="inr" name="inr">INR</span>
                <input type="number" class="form-control me-2" min="1">

                <!--PLAQUETAS-->
                <span class="input-group-text" id="plaquetas" name="plaquetas">Plaquetas</span>
                <input type="number" class="form-control me-2">   
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
</body>
</html>