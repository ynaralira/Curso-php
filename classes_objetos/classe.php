<div class="titulo"><h1>Minha primeira Classe em PHP</h1></div>
<br><br>
<?php

class Cliente{
    // atributos
    public $nome = '';
    public $idade = 18;

    public function apresentar(){
         echo "Nome do cliente: {$this->nome}<br><br>";
         return "Idade do cliente: {$this->idade}<br><br>";
    }
}
// this significa este ou isto, 
//ele aponta pro objeto ou instancia atual
// usando o return precisa colocar do lado do objeto a palavra echo para imprimir
// colocando echo somente instanciando o novo objeto ja imprime

$c1 = new Cliente(); //cria novo objeto
$c1->nome = 'Ynara'; // adiciona valor no atributo
$c1->idade = 20;
echo $c1->apresentar();

$c2 = new Cliente(); //cria novo objeto
$c2->nome = 'Ana maria'; // adiciona valor no atributo
$c2->idade = 25;
echo $c2->apresentar();

$c3 = new Cliente(); //cria novo objeto
$c3->nome = 'Rafael'; // adiciona valor no atributo
$c3->idade = 32;
echo $c3->apresentar();

