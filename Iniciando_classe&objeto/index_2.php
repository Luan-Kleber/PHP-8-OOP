<?php

// COMO ESCREVER UMA CLASSE E INSTACIAR UM OBJETO

/*
    Vamos fazer uma pequena implementação 
*/

class Fruto {

    //propriedades
    public $nome;
}

$laranja = new Fruto();

//definir o valor da propriedade
$laranja->nome = "Laranja";

//criar um outro objeto do tipo Fruto
$banana = new Fruto();
$banana->nome = "Banana";

// como vamos apresentar as propriedades de um objeto?
echo $laranja->nome;
echo "<br>";
echo $banana->nome;

// cada objeto criado a partir da mesma classe, contém as suas propriedades
// de forma completamente independente.

?>