<?php 

// SOBREPOSIÇÃO DE MÉTODOS HERDADOS


/*
    O conceito de 'sobreposição' é uma tradução simples de um outro
    conceito mais conhecido como 'override'.
    Na prática significa que podemos ter uma classe 'mãe' onde um
    determinado método é definido e podemos alterar o seu código
    dentro de uma classe 'filha'.
*/

class Pessoa {

    public $nome;

    public function identificacao() {
        echo "O nome é {$this->nome} e este método é da classe mãe.";
    }
}

class Cliente extends Pessoa {

    public function identificacao() {
        echo "O nome é {$this->nome} e este método tem uma nova implementação na classe filha.";
    }
}

// vamos instanciar um objeto de cada classe:
$cliente_1 = new Pessoa();
$cliente_1->nome = 'Joao';

//$cliente_2 = new Cliente();
//$cliente_2->nome = 'Luan';

$cliente_1->identificacao();
echo "\n";
$cliente_2->identificacao();
?>