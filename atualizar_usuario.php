
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
    <title>Cadastro de Usuário - Atibaia 2</title>
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
                <li><a href="index.html#home" title="home">Home</a></li>
                <li><a href="index.html#about" title="about">História</a></li>
                <li><a href="index.html#works" title="works">Liga Garra de Águia</a></li>
                <li class="current"><a href="blog.html" title="blog">Atibaia II</a></li>
                <li><a href="index.html#contact" title="contact">Contato</a></li>   
            </ul>
        </nav>


        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


    <article class="blog-single">

        <!-- page header/blog hero
        ================================================== -->
        <div class="page-header page-header--single page-hero" style="background-image:url(images/blog/blog-bg-02.jpg)">
        
            <div class="row page-header__content narrow">
                <article class="col-full">
                    <div class="page-header__info">
                        <div class="page-header__cat">
                            Cadastro do Atleta
                        </div>
                    </div>
                    <h1 class="page-header__title">
                        
                            Insira seus dados pessoais logo abaixo!
                        
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

        <?php
        require_once 'classes/Usuarios.php';
        $usuario = new Usuarios();

        if(isset($_POST['cadastrar'])):

            $nome  = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $endereco = $_POST['endereco'];
            $numero = $_POST['numero'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $cep = $_POST['cep'];
            $nomeMae = $_POST['nomeMae'];
            $nomePai = $_POST['nomePai'];
            $numRG = $_POST['numRG'];
            $numCPF = $_POST['numCPF'];
            $dataNasc = $_POST['dataNasc'];
            $sexo = $_POST['sexo'];
            $modalidade = $_POST['modalidade'];
            $escolaridade = $_POST['escolaridade'];
            $estadoCivil = $_POST['estadoCivil'];
            $profissao = $_POST['profissao'];
            $telResidencial = $_POST['telResidencial'];
            $telCelular = $_POST['telCelular'];
            $whatsApp = $_POST['whatsApp'];
            $outroIdioma = $_POST['outroIdioma'];
            $qualIdioma = $_POST['qualIdioma'];
            $estudaAinda = $_POST['estudaAinda'];
            $qualCurso = $_POST['qualCurso'];
            $praticaEsporte = $_POST['praticaEsporte'];
            $qualEsporte = $_POST['qualEsporte'];
            $problemaSaude = $_POST['problemaSaude'];
            $qualProblema = $_POST['qualProblema'];
            $possuiConvenio = $_POST['possuiConvenio'];
            $qualConvenio = $_POST['qualConvenio'];
            $arteMarcial = $_POST['arteMarcial'];
            $qualArte = $_POST['qualArte'];

            $usuario->setNome($nome);
            $usuario->setEmail($email);
            $usuario->setSenha($senha);
            $usuario->setEndereco($endereco);
            $usuario->setNumero($numero);
            $usuario->setBairro($bairro);
            $usuario->setCidade($cidade);
            $usuario->setEstado($estado);
            $usuario->setCep($cep);
            $usuario->setNomeMae($nomeMae);
            $usuario->setNomePai($nomePai);
            $usuario->setNumRG($numRG);
            $usuario->setNumCPF($numCPF);
            $usuario->setDataNasc($dataNasc);
            $usuario->setSexo($sexo);
            $usuario->setModalidade($modalidade);
            $usuario->setEscolaridade($escolaridade);
            $usuario->setEstadoCivil($estadoCivil);
            $usuario->setProfissao($profissao);
            $usuario->setTelResidencial($telResidencial);
            $usuario->setTelCelular($telCelular);
            $usuario->setWhatsApp($whatsApp);
            $usuario->setOutroIdioma($outroIdioma);
            $usuario->setQualIdioma($qualIdioma);
            $usuario->setEstudaAinda($estudaAinda);
            $usuario->setQualCurso($qualCurso);
            $usuario->setPraticaEsporte($praticaEsporte);
            $usuario->setQualEsporte($qualEsporte);
            $usuario->setProblemaSaude($problemaSaude);
            $usuario->setQualProblema($qualProblema);
            $usuario->setPossuiConvenio($possuiConvenio);
            $usuario->setQualConvenio($qualConvenio);
            $usuario->setArteMarcial($arteMarcial);
            $usuario->setQualArte($qualArte);

            # Insert
            if($usuario->insert()){
                echo "Inserido com sucesso!";
            }

        endif;

        ?>

        <?php 
        if(isset($_POST['atualizar'])):

            $id = $_POST['id'];
            
            $nome  = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $endereco = $_POST['endereco'];
            $numero = $_POST['numero'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $cep = $_POST['cep'];
            $nomeMae = $_POST['nomeMae'];
            $nomePai = $_POST['nomePai'];
            $numRG = $_POST['numRG'];
            $numCPF = $_POST['numCPF'];
            $dataNasc = $_POST['dataNasc'];
            $sexo = $_POST['sexo'];
            $modalidade = $_POST['modalidade'];
            $escolaridade = $_POST['escolaridade'];
            $estadoCivil = $_POST['estadoCivil'];
            $profissao = $_POST['profissao'];
            $telResidencial = $_POST['telResidencial'];
            $telCelular = $_POST['telCelular'];
            $whatsApp = $_POST['whatsApp'];
            $outroIdioma = $_POST['outroIdioma'];
            $qualIdioma = $_POST['qualIdioma'];
            $estudaAinda = $_POST['estudaAinda'];
            $qualCurso = $_POST['qualCurso'];
            $praticaEsporte = $_POST['praticaEsporte'];
            $qualEsporte = $_POST['qualEsporte'];
            $problemaSaude = $_POST['problemaSaude'];
            $qualProblema = $_POST['qualProblema'];
            $possuiConvenio = $_POST['possuiConvenio'];
            $qualConvenio = $_POST['qualConvenio'];
            $arteMarcial = $_POST['arteMarcial'];
            $qualArte = $_POST['qualArte'];

            $usuario->setNome($nome);
            $usuario->setEmail($email);
            $usuario->setSenha($senha);
            $usuario->setEndereco($endereco);
            $usuario->setNumero($numero);
            $usuario->setBairro($bairro);
            $usuario->setCidade($cidade);
            $usuario->setEstado($estado);
            $usuario->setCep($cep);
            $usuario->setNomeMae($nomeMae);
            $usuario->setNomePai($nomePai);
            $usuario->setNumRG($numRG);
            $usuario->setNumCPF($numCPF);
            $usuario->setDataNasc($dataNasc);
            $usuario->setSexo($sexo);
            $usuario->setModalidade($modalidade);
            $usuario->setEscolaridade($escolaridade);
            $usuario->setEstadoCivil($estadoCivil);
            $usuario->setProfissao($profissao);
            $usuario->setTelResidencial($telResidencial);
            $usuario->setTelCelular($telCelular);
            $usuario->setWhatsApp($whatsApp);
            $usuario->setOutroIdioma($outroIdioma);
            $usuario->setQualIdioma($qualIdioma);
            $usuario->setEstudaAinda($estudaAinda);
            $usuario->setQualCurso($qualCurso);
            $usuario->setPraticaEsporte($praticaEsporte);
            $usuario->setQualEsporte($qualEsporte);
            $usuario->setProblemaSaude($problemaSaude);
            $usuario->setQualProblema($qualProblema);
            $usuario->setPossuiConvenio($possuiConvenio);
            $usuario->setQualConvenio($qualConvenio);
            $usuario->setArteMarcial($arteMarcial);
            $usuario->setQualArte($qualArte);


            if($usuario->update($id)){
                echo "<script>window.location=\"consulta_usuarios.php\"</script>";
                echo "Atualizado com sucesso!";
            }

        endif;
        ?>

        <?php
        if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

            $id = (int)$_GET['id'];
            if($usuario->delete($id)){
                echo "Deletado com sucesso!";
            }

        endif;
        ?>

        <?php
        if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

            $id = (int)$_GET['id'];
            $resultado = $usuario->find($id);
        ?>

        <form id="formulario_usuario" method="post" action="">
            <div class="input-prepend"><label>Nome Completo</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="nome" value="<?php echo $resultado->nome; ?>" placeholder="Nome:" />
            </div>
            <div class="input-prepend"><label>E-mail</label>
                <!-- <span class="add-on"><i class="icon-envelope"></i></span> -->
                <input type="text" name="email" value="<?php echo $resultado->email; ?>" placeholder="E-mail:" />
            </div>
            <div class="input-prepend"><label>Senha</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="password" name="senha" value="<?php echo $resultado->senha; ?>" placeholder="Senha:" />
            </div>
            <div class="input-prepend"><label>Endereço</label>
               <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="endereco" value="<?php echo $resultado->endereco; ?>" placeholder="Endereco:" />
            </div>
            <div class="input-prepend"><label>Número</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="numero" value="<?php echo $resultado->numero; ?>" placeholder="Numero:" min="0" max="10000" />
            </div>
            <div class="input-prepend"><label>Bairro</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="bairro" value="<?php echo $resultado->bairro; ?>" placeholder="Bairro:" />
            </div>
            <div class="input-prepend"><label>Cidade</label>
               <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="cidade" value="<?php echo $resultado->cidade; ?>" placeholder="Cidade:" />
            </div>
            <div class="input-prepend"><label>Estado</label>
               <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <select name="estado" >
                    <option value="Acre" <?php echo ($resultado->estado == "Acre" ? 'selected': ''); ?> >Acre</option>
                    <option value="Alagoas" <?php echo ($resultado->estado == "Alagoas" ? 'selected': ''); ?> >Alagoas</option>
                    <option value="Amapá" <?php echo ($resultado->estado == "Amapá" ? 'selected': ''); ?> >Amapá</option>
                    <option value="Amazonas" <?php echo ($resultado->estado == "Amazonas" ? 'selected': ''); ?> >Amazonas</option>
                    <option value="Bahia" <?php echo ($resultado->estado == "Bahia" ? 'selected': ''); ?> >Bahia</option>
                    <option value="Ceará" <?php echo ($resultado->estado == "Ceará" ? 'selected': ''); ?> >Ceará</option>
                    <option value="Distrito Federal" <?php echo ($resultado->estado == "Distrito Federal" ? 'selected': ''); ?> >Distrito Federal</option>
                    <option value="Espírito Santo" <?php echo ($resultado->estado == "Espírito Santo" ? 'selected': ''); ?> >Espírito Santo</option>
                    <option value="Goiás" <?php echo ($resultado->estado == "Goiás" ? 'selected': ''); ?> >Goiás</option>
                    <option value="Maranhão" <?php echo ($resultado->estado == "Maranhão" ? 'selected': ''); ?> >Maranhão</option>
                    <option value="Mato Grosso" <?php echo ($resultado->estado == "Mato Grosso" ? 'selected': ''); ?> >Mato Grosso</option>
                    <option value="Mato Grosso do Sul" <?php echo ($resultado->estado == "Mato Grosso do Sul" ? 'selected': ''); ?> >Mato Grosso do Sul</option>
                    <option value="Minas Gerais" <?php echo ($resultado->estado == "Minas Gerais" ? 'selected': ''); ?> >Minas Gerais</option>
                    <option value="Pará" <?php echo ($resultado->estado == "Pará" ? 'selected': ''); ?> >Pará</option>
                    <option value="Paraíba" <?php echo ($resultado->estado == "Paraíba" ? 'selected': ''); ?> >Paraíba</option>
                    <option value="Paraná"<?php echo ($resultado->estado == "Paraná" ? 'selected': ''); ?> >Paraná</option>
                    <option value="Pernambuco" <?php echo ($resultado->estado == "Pernambuco" ? 'selected': ''); ?> >Pernambuco</option>
                    <option value="Piauí" <?php echo ($resultado->estado == "Piauí" ? 'selected': ''); ?> >Piauí</option>
                    <option value="Rio de Janeiro"<?php echo ($resultado->estado == "Rio de Janeiro" ? 'selected': ''); ?> >Rio de Janeiro</option>
                    <option value="Rio Grande do Norte" <?php echo ($resultado->estado == "Rio Grande do Norte" ? 'selected': ''); ?> >Rio Grande do Norte</option>
                    <option value="Rio Grande do Sul"<?php echo ($resultado->estado == "Rio Grande do Sul" ? 'selected': ''); ?> >Rio Grande do Sul</option>
                    <option value="Rondônia" <?php echo ($resultado->estado == "Rondônia" ? 'selected': ''); ?> >Rondônia</option>
                    <option value="Roraima" <?php echo ($resultado->estado == "Roraima" ? 'selected': ''); ?> >Roraima</option>
                    <option value="Santa Catarina" <?php echo ($resultado->estado == "Santa Catarina" ? 'selected': ''); ?> >Santa Catarina</option>
                    <option value="São Paulo" <?php echo ($resultado->estado == "São Paulo" ? 'selected': ''); ?> >São Paulo</option>
                    <option value="Sergipe" <?php echo ($resultado->estado == "Sergipe" ? 'selected': ''); ?> >Sergipe</option>
                    <option value="Tocantins" <?php echo ($resultado->estado == "Tocantins" ? 'selected': ''); ?> >Tocantins</option>
                </select>
            </div>
            <div class="input-prepend"><label>CEP</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="cep" value="<?php echo $resultado->cep; ?>" size="30" maxlength="10" onKeyPress="MascaraCep(formulario_usuario.cep);" />
            </div>
            <div class="input-prepend"><label>Nome da Mãe</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="nomeMae" value="<?php echo $resultado->nomeMae; ?>" placeholder="Nome da Mãe:" />
            </div>
            <div class="input-prepend"><label>Nome do Pai</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="nomePai" value="<?php echo $resultado->nomePai; ?>" placeholder="Nome do Pai:" />
            </div>
            <div class="input-prepend"><label>RG</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <!-- <input type="text" name="numRG" value="<?php echo $resultado->numRG; ?>" placeholder="RG:" /> -->
                <input name="numRG" type="text" id="numRG" size="30" maxlength="12" value="<?php echo $resultado->numRG; ?>" onKeyPress="MascaraRG(formulario_usuario.numRG);" placeholder="RG:"/>
            </div>
            <div class="input-prepend"><label>CPF</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="numCPF" onKeyPress="MascaraCPF(formulario_usuario.cpf);" size="30" maxlength="14" value="<?php echo $resultado->numCPF; ?>" placeholder="CPF:" />
            </div>
            <div class="input-prepend"><label>Data de Nascimento</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="dataNasc" value="<?php echo $resultado->dataNasc; ?>" placeholder="Data Nascimento:" />
            </div>
            <div class="input-prepend"><label>Sexo</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <select name="sexo" >
                    <option value="Masculino" <?php echo ($resultado->sexo == "Masculino" ? 'selected': ''); ?>>Masculino</option>
                    <option value="Feminino" <?php echo ($resultado->sexo == "Feminino" ? 'selected': ''); ?>>Feminino</option>
                </select>
            </div>
            <div class="input-prepend"><label>Modalidade</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="modalidade" value="<?php echo $resultado->modalidade; ?>" placeholder="Modalidade: " />
            </div>
            <input type="hidden" name="id" value="<?php echo $resultado->id; ?>">

            <div class="input-prepend"><label>Escolaridade</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <select name="escolaridade" >
                    <option value="Fundamental 1" <?php echo ($resultado->escolaridade == "Fundamental 1" ? 'selected': ''); ?>>Fundamental 1</option>
                    <option value="Fundamental 2" <?php echo ($resultado->escolaridade == "Fundamental 2" ? 'selected': ''); ?>>Fundamental 2</option>
                    <option value="Médio" <?php echo ($resultado->escolaridade == "Médio" ? 'selected': ''); ?>>Médio</option>
                    <option value="Superior" <?php echo ($resultado->escolaridade == "Superior" ? 'selected': ''); ?> >Superior</option>
                </select>
            </div>
            <div class="input-prepend"><label>Estado Civíl</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <select name="estadoCivil">
                    <option value="Solteiro(a)" <?php echo ($resultado->estadoCivil == "Solteiro(a)" ? 'selected': ''); ?> >Solteiro(a)</option>
                    <option value="Casado(a)" <?php echo ($resultado->estadoCivil == "Casado(a)" ? 'selected': ''); ?> >Casado(a)</option>
                    <option value="Divorciado(a)/Seperado(a)" <?php echo ($resultado->estadoCivil == "Divorciado(a)/Seperado(a)" ? 'selected': ''); ?> >Divorciado(a)/Seperado(a)</option>
                    <option value="Viúvo(a)" <?php echo ($resultado->estadoCivil == "Viúvo(a)" ? 'selected': ''); ?> >Viúvo(a)</option>
                </select>
            </div>
            <div class="input-prepend"><label>Profissão</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="profissao" placeholder="Profissão:" value="<?php echo $resultado->profissao; ?>" />
            </div>
            <div class="input-prepend"><label>Telefone Residencial</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="telResidencial" placeholder="Telefone Residencial:" value="<?php echo $resultado->telResidencial; ?>" size="30" maxlength="15" onKeyPress="MascaraTelefone(telResidencial);"/>
            </div>
            <div class="input-prepend"><label>Celular</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="telCelular" placeholder="Telefone Celular:" value="<?php echo $resultado->telCelular; ?>" size="30" maxlength="15" onKeyPress="MascaraTelefone(telCelular);" />
            </div>
            <div class="input-prepend"><label>WhatsApp</label>
                <!-- <span class="add-on"><i class="icon-user"></i></span> -->
                <input type="text" name="whatsApp" placeholder="WhatsApp:" value="<?php echo $resultado->whatsApp; ?>" size="30" maxlength="15" onKeyPress="MascaraTelefone(whatsApp);" />
            </div>
            <br />
            <br />

            <div class="input-prepend">
                <label>Fala outros idiomas?</label>
                <input type="radio" name="outroIdioma" id="idiomaSim" value="Sim" <?php echo ($resultado->outroIdioma == "Sim" ? 'checked="checked"': ''); ?> /><label for="idiomaSim">Sim</label>
                <input type="radio" name="outroIdioma" id="idiomaNao" value="Não" <?php echo ($resultado->outroIdioma == "Não" ? 'checked="checked"': ''); ?> /><label for="idiomaNao">Não</label>
                <input type="text" name="qualIdioma" placeholder="Outros idiomas:" value="<?php echo $resultado->qualIdioma; ?>" />
            </div>
            <div class="input-prepend">
                <label>Estuda?</label>
                <input type="radio" name="estudaAinda" id="estudaSim" value="Sim" <?php echo ($resultado->estudaAinda == "Sim" ? 'checked="checked"': ''); ?>/><label for="estudaSim">Sim</label>
                <input type="radio" name="estudaAinda" id="estudaNao" value="Não" <?php echo ($resultado->estudaAinda == "Não" ? 'checked="checked"': ''); ?> /><label for="estudaNao">Não</label>
                <input type="text" name="qualCurso" placeholder="Quais cursos:" value="<?php echo $resultado->qualCurso; ?>" />
            </div>
            <div class="input-prepend">
                <label>Pratica Esporte atualmente?</label>
                <input type="radio" name="praticaEsporte" id="praticaSim" value="Sim" <?php echo ($resultado->praticaEsporte == "Sim" ? 'checked="checked"': ''); ?> /><label for="praticaSim">Sim</label>
                <input type="radio" name="praticaEsporte" id="praticaNao" value="Não" <?php echo ($resultado->praticaEsporte == "Não" ? 'checked="checked"': ''); ?> /><label for="praticaNao">Não</label>
                <input type="text" name="qualEsporte" placeholder="Quais esportes:" value="<?php echo $resultado->qualEsporte; ?>" />
            </div>
            <div class="input-prepend">
                <label>Possui problema de saúde?</label>
                <input type="radio" name="problemaSaude" id="problemaSim" value="Sim" <?php echo ($resultado->problemaSaude == "Sim" ? 'checked="checked"': ''); ?> /><label for="problemaSim">Sim</label>
                <input type="radio" name="problemaSaude" id="problemaNao" value="Não" <?php echo ($resultado->problemaSaude == "Não" ? 'checked="checked"': ''); ?> /><label for="problemaNao">Não</label>
                <input type="text" name="qualProblema" placeholder="Quais problemas:" value="<?php echo $resultado->qualProblema; ?>" />
            </div>
            <div class="input-prepend">
                <label>Possui Convenio?</label>
                <input type="radio" name="possuiConvenio" id="convenioSim" value="Sim" <?php echo ($resultado->possuiConvenio == "Sim" ? 'checked="checked"': ''); ?> /><label for="convenioSim">Sim</label>
                <input type="radio" name="possuiConvenio" id="convenioNao" value="Não" <?php echo ($resultado->possuiConvenio == "Não" ? 'checked="checked"': ''); ?> /><label for="convenioNao">Não</label>
                <input type="text" name="qualConvenio" placeholder="Qual convenio:" value="<?php echo $resultado->qualConvenio; ?>" />
            </div>
            <div class="input-prepend">
                <label>Já praticou alguma arte marcial?</label>
                <input type="radio" name="arteMarcial" id="marcialSim" value="Sim" <?php echo ($resultado->arteMarcial == "Sim" ? 'checked="checked"': ''); ?> /><label for="marcialSim">Sim</label>
                <input type="radio" name="arteMarcial" id="marcialNao" value="Não" <?php echo ($resultado->arteMarcial == "Não" ? 'checked="checked"': ''); ?> /><label for="marcialNao">Não</label>
                <input type="text" name="qualArte" placeholder="Quais artes marciais:" value="<?php echo $resultado->qualArte; ?>" />
            </div>
            <br />
            <input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">                  
        </form>

        <?php } ?>

        
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