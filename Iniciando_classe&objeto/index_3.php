<?php

// COMO ESCREVER UMA CLASSE E INSTACIAR UM OBJETO

/* 
    As classes podem ter PROPRIEDADES e MÉTODOS

    PROPRIEDADES são variáveis da classe
    MÉTODOS são funções da classe.

    A palavra-chave $this refere-se ao objeto atual
    e só está disponível dentro dos métodos (funções da classe)
*/

class Fruto {

    public $nome;
    public $cor;
    public $peso;

    public function apresentar_fruto() {
        return " O meu nome é {$this->nome}, a minha cor é {$this->cor} e tenho {$this->peso} gramas";
    }
}

$laranja = new Fruto();
$laranja->nome = 'Laranja';
$laranja->cor = 'laranja';
$laranja->peso = '125';

echo $laranja->apresentar_fruto();

echo "\n";

$amora = new Fruto();
$amora->nome = 'Amora';
$amora->cor = 'vermelha';
$amora->peso = '85';

echo $amora->apresentar_fruto();
?>