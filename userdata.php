<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

    $records = $conn->prepare('SELECT id,email,password FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = NULL;

    if( count($results) > 0){
        $user = $results;
    }

}

?>

<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<link rel="stylesheet" href="css/bootstrap.css" />
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Blog Single - Hola</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>


<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">
            
        <div class="header-logo">
            <a class="site-logo" href="index.html"><img src="images/logo.png" alt="Homepage"></a>
        </div>

         <nav class="header-nav-wrap">
            <ul class="header-nav">
                <li><a href="index.php#home" title="home">Home</a></li>
                <li><a href="index.php#about" title="about">História</a></li>
                <li><a href="index.php#works" title="works">Liga Garra de Águia</a></li>
                <li class="current"><a href="blog.html" title="blog">Atibaia II</a></li>
                <li><a href="index.php#contact" title="contact">Contato</a></li>   
            </ul>
        </nav>


        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


    <article class="blog-single">

        <!-- page header/blog hero
        ================================================== -->
        <div class="page-header page-header--single page-hero" style="background-image:url(images/blog/blog-bg-01.jpg)">
        
            <div class="row page-header__content narrow">
                <article class="col-full">
                    <div class="page-header__info">
                        <div class="page-header__cat">
                            <a href="#0">Cadastro do Atleta</a>
                        </div>
                    </div>
                    <h1 class="page-header__title">
                        <a href="#0" title="">
                            Insira seus dados pessoais logo abaixo!
                        </a>
                    </h1>
                    <ul class="page-header__meta">
                        <li class="date">Novas turmas - 2017</li>
                        <li class="author">
                            - 
                            <span>  Instrutora Andressa Nardini</span>
                        </li>
                    </ul>
                    
                </article>
            </div>
    
        </div> <!-- end page-header -->

        <div class="row blog-content">
            <div class="col-full blog-content__main">


        <form id="formulario_usuario" method="post" action="">
            <div class="input-prepend"><label>Nome Completo</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="nome" placeholder="Nome:" />
            </div>
            <div class="input-prepend"><label>E-mail</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="email" placeholder="E-mail:" />
            </div>
            <div class="input-prepend"><label>Senha:</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="password" name="senha" placeholder="Senha:" />
            </div>
            <div class="input-prepend"><label>Endereço</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="endereco" placeholder="Endereço:" />
            </div>
            <div class="input-prepend"><label>Número</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="number" name="numero" placeholder="Número:"  min="0" max="10000" />
            </div>
            <div class="input-prepend"><label>Bairro</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="bairro" placeholder="Bairro:" />
            </div>
            <div class="input-prepend"><label>Cidade</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="cidade" placeholder="Cidade:" />
            </div>
            <div class="input-prepend"><label>Estado</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <select name="estado">
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>
                </select>
            </div>
            <div class="input-prepend"><label>CEP</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="cep" placeholder="CEP:" size="30" maxlength="10" onKeyPress="MascaraCep(formulario_usuario.cep);" />
            </div>
            <div class="input-prepend"><label>Nome da Mãe</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="nomeMae" placeholder="Nome da Mãe" />
            </div>
            <div class="input-prepend"><label>Nome do Pai</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="nomePai" placeholder="Nome do Pai:" />
            </div>
            <div class="input-prepend"><label>RG</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <!-- <input type="text" name="numRG" placeholder="RG:" /> -->
                <input name="rg" type="text" id="numRG" size="30" maxlength="12" onKeyPress="MascaraRG(formulario_usuario.numRG);" placeholder="RG:"/>
            </div>
            <div class="input-prepend"><label>CPF</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="numCPF" placeholder="CPF:" size="30" maxlength="14" onKeyPress="MascaraCPF(formulario_usuario.numCPF);" />
            </div>
            <div class="input-prepend"><label>Data de Nascimento</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="date" name="dataNasc" placeholder="Data Nascimento:" />
            </div>
            <div class="input-prepend"><label>Sexo</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <select name="sexo">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>
            </div>
            <div class="input-prepend"><label>Modalidade</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="modalidade" placeholder="Modalidade:" />
            </div>
            <div class="input-prepend"><label>Escolaridade</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <select name="escolaridade">
                    <option value="Fundamental 1">Fundamental 1</option>
                    <option value="Fundamental 2">Fundamental 2</option>
                    <option value="Médio">Médio</option>
                    <option value="Superior">Superior</option>
                </select>
            </div>
            <div class="input-prepend"><label>Estado Civíl</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <select name="estadoCivil">
                    <option value="Solteiro(a)">Solteiro(a)</option>
                    <option value="Casado(a)">Casado(a)</option>
                    <option value="Divorciado(a)/Seperado(a)">Divorciado(a)/Seperado(a)</option>
                    <option value="Viúvo(a)">Viúvo(a)</option>
                </select>
            </div>
            <div class="input-prepend"><label>Profissão</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="profissao" placeholder="Profissão:" />
            </div>
            <div class="input-prepend"><label>Telefone Residencial</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="telResidencial" placeholder="Telefone Residencial:" size="30" maxlength="15" onKeyPress="MascaraTelefone(telResidencial);" />
            </div>
            <div class="input-prepend"><label>Celular</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="telCelular" placeholder="Telefone Celular:" size="30" maxlength="15" onKeyPress="MascaraTelefone(telCelular);" />
            </div>
            <div class="input-prepend"><label>WhatsApp</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="whatsApp" placeholder="WhatsApp:" size="30" maxlength="15" onKeyPress="MascaraTelefone(whatsApp);" />
            </div>
            <br />
            <br />

            <div class="input-prepend">
                <label>Fala outros idiomas?</label>
                <input type="radio" name="outroIdioma" id="idiomaSim" value="Sim" /><label for="idiomaSim">Sim</label>
                <input type="radio" name="outroIdioma" id="idiomaNao" value="Não" /><label for="idiomaNao">Não</label>
                <input type="text" name="qualIdioma" placeholder="Outros idiomas:" />
            </div>
            <div class="input-prepend">
                <label>Estuda?</label>
                <input type="radio" name="estudaAinda" id="estudaSim" value="Sim" /><label for="estudaSim">Sim</label>
                <input type="radio" name="estudaAinda" id="estudaNao" value="Não" /><label for="estudaNao">Não</label>
                <input type="text" name="qualCurso" placeholder="Quais cursos:" />
            </div>
            <div class="input-prepend">
                <label>Pratica Esporte atualmente?</label>
                <input type="radio" name="praticaEsporte" id="praticaSim" value="Sim" /><label for="praticaSim">Sim</label>
                <input type="radio" name="praticaEsporte" id="praticaNao" value="Não" /><label for="praticaNao">Não</label>
                <input type="text" name="qualEsporte" placeholder="Quais esportes:" />
            </div>
            <div class="input-prepend">
                <label>Possui problema de saúde?</label>
                <input type="radio" name="problemaSaude" id="problemaSim" value="Sim" /><label for="problemaSim">Sim</label>
                <input type="radio" name="problemaSaude" id="problemaNao" value="Não" /><label for="problemaNao">Não</label>
                <input type="text" name="qualProblema" placeholder="Quais problemas:" />
            </div>
            <div class="input-prepend">
                <label>Possui Convenio?</label>
                <input type="radio" name="possuiConvenio" id="convenioSim" value="Sim" /><label for="possuiConvenio">Sim</label>
                <input type="radio" name="possuiConvenio" id="convenioNao" value="Não" /><label for="convenioNao">Não</label>
                <input type="text" name="qualConvenio" placeholder="Qual convenio:" />
            </div>
            <div class="input-prepend">
                <label>Já praticou alguma arte marcial?</label>
                <input type="radio" name="arteMarcial" id="marcialSim" value="Sim" /><label for="marcialSim">Sim</label>
                <input type="radio" name="arteMarcial" id="marcialNao" value="Não" /><label for="marcialNao">Não</label>
                <input type="text" name="qualArte" placeholder="Quais artes marciais:" />
            </div>
            <br />
            <input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar dados">                  
        </form>

            </div>
        </div>
                

    </article>


    <!-- footer
    ================================================== -->
   <footer>
        <div class="row">
            <div class="col-full">

                <div class="footer-logo">
                    <a class="footer-site-logo" href="#0"><img src="images/logo.png" alt="Homepage"></a>
                </div>

                <ul class="footer-social">
                    <li><a href="#0">
                        <i class="im im-facebook" aria-hidden="true"></i>
                        <span>Facebook</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-twitter" aria-hidden="true"></i>
                        <span>Twitter</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-instagram" aria-hidden="true"></i>
                        <span>Instagram</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-pinterest" aria-hidden="true"></i>
                        <span>Pinterest</span>
                    </a></li>
                </ul>
                    
            </div>
        </div>
    
            <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Losmacacos 2017</span> 
                    <span>Design by Losmacacos</span>   
                </div>

                <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="im im-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->
        </footer> <!-- end footer -->
    
    
        <div id="preloader"> 
            <div id="loader"></div>
        </div>
    
    
        <!-- Java Script
        ================================================== -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/jQuery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/MascaraValidacao.js"></script>

</body>

</html>