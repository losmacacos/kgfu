<?php

require_once 'Crud.php';

class Usuarios extends Crud{
	
	protected $table = 'usuarios';
	private $nome;
	private $email;
	private $senha;
	private $endereco;
	private $numero;
	private $bairro;
	private $cidade;
	private $estado;
	private $cep;
	private $nomeMae;
	private $nomePai;
	private $numRG;
	private $numCPF;
	private $dataNasc;
	private $sexo;
	private $modalidade;
    private $escolaridade;
    private $estadoCivil;
    private $profissao;
    private $telResidencial;
    private $telCelular;
    private $whatsApp;
    private $outroIdioma;
    private $qualIdioma;
    private $estudaAinda;
    private $qualCurso;
    private $praticaEsporte;
    private $qualEsporte;
    private $problemaSaude;
    private $qualProblema;
    private $possuiConvenio;
    private $qualConvenio;
    private $arteMarcial;
    private $qualArte;
                

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, email, senha, endereco, numero, bairro, cidade, estado, cep, nomeMae, nomePai, numRG, numCPF, dataNasc, sexo, modalidade, escolaridade, estadoCivil, profissao, telResidencial, telCelular, whatsApp, outroIdioma, qualIdioma, estudaAinda, qualCurso, praticaEsporte, qualEsporte, problemaSaude, qualProblema, possuiConvenio, qualConvenio, arteMarcial, qualArte) VALUES (:nome, :email, :senha, :endereco, :numero, :bairro, :cidade, :estado, :cep, :nomeMae, :nomePai, :numRG, :numCPF, :dataNasc, :sexo, :modalidade, :escolaridade, :estadoCivil, :profissao, :telResidencial, :telCelular, :whatsApp, :outroIdioma, :qualIdioma, :estudaAinda, :qualCurso, :praticaEsporte, :qualEsporte, :problemaSaude, :qualProblema, :possuiConvenio, :qualConvenio, :arteMarcial, :qualArte)";
		$stmt = $this->prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':numero', $this->numero);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':estado', $this->estado);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':nomeMae', $this->nomeMae);
		$stmt->bindParam(':nomePai', $this->nomePai);
		$stmt->bindParam(':numRG', $this->numRG);
		$stmt->bindParam(':numCPF', $this->numCPF);
		$stmt->bindParam(':dataNasc', $this->dataNasc);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':modalidade', $this->modalidade);
        $stmt->bindParam(':escolaridade', $this->escolaridade);
        $stmt->bindParam(':estadoCivil', $this->estadoCivil);
        $stmt->bindParam(':profissao', $this->profissao);
        $stmt->bindParam(':telResidencial', $this->telResidencial);
        $stmt->bindParam(':telCelular', $this->telCelular);
        $stmt->bindParam(':whatsApp', $this->whatsApp);
        $stmt->bindParam(':outroIdioma', $this->outroIdioma);
        $stmt->bindParam(':qualIdioma', $this->qualIdioma);
        $stmt->bindParam(':estudaAinda', $this->estudaAinda);
        $stmt->bindParam(':qualCurso', $this->qualCurso);
        $stmt->bindParam(':praticaEsporte', $this->praticaEsporte);
        $stmt->bindParam(':qualEsporte', $this->qualEsporte);
        $stmt->bindParam(':problemaSaude', $this->problemaSaude);
        $stmt->bindParam(':qualProblema', $this->qualProblema);
        $stmt->bindParam(':possuiConvenio', $this->possuiConvenio);
        $stmt->bindParam(':qualConvenio', $this->qualConvenio);
        $stmt->bindParam(':arteMarcial', $this->arteMarcial);
        $stmt->bindParam(':qualArte', $this->qualArte);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET 
        nome = :nome, 
        email = :email, 
        senha = :senha, 
        endereco = :endereco, 
        numero = :numero, 
        bairro = :bairro, 
        cidade = :cidade, 
        estado = :estado, 
        cep = :cep, 
        nomeMae = :nomeMae, 
        nomePai = :nomePai, 
        numRG = :numRG, 
        numCPF = :numCPF, 
        dataNasc = :dataNasc, 
        sexo = :sexo, 
        modalidade = :modalidade, 
        escolaridade = :escolaridade, 
        estadoCivil = :estadoCivil, 
        profissao = :profissao, 
        telResidencial = :telResidencial, 
        telCelular = :telCelular, 
        whatsApp = :whatsApp, 
        outroIdioma = :outroIdioma, 
        qualIdioma =  :qualIdioma, 
        estudaAinda = :estudaAinda, 
        qualCurso = :qualCurso, 
        praticaEsporte = :praticaEsporte, 
        qualEsporte = :qualEsporte, 
        problemaSaude = :problemaSaude, 
        qualProblema = :qualProblema, 
        possuiConvenio = :possuiConvenio, 
        qualConvenio = :qualConvenio, 
        arteMarcial = :arteMarcial, 
        qualArte = :qualArte WHERE id = :id";
		$stmt = $this->prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':numero', $this->numero);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':estado', $this->estado);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':nomeMae', $this->nomeMae);
		$stmt->bindParam(':nomePai', $this->nomePai);
		$stmt->bindParam(':numRG', $this->numRG);
		$stmt->bindParam(':numCPF', $this->numCPF);
		$stmt->bindParam(':dataNasc', $this->dataNasc);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':modalidade', $this->modalidade);
        $stmt->bindParam(':escolaridade', $this->escolaridade);
        $stmt->bindParam(':estadoCivil', $this->estadoCivil);
        $stmt->bindParam(':profissao', $this->profissao);
        $stmt->bindParam(':telResidencial', $this->telResidencial);
        $stmt->bindParam(':telCelular', $this->telCelular);
        $stmt->bindParam(':whatsApp', $this->whatsApp);
        $stmt->bindParam(':outroIdioma', $this->outroIdioma);
        $stmt->bindParam(':qualIdioma', $this->qualIdioma);
        $stmt->bindParam(':estudaAinda', $this->estudaAinda);
        $stmt->bindParam(':qualCurso', $this->qualCurso);
        $stmt->bindParam(':praticaEsporte', $this->praticaEsporte);
        $stmt->bindParam(':qualEsporte', $this->qualEsporte);
        $stmt->bindParam(':problemaSaude', $this->problemaSaude);
        $stmt->bindParam(':qualProblema', $this->qualProblema);
        $stmt->bindParam(':possuiConvenio', $this->possuiConvenio);
        $stmt->bindParam(':qualConvenio', $this->qualConvenio);
        $stmt->bindParam(':arteMarcial', $this->arteMarcial);
        $stmt->bindParam(':qualArte', $this->qualArte);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

    public function getTable()
    {
        return $this->table;
    }

    public function setTable($table)
    {
        $this->table = $table;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;

    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    public function getNomeMae()
    {
        return $this->nomeMae;
    }

    public function setNomeMae($nomeMae)
    {
        $this->nomeMae = $nomeMae;

    }

    public function getNomePai()
    {
        return $this->nomePai;
    }

    public function setNomePai($nomePai)
    {
        $this->nomePai = $nomePai;
    }

    public function getNumRG()
    {
        return $this->numRG;
    }

    public function setNumRG($numRG)
    {
        $this->numRG = $numRG;
    }

    public function getNumCPF()
    {
        return $this->numCPF;
    }

    public function setNumCPF($numCPF)
    {
        $this->numCPF = $numCPF;
    }

    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    public function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getModalidade()
    {
        return $this->modalidade;
    }

    public function setModalidade($modalidade)
    {
        $this->modalidade = $modalidade;
    }

    public function getEscolaridade()
    {
        return $this->escolaridade;
    }

    public function setEscolaridade($escolaridade)
    {
        $this->escolaridade = $escolaridade;
    }

    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;
    }

    public function getProfissao()
    {
        return $this->profissao;
    }

    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;
    }

    public function getTelResidencial()
    {
        return $this->telResidencial;
    }

    public function setTelResidencial($telResidencial)
    {
        $this->telResidencial = $telResidencial;
    }

    public function getTelCelular()
    {
        return $this->telCelular;
    }

    public function setTelCelular($telCelular)
    {
        $this->telCelular = $telCelular;
    }

    public function getWhatsApp()
    {
        return $this->whatsApp;
    }

    public function setWhatsApp($whatsApp)
    {
        $this->whatsApp = $whatsApp;
    }

    public function getOutroIdioma()
    {
        return $this->outroIdioma;
    }

    public function setOutroIdioma($outroIdioma)
    {
        $this->outroIdioma = $outroIdioma;
    }

    public function getQualIdioma()
    {
        return $this->qualIdioma;
    }

    public function setQualIdioma($qualIdioma)
    {
        $this->qualIdioma = $qualIdioma;
    }

    public function getEstudaAinda()
    {
        return $this->estudaAinda;
    }

    public function setEstudaAinda($estudaAinda)
    {
        $this->estudaAinda = $estudaAinda;
    }

    public function getQualCurso()
    {
        return $this->qualCurso;
    }

    public function setQualCurso($qualCurso)
    {
        $this->qualCurso = $qualCurso;
    }

    public function getPraticaEsporte()
    {
        return $this->praticaEsporte;
    }

    public function setPraticaEsporte($praticaEsporte)
    {
        $this->praticaEsporte = $praticaEsporte;
    }

    public function getQualEsporte()
    {
        return $this->qualEsporte;
    }

    public function setQualEsporte($qualEsporte)
    {
        $this->qualEsporte = $qualEsporte;
    }

    public function getProblemaSaude()
    {
        return $this->problemaSaude;
    }

    public function setProblemaSaude($problemaSaude)
    {
        $this->problemaSaude = $problemaSaude;
    }

    public function getQualProblema()
    {
        return $this->qualProblema;
    }

    public function setQualProblema($qualProblema)
    {
        $this->qualProblema = $qualProblema;
    }

    public function getPossuiConvenio()
    {
        return $this->possuiConvenio;
    }

    public function setPossuiConvenio($possuiConvenio)
    {
        $this->possuiConvenio = $possuiConvenio;
    }

    public function getQualConvenio()
    {
        return $this->qualConvenio;
    }

    public function setQualConvenio($qualConvenio)
    {
        $this->qualConvenio = $qualConvenio;
    }

    public function getArteMarcial()
    {
        return $this->arteMarcial;
    }

    public function setArteMarcial($arteMarcial)
    {
        $this->arteMarcial = $arteMarcial;
    }

    public function getQualArte()
    {
        return $this->qualArte;
    }

    public function setQualArte($qualArte)
    {
        $this->qualArte = $qualArte;
    }

}