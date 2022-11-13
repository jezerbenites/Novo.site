<?php
    if(isset($_POST['submit']))
    {   
        include_once('config.php');

        $nome =             $_POST['nome'];
        $idade =            $_POST['idade'];
        $municipio =        $_POST['municipio'];
        $fundamental =      $_POST['fundamental'];
        $medio=             $_POST['medio'];
        $superior=          $_POST['superior'];
        $religiao=          $_POST['religiao'];
        $genero=            $_POST['genero'];
        $estado=            $_POST['estado'];
        $etnia=             $_POST['etnia'];
        $empregado=         $_POST['empregado'];
        $naoempregado=      $_POST['naoempregado'];
        $tempoTerritorio=   $_POST['tempoTerritorio'];
        $desabamento=       $_POST['desabamento'];
        $apoio=             $_POST['apoio'];
        $contar=            $_POST['contar'];
        $qtdpessoas=        $_POST['qtdpessoas'];
        $qtdcriancas=       $_POST['qtdcriancas'];
        $qtdadolesc=        $_POST['qtdadolesc'];
        $deficiencia=       $_POST['deficiencia'];
        $simdef=            $_POST['simdef'];
        $renda=             $_POST['renda'];
        $disptrabalho=      $_POST['disptrabalho'];
        $semdisp=           $_POST['semdisp'];
        $provedor=          $_POST['provedor'];
        $beneficio=         $_POST['beneficio'];
        $creche=            $_POST['creche'];
        $escolamunicipal=   $_POST['escolamunicipal'];
        $grau=              $_POST['grau'];
        $criancaCasa=       $_POST['criancaCasa'];
        $criancaEscola=     $_POST['criancaEscola'];
        $criancasmod=       $_POST['criancasmod'];
        $criancastr=        $_POST['criancastr'];
        $qtdadolescentes=   $_POST['qtdadolescentes'];
        $adolescentes=      $_POST['adolescentes'];
        $adolescentesmod=   $_POST['adolescentesmod'];
        $adolescentestr=    $_POST['adolescentestr'];
        $gravidez=          $_POST['gravidez'];
        $habmodalidade=     $_POST['habmodalidade'];
        $internet=          $_POST['internet'];
        $descinternet=      $_POST['descinternet'];
        $ubs=               $_POST['ubs'];
        $referenciaubs=     $_POST['referenciaubs'];
        $doenca=            $_POST['doenca'];
        $lazer=             $_POST['lazer'];
        $desclazer=         $_POST['desclazer'];

        $result = mysqli_query($conexao, "INSERT INTO pibex(nome, idade, municipio, fundamental, medio, superior, religiao, genero, estado,
        etnia, empregado, naoempregado, tempoTerritorio, desabamento, apoio, contar, qtdpessoas, qtdcriancas, qtdadolesc, deficiencia, simdef,
        renda, disptrabalho, semdisp, provedor, beneficio, creche, escolamunicipal, grau, criancaCasa, criancaEscola, criancasmod, criancastr,
        qtdadolescentes, adolescentes, adolescentesmod, adolescentestr, gravidez,habmodalidade,internet,descinternet,ubs,referenciaubs,doenca,
        lazer,desclazer)
        VALUES ('$nome', '$idade', '$municipio','$fundamental','$medio','$superior','$religiao','$genero','$estado','$etnia','$empregado','$naoempregado',
        '$tempoTerritorio','$desabamento','$apoio', '$contar','$qtdpessoas','$qtdcriancas','$qtdadolesc','$deficiencia','$simdef',
        '$renda','$disptrabalho','$semdisp','$provedor','$beneficio','$creche','$escolamunicipal','$grau','$criancaCasa','$criancaEscola','$criancasmod',
        '$criancastr','$qtdadolescentes','$adolescentes','$adolescentesmod','$adolescentestr','$gravidez','$habmodalidade','$internet','$descinternet','$ubs',
        '$referenciaubs','$doenca','$lazer','$desclazer')");
      
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Icon -->
        <link rel="shortcut icon" href="./images/icon-head.png" type="image/x-icon">
        
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Ubuntu:wght@500&display=swap" rel="stylesheet">

        <!-- StyleSheets -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/ac611b35dd.js" crossorigin="anonymous"></script>

        <!-- Bootstrap Scripts-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <style>
            body {
                font-family: "Poppins", sans-serif;
                background-color: #52b788;
            }

            /* Navbar */

            .navbar {
                padding: 1rem;
                background-color: #52b788;
            }

            .navbar-brand {
                font-family: "Ubuntu", sans-serif;
                font-size: 1.5rem;
                font-weight: 600;
                text-transform: uppercase;
                color: #FFF;
                transition: 1.5s;
                margin: 0;
            }

            .nav-item {
                padding: 0.5px;
            }

            .nav-link {
                font-size: 1rem;
                font-weight: 300;
                color: #FFF;
                transition: 1.5s;
            }

            .offcanvas-body,
            .offcanvas-header {
                background-color: #52b788;
                color: #FFF;
            }

            /* Container */
            main {
                font-family: "Poppins", sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: -80px;
            }

            .main {
                background-color: #349268;
                width: 1000px;
                padding: 20px 25px;
                margin: 100px 20px;
                border-radius: 10px;
            }

            /*Form section*/

            /* form {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            } */

            /*Wrapper inputs*/

            .wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                border: #2d6a4f 1px solid;
                border-radius: 15px;
                padding: 20px;
                margin-top: 10px;
            }

            /*Container INputs*/
            .container-inputs {
                background-color: #FFF;
                border-radius: 15px;
                padding: 10px 20px;
                margin: 20px;
            }
            /*Box inputs*/

            .box-input:nth-child(2),
            .box-input:nth-child(3) {
                margin-left: 10px;
            }

            .box-input {
                width: 50%;
            }

            .box-input-alter {
                width: 100%;
            }

            /* Title */

            .title {
                font-family: "Ubuntu";
                font-size: 3rem;
                text-align: center;
                margin-bottom: 20px;
                font-weight: 700;
            }

            /* Subtitulos */
            .subtitle {
                font-size: 2rem;
            }
            .description {
                font-size: 1.2rem;
                color: red;
            }

            /*Wrapper radios*/

            .form-check-label {
                margin-right: 10px;
            }

            /*Label Select*/

            .label-select {
                margin-bottom: 5px;
            }

            /* Button */

            .btn {
                text-align: center;
                width: 100%;
            }

            /* Footer Section */

            #footer {
                color: #FFF;
                text-align: center;
                min-height: 90px;
                padding: 10px 100px;
                background-color: #52b788;
            }

            .footer-text {
                margin: 0;
            }

            .footer-icon {
                color: #2d6a4f;
                margin-bottom: 5px;
                margin-right: 15px;
            }

            .variant-color {
                color: #2d6a4f;
            }


            @media (max-width: 1100px) {

                .title,
                .subtitle {
                    font-size: 1.5rem;
                }

                label,
                p {
                    font-size: 0.9rem;
                }

                .container-fluid {
                    margin: 20px 0;
                }

                .container-inputs {
                    margin: 0 0 20px 0;
                }
                .wrapper {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }

                .wrapper div {
                    width: 100%;
                }

                .box-input,
                .box-input-alter {
                    margin-bottom: 1rem!important;
                }

                #footer {
                    padding: 10px 5px;
                }
            }

        </style>
        <title>Formulário</title>
    </head>
    <body>
    <!-- NavBar -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html">Serviço Social</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                        Menu
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="pibex.php">
                                <i class="fa-brands fa-wpforms"></i>
                                Formulário
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="grafico.html">
                                <i class="fa-solid fa-chart-line"></i>
                                Gráficos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-user"></i>
                                Perfil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.html">
                                <i class="fa-solid fa-circle-info"></i>
                                Sobre
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <div class="container-fluid main">
                <h1 class="title">Formulário do PIBEX</h1>

                <form action="pibex.php" method="POST">
                    <div class="wrapper-topic">
                        <h2 class="subtitle">1. Identificação</h2>

                        <div class="container-inputs">
                            <small class="description">1.1 Dados básicos</small>

                            <div class="mb-3 wrapper">
                                <div class="box-input">
                                    <label for="name">Nome: </label>
                                    <input type="text" class="form-control" id="nome" name="nome">
                                </div>
                                <div class="box-input">
                                    <label for="idade">Idade: </label>
                                    <input type="number" min="1" max="120" maxlength="2" class="form-control" id="idade" name="idade">
                                </div>
                                <div class="box-input">
                                    <label for="municipio">Município de Origem? </label>
                                    <input type="text" class="form-control" id="municipio" name="municipio">
                                </div>
                            </div>
                        </div>

                        <div class="container-inputs">
                            <small class="description">1.2 Escolaridade</small>

                            <div class="mb-3 wrapper">
                                <div class="box-input">
                                    <p>Ensino fundamental: </p>
                                    <div class="wrapper-radio">
                                        <input class="form-check-input" type="radio" name="fundamental" id="fund_incompleto" value="fund_incompleto">
                                        <label class="form-check-label" for="fund_incompleto">Incompleto</label>

                                        <input class="form-check-input" type="radio" name="fundamental" id="fund_completo" value="fund_completo">
                                        <label class="form-check-label" for="fund_completo">Completo</label>
                                    </div>
                                </div>
                                <div class="box-input">
                                    <p>Ensino médio:</p>
                                    <div class="wrapper-radio">
                                        <input class="form-check-input" type="radio" name="medio" id="medio_incompleto" value="medio_incompleto">
                                        <label class="form-check-label" for="medio_incompleto">Incompleto</label>

                                        <input class="form-check-input" type="radio" name="medio" id="medio_completo" value="medio_completo">
                                        <label class="form-check-label" for="medio_completo">Completo</label>
                                    </div>
                                </div>

                                <div class="box-input">
                                    <p>Ensino Superior:</p>
                                    <div class="wrapper-radio">
                                        <input class="form-check-input" type="radio" name="superior" id="sup_incompleto" value="sup_incompleto">
                                        <label class="form-check-label" for="sup_incompleto">Incompleto</label>

                                        <input class="form-check-input" type="radio" name="superior" id="sup_completo" value="sup_completo">
                                        <label class="form-check-label" for="sup_completo">Completo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-inputs">
                            <small class="description">1.3 Outros</small>

                            <div class="mb-3 wrapper">
                                <div class="box-input">
                                    <label for="religiao" class="label-select">Qual a sua religião? </label>
                                    <select name="religiao" id="religiao" class="form-select">
                                        <option value="default">Selecione...</option>
                                        <option value="catolico">Católico</option>
                                        <option value="evangelico">Evangélico</option>
                                        <option value="espirita">Espírita</option>
                                        <option value="budismo">Budismo</option>
                                        <option value="candomble">Candomblé</option>
                                        <option value="umbanda">Umbanda</option>
                                        <option value="hindu">Hinduísmo</option>
                                        <option value="outra">Outra</option>
                                    </select>
                                </div>

                                <div class="box-input">
                                    <label for="genero" class="label-select">Qual sua identidade de gênero? </label>
                                    <select name="genero" id="genero" class="form-select">
                                        <option value="default">Selecione...</option>
                                        <option value="hetero">Heterossexual</option>
                                        <option value="homo">Homossexual</option>
                                        <option value="bi">Bissexual</option>
                                        <option value="pan">Panssexual</option>
                                        <option value="assexual">Assexual</option>
                                        <option value="n-informar">Não quero informar</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 wrapper">
                            <div class="box-input">
                                    <label for="estado-civil" class="label-select">Qual seu estado civil? </label>
                                    <select name="estado" id="estado" class="form-select">
                                        <option value="default">Selecione...</option>
                                        <option value="solteiro">Solteiro</option>
                                        <option value="casado">Casado</option>
                                        <option value="uniao-estavel">União Estável</option>
                                        <option value="divorciado">Divorciado</option>
                                    </select>
                            </div>
                            
                            <div class="box-input">
                                <label for="raça" class="label-select">Como você se autodeclara? </label>
                                    <select name="etnia" id="raça" class="form-select">
                                        <option value="default">Selecione...</option>
                                        <option value="branco">Branco</option>
                                        <option value="Negro">Negro</option>
                                        <option value="Pardo">Pardo</option>
                                        <option value="Indigena">Indigena</option>
                                        <option value="Amarelo">Amarelo</option>
                                    </select>
                            </div>
                            </div>

                            <div class="mb-3 wrapper">
                                <div class="box-input">
                                    <p>Empregado?</p>

                                    <div class="wrapper-radio">
                                        <input type="radio" id="empregado" name="empregado" class="form-check-input" value="sim">
                                        <label for="sim" class="form-check-label">Sim</label>
                                        <input type="radio" id="empregado" name="empregado" class="form-check-input" value="nao">
                                        <label for="nao" class="form-check-label">Não</label>
                                    </div>
                                    
                                </div>

                                <div class="box-input">
                                    <p>Se resposta não, quanto tempo desempregado?</p>

                                    <div class="wrapper-radio">
                                        <input type="radio" id="nao-empregado" name="naoempregado" class="form-check-input" value="1ano">
                                        <label for="1ano" class="form-check-label">0</label>
                                        <input type="radio" id="nao-empregado" name="naoempregado" class="form-check-input" value="1ano">
                                        <label for="1ano" class="form-check-label">1 ano</label>
                                        <input type="radio" id="nao-empregado" name="naoempregado" class="form-check-input" value="2anos">
                                        <label for="2ano" class="form-check-label">2 anos</label>
                                        <input type="radio" id="nao-empregado" name="naoempregado" class="form-check-input" value="3anos ou mais">
                                        <label for="3ouMais" class="form-check-label">3 ou Mais</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 wrapper">
                                <div class="box-input">
                                    <label for="tempoTerritorio" class="label-select">Há quanto tempo você/sua família mora no território?</label>
                                    <select name="tempoTerritorio" id="tempoTerritorio" class="form-select">
                                        <option value="default">Selecione...</option>
                                        <option value="menos1Ano">menos de 1 ano</option>
                                        <option value="mais1Ano">mais de 1 ano</option>
                                        <option value="mais5Ano">mais de 5 anos</option>
                                        <option value="mais5Ano">mais de 10 anos</option>
                                    </select>
                                </div>

                                <div class="box-input">
                                    <p>Reconhece algum risco de desabamento no local?</p>

                                    <div class="wrapper-radio">
                                        <input type="radio" name="desabamento" id="desabamento" value="Sim" class="form-check-input">
                                        <label for="desabamento-sim" class="form-check-label">Sim</label>
                                        <input type="radio" name="desabamento" id="desabamento" value="Não" class="form-check-input">
                                        <label for="desabamento-nao" class="form-check-label">Não</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 wrapper">
                                <div class="box-input">
                                    <p>Você tem rede de apoio?</p>

                                    <div class="wrapper-radio">
                                        <input type="radio" name="apoio" id="apoio-sim" value="Sim" class="form-check-input">
                                        <label for="apoio-sim" class="form-check-label">Sim</label>
                                        <input type="radio" name="apoio" id="apoio-nao" value="Não" class="form-check-input">
                                        <label for="apoio-nao" class="form-check-label">Não</label>
                                    </div>
                                </div>

                                <div class="box-input">
                                    <label for="contar" class="label-select">Com quem você pode contar </label>
                                    <select name="contar" id="contar" class="form-select">
                                        <option value="default">Selecione...</option>
                                        <option value="comunidade">Comunidade</option>
                                        <option value="comadre">Comadre</option>
                                        <option value="igreja">Igreja</option>
                                        <option value="outro">Outro</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wrapper-topic">
                        <h2 class="subtitle">2. Família</h2>

                        <div class="container-inputs">
                            <small class="description">2.1 Renda per capita</small>

                            <div class="mb-3 wrapper">
                                <div class="box-input">
                                    <label for="qtd-pessoas" class="label-select">Quantas pessoas moram na mesma casa?</label>
                                    <select name="qtdpessoas" id="qtd-pessoas" class="form-select">
                                        <option value="default">Selecione...</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>

                                <div class="box-input">
                                    <label for="qtd-criancas" class="label-select">Quantas crianças moram na residência?</label>
                                    <select name="qtdcriancas" id="qtd-criancas" class="form-select">
                                        <option value="default">Selecione...</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>

                                <div class="box-input">
                                    <label for="qtd-adolesc" class="label-select">Quantos adolescentes moram na residência?</label>
                                    <select name="qtdadolesc" id="qtd-adolesc" class="form-select">
                                        <option value="default">Selecione...</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 wrapper">
                                <div class="box-input">
                                    <p>Há pessoas com deficiência na fámilia?</p>

                                    <div class="wrapper-radio">
                                        <input type="radio" name="deficiencia" id="deficiencia-sim" value="Sim" class="form-check-input">
                                        <label for="deficiencia-sim" class="form-check-label">Sim</label>
                                        <input type="radio" name="deficiencia" id="deficiencia-nao" value="Não" class="form-check-input">
                                        <label for="deficiencia-nao" class="form-check-label">Não</label>
                                    </div>
                                </div>

                                <div class="box-input">
                                    <label for="text">Se sim, qual: </label>
                                    <input type="text" class="form-control" id="desc-def" name="simdef" value="Qual deficiência">
                                </div>
                            </div>

                            <div class="mb-3 wrapper">
                                <div class="box-input-alter">
                                    <label for="renda" class="label-select">Qual a renda mensal familiar? (considerar a soma das rendas de todos os familiares que trabalham e que moram com você)</label>
                                    <select name="renda" id="renda" class="form-select">
                                        <option value="default">Selecione...</option>
                                        <option value="nivel1">Até meio salário mínimo (até R$ 606,00)</option>
                                        <option value="nivel">Entre meio salário até R$ 1.212,00</option>
                                        <option value="nivel3">R$ 1.212,00 a R$ 2.424,00</option>
                                        <option value="nivel4">R$ 2.425,00 a R$ 4.850,00</option>
                                        <option value="nivel5">Acima de R$ 4.851,00</option>
                                        <option value="nivel6">Nenhuma – renda nula</option>
                                        <option value="nivel7">Não sei informar</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 wrapper">
                                <div class="box-input">
                                    <p>Tem disponibilidade para trabalhar?</p>

                                    <div class="wrapper-radio">
                                        <input type="radio" name="disptrabalho" id="disp-trabalho-sim" value="Sim" class="form-check-input">
                                        <label for="disp-trabalho-sim" class="form-check-label">Sim</label>
                                        <input type="radio" name="disptrabalho" id="disp-trabalho-sim" value="Não" class="form-check-input">
                                        <label for="disp-trabalho-sim" class="form-check-label">Não</label>
                                    </div>
                                </div>

                                <div class="box-input">
                                    <p>Se não, porquê?</p>

                                    <div class="wrapper-radio">                               
                                        <input type="radio" name="semdisp" id="criança" value="criança" class="form-check-input">
                                        <label for="criança" class="form-check-label">Nenhum motivo</label>
                                        <input type="radio" name="semdisp" id="criança" value="criança" class="form-check-input">
                                        <label for="criança" class="form-check-label">Criança</label>
                                        <input type="radio" name="semdisp" id="idoso" value="idoso" class="form-check-input">
                                        <label for="idoso" class="form-check-label">Idoso</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 wrapper">
                                <div class="box-input-alter">
                                    <label for="provedor" class="label-select">Qual a situação de trabalho dos(as) provedores(as) da família?
                                    </label>
                                    <select name="provedor" id="provedor" class="form-select">
                                        <option value="default">Selecione...</option>
                                        <option value="cuidadora">Cuidadora do lar</option>         
                                        <option value="autonomo">Trabalhador(a) autônomo(a)</option>
                                        <option value="formal">Trabalhador(a) formal (com registro em carteira)</option>
                                        <option value="estudante">Estudante</option>
                                        <option value="pensionista">Pensionista</option>
                                        <option value="aposentado">Aposentado(a)</option>
                                        <option value="outros">Outros</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 wrapper">
                                <div class="box-input-alter">
                                    <label for="beneficio" class="label-select">Recebe algum tipo de benefício?</label>
                                    <select name="beneficio" id="beneficio" class="form-select">
                                        <option value="default">Selecione...</option>
                                        <option value="bpc-idoso">BPC idoso</option>                       
                                        <option value="pcd">BPC PCD </option> 
                                        <option value="auxilio-brasil">Auxilio Brasil</option>  
                                        <option value="cesta-basica">Cesta Básica</option>
                                        <option value="auxilio-gas">Auxílio Gás</option>                         
                                        <option value="outros">Outros</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                            <div class="wrapper-topic">
                                <h2 class="subtitle">3. Educação</h2>
    
                                <div class="container-inputs">
                                    <small class="description">3.1 Dados básicos</small>
        
                                    <div class="mb-3 wrapper">
                                        <div class="box-input">
                                            <p>Há creche no bairro?</p>
        
                                            <div class="wrapper-radio">
                                                <input type="radio" name="creche" id="creche-sim" value="Sim" class="form-check-input">
                                                <label for="creche-sim" class="form-check-label">Sim</label>
                                                <input type="radio" name="creche" id="creche-nao" value="Não" class="form-check-input">
                                                <label for="creche-nao" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                        <div class="box-input">
                                            <p>Há escola Municipal?</p>
        
                                            <div class="wrapper-radio">
                                                <input type="radio" name="escolamunicipal" id="escola-municipal-sim" value="Sim" class="form-check-input">
                                                <label for="escola-municipal-sim" class="form-check-label">Sim</label>
                                                <input type="radio" name="escolamunicipal" id="escola-municipal-nao" value="Não" class="form-check-input">
                                                <label for="escola-municipal-nao" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 wrapper">
                                        <div class="box-input-alter">
                                            <label for="grau" class="label-select">Qual o seu grau de escolaridade?</label>
                                            <select name="grau" id="grau" class="form-select">
                                                <option value="default">Selecione...</option>
                                                <option value="nunca">Nunca frequentou a escola</option>
                                                <option value="fundamental-incompleto">Ensino fundamental incompleto</option>
                                                <option value="fundamental-completo">Ensino fundamental completo (concluiu o 9º ano, antiga 8º série)</option>
                                                <option value="medio-incompleto">Ensino médio incompleto</option>
                                                <option value="medio-completo">Ensino médio completo ( concluiu os 3 anos após do ensino fundamental)</option>
                                                <option value="superior-incompleto">Ensino superior incompleto</option>
                                                <option value="superior-completo">Ensino superior completo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-inputs">
                                    <small class="description">3.2 Criança</small>
                                    
                                    <div class="mb-3 wrapper">
                                        <div class="box-input">
                                            <label for="criancas">Quantas crianças moram na casa?</label>
                                            <input type="number" class="form-control" id="desc-def" name="criancaCasa">
                                        </div>

                                        <div class="box-input">
                                            <p>Todas frequentam a escola?</p>
        
                                            <div class="wrapper-radio">
                                                <input type="radio" name="criancaEscola" id="criancas-escola-sim" value="Sim" class="form-check-input">
                                                <label for="criancas-escola-sim" class="form-check-label">Sim</label>
                                                <input type="radio" name="criancaEscola" id="criancas-escola-nao" value="Não" class="form-check-input">
                                                <label for="criancas-escola-nao" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="mb-3 wrapper">
                                        <div class="box-input">
                                            <label for="criancas-modalidade" class="label-select">Qual modalidade atualmente?</label>
                                            <select name="criancasmod" id="criancas-modalidade" class="form-select">
                                                <option value="default">Selecione...</option>
                                                <option value="bercario">Berçário</option>
                                                <option value="maternal">Maternal</option>
                                                <option value="infantil">Educação Infantil</option>
                                                <option value="fundamental">Fundamental I (1.º ao 5.º ano)</option>
                                            </select>
                                        </div>
        
                                        <div class="box-input">
                                            <p>O aluna(o) utiliza transporte escolar?</p>
        
                                            <div class="wrapper-radio">
                                                <input type="radio" name="criancastr" id="criancas-transporte-sim" value="Sim" class="form-check-input">
                                                <label for="criancas-transporte-sim" class="form-check-label">Sim</label>
                                                <input type="radio" name="criancastr" id="criancas-transporte-nao" value="Não" class="form-check-input">
                                                <label for="criancas-transporte-nao" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-inputs">
                                    <small class="description">3.3 Adolescente</small>
                                    
                                    <div class="mb-3 wrapper">
                                        <div class="box-input">
                                            <label for="qtdadolescentes">Quantas adolescentes moram na casa?</label>
                                            <input type="number" class="form-control" id="adolescentes" name="qtdadolescentes" value="Quantidade adolescentes">
                                        </div>

                                        <div class="box-input">
                                            <p>Todas frequentam a escola?</p>
        
                                            <div class="wrapper-radio">
                                                <input type="radio" name="adolescentes" id="adolescentes-sim" value="Sim" class="form-check-input">
                                                <label for="adolescentes-sim" class="form-check-label">Sim</label>
                                                <input type="radio" name="adolescentes" id="adolescentes-nao" value="Não" class="form-check-input">
                                                <label for="adolescentes-nao" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 wrapper">
                                        <div class="box-input-alter">
                                            <label for="adolescentes-modalidade" class="label-select">Qual modalidade atualmente?</label>
                                            <select name="adolescentesmod" id="adolescentes-modalidade" class="form-select">
                                                <option value="default">Selecione...</option>
                                                <option value="bercario">Fundamental II (6º ao 9º ano)</option>
                                                <option value="maternal">Ensino Médio</option>
                                                <option value="infantil">EJA</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 wrapper">
                                        <div class="box-input">
                                            <p>O aluna(o) utiliza transporte escolar?</p>
        
                                            <div class="wrapper-radio">
                                                <input type="radio" name="adolescentestr" id="adolescentes-transporte-sim" value="Sim" class="form-check-input">
                                                <label for="adolescentes-transporte-sim" class="form-check-label">Sim</label>
                                                <input type="radio" name="adolescentestr" id="adolescentes-transporte-nao" value="Não" class="form-check-input">
                                                <label for="adolescentes-transporte-nao" class="form-check-label">Não</label>
                                            </div>
                                        </div>

                                        <div class="box-input">
                                            <p>Tem algum caso de gravidez na adolescência na família?</p>
        
                                            <div class="wrapper-radio">
                                                <input type="radio" name="gravidez" id="gravidez-sim" value="Sim" class="form-check-input">
                                                <label for="gravidez-sim" class="form-check-label">Sim</label>
                                                <input type="radio" name="gravidez" id="gravidez-nao" value="Não" class="form-check-input">
                                                <label for="gravidez-nao" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="wrapper-topic">
                            <h2 class="subtitle">4. Habitação</h2>
    
                            <div class="container-inputs">
                                <small class="description">4.1 Dados básicos</small>
    
                                <div class="mb-3 wrapper">
                                    <div class="box-input">
                                        <label for="hab-modalidade" class="label-select">Qual modalidade atualmente?</label>
                                        <select name="habmodalidade" id="hab-modalidade" class="form-select">
                                            <option value="default">Selecione...</option>
                                            <option value="alvenaria-revestimento">Alvenaria/tijolo com revestimento</option>
                                            <option value="alvenaria-sem-reves">Alvenaria/tijolo sem revestimento</option>
                                            <option value="madeira">Madeira aparelhada</option>
                                            <option value="madeira-aproveitada">Madeira aproveitada</option>
                                            <option value="outro-material">Outro material</option>
                                        </select>
                                    </div>

                                    <div class="box-input">
                                        <p>A família tem acesso à internet?</p>
    
                                        <div class="wrapper-radio">
                                            <input type="radio" name="internet" id="internet-sim" value="Sim" class="form-check-input">
                                            <label for="internet-sim" class="form-check-label">Sim</label>
                                            <input type="radio" name="internet" id="internet-nao" value="Não" class="form-check-input">
                                            <label for="internet-nao" class="form-check-label">Não</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 wrapper">
                                    <div class="box-input-alter">
                                        <label for="desc-internet" class="label-select">Complementando a pergunta anterior, se a resposta for SIM, como acessa a internet:</label>
                                        <select name="descinternet" id="desc-internet" class="form-select">
                                            <option value="default">Nenhuma opção...</option>
                                            <option value="default">Selecione...</option>
                                            <option value="pc-casa">Do computador de casa</option>
                                            <option value="cel-pessoal">Do celular pessoal</option>
                                            <option value="cel-emprestado">De celular emprestado</option>
                                            <option value="lan-house">De lan house</option>
                                            <option value="vizinho">Da casa de um(a) vizinho(a) e/ou amigo(a)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wrapper-topic">
                            <h2 class="subtitle">5. Saúde</h2>
    
                            <div class="container-inputs">
                                <small class="description">5.1 Dados básicos</small>
    
                                <div class="mb-3 wrapper">
                                    <div class="box-input">
                                        <p>Há Acesso à UBS?</p>
    
                                        <div class="wrapper-radio">
                                            <input type="radio" name="ubs" id="ubs-sim" value="Sim" class="form-check-input">
                                            <label for="ubs-sim" class="form-check-label">Sim</label>
                                            <input type="radio" name="ubs" id="ubs-nao" value="Não" class="form-check-input">
                                            <label for="ubs-nao" class="form-check-label">Não</label>
                                        </div>
                                    </div>
                                    
                                    <div class="box-input">
                                        <label for="referencia-ubs">Se sim, qual a sua UBS de referência</label>
                                        <input type="text" class="form-control" id="referencia-ubs" name="referenciaubs">
                                    </div>
                                </div>

                                <div class="mb-3 wrapper">
                                    <div class="box-input-alter">
                                        <label for="doenca" class="label-select">Há pessoas da família com doenças crônicas?</label>
                                        <select name="doenca" id="doenca" class="form-select">
                                            <option value="default">Nenhuma opção...</option>
                                            <option value="default">Selecione...</option>
                                            <option value="diabetes">Diabetes</option>
                                            <option value="pressao-alta">Pressão Alta</option>
                                            <option value="colesterol">Colesterol</option>
                                            <option value="avc">AVC</option>
                                            <option value="doencas-cardiacas">Doenças Cardíacas</option>
                                            <option value="asma">Asma</option>
                                            <option value="outras">Outras</option>
                                        </select>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="wrapper-topic">
                            <h2 class="subtitle">6. Lazer</h2>
    
                            <div class="container-inputs">
                                <small class="description">6.1 Dados básicos</small>
    
                                <div class="mb-3 wrapper">
                                    <div class="box-input">
                                        <p>Há área de lazer no bairro?</p>
    
                                        <div class="wrapper-radio">
                                            <input type="radio" name="lazer" id="lazer-sim" value="Sim" class="form-check-input">
                                            <label for="lazer-sim" class="form-check-label">Sim</label>
                                            <input type="radio" name="lazer" id="lazer-nao" value="Não" class="form-check-input">
                                            <label for="lazer-nao" class="form-check-label">Não</label>
                                        </div>
                                    </div>
                                    
                                    <div class="box-input">
                                        <label for="desc-lazer">Se sim, qual?</label>
                                        <input type="text" class="form-control" id="desc-lazer" name="desclazer">
                                    </div>
                                </div>
                            </div> 
                            
                            <button type="submit" name="submit" id="submit" class="btn btn-light">Enviar dados</button>
                        </div>  
                </form>
            </div>
        </main>
        <footer id="footer">
            <div class="container-fluid">
                <a href="#"><i class="fa-brands fa-telegram fa-2x footer-icon"></i></a>
                <a href="#"><i class="social-icon fa fa-solid fa-2x fa-envelope footer-icon"></i></a>
                <a href="#"><i class="fa-brands fa-github fa-2x footer-icon"></i></a>
        
                <p class="footer-text">Desenvolvido por <span class="variant-color">WolfPack</span> | Todos os direitos reservados. &copy; 2022</p>
            </div>
        </footer>
    </body>
</html> 
