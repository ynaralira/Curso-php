<div class="titulo"><h1>Classe data</h1></div>
<br><br>

<?php
class data{
    //atributos
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        return "Aniversário: {$this->dia} / {$this->mes} / {$this->ano}";
    }
}

$data = new data();
$data->dia = 7;
$data->mes = 6;
$data->ano = 2002;
echo $data->apresentar();
