<?php
    
        require_once 'Usuarios.php';
        require_once 'Crud.php';
        require_once 'DB.php';
    
?>

<?php
    
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