<div class="titulo"><h1>Visibilidade</h1></div>
<br><br>

<?php
//acessa o protegido a partir de uma herança ou de uma função que tem acesso a ele
class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';
    
    public function mostrarA(){
        //chamando função fora do mostrar: $this->naoMostrar();
        echo "Modificador Publico: {$this->publico} <br>";
        echo "Modificador Protegido: {$this->protegido} <br>";
        echo "Modificador Privado: {$this->privado}<br>";
    }
    private function naoMostrar(){
        echo 'Não vou imprimir!';
    }
}

$a = new A();
$a->mostrarA();

//echo 'Fim!';

class B extends A{
    public function mostrarB()
    {
        
    }
}
