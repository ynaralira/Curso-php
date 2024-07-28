<div class="titulo"><h1>Herança</h1></div>
<br><br>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }

    function __destruct()
    {
        echo 'Pessoa diz: Tchau!';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}

class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login)
    {
       $this->nome = $nome;
       $this->idade = $idade;
        $this->login = $login;
     //puxar o construtor de pessoa: parent::__construct($nome, $idade);
     echo 'Usuario criado! <br>';
    }
    function __destruct()
    {
        echo 'Usuario diz: Tchau! <br>';
        // chamar destrutor de pessoa: parent::__destruct();
    }
    public function apresentar()
    {
        //parent para puxar a função da classe pai pessoa
        //@ para adicionar o login na função já criada em pessoa
        echo "@{$this->login}: ";
        parent::apresentar();
       // apresentar da classe usuario
       // echo "@{$this->login}: {$this->nome}, {$this->idade} <br>";
    }
}

$usuario = new Usuario('Ynara Lira Ventura', 20, 'ynara_dev');
$usuario->apresentar();
//unset para chamar o destrutor da classe usuario 
//unset($usuario);

