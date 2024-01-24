<?php

class Carro {
/*
public: significa que voce tem acesso aos atributos ou metodos 
tanto na classe quant nas suas instancias;
private: significa que voce tem acesso somente dentro da classe
*/

public $marca;
public $modelo;
public $mootr;


function getMarca () {
return $this->marca;
}

function getModelo () {
return $this->modelo;
}

function getMotor () {
return $this->motor;
}

function setMarca($marca) {
$this->marca = $marca;
}

function setModelo ($modelo) {
$this->modelo = $modelo;
}

function setMotor($motor) {
$this->motor = $motor;
}

public function potencia_motor($motor) {     
if ($motor >=1.8) {
echo "Potencia do motor: Carro potente";
}
else {
echo "Potencia do motor: Carro popular";
}
}
/*
Veja que para escrevaer os atributos com o "echo"
precisamos colocar entre chaves {}
*/
public function listaCarro() {
echo"
<p>Marca: {$this->marca}</p>
<p>Modelo: {this->modelo}</p>
<p>Motor: {$this->motor}</p>
{$this->potencia_motor($this->motor) }";
}
}
?>
