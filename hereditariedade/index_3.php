<?php

// HEREDITARIEDADE

/*
    O acess modifier PROTECTED pode ser usado em propriedades e métodos.
    Portanto:
*/

class Cliente {

    protected $nome;
    protected $email;

    function __construct($n, $e) {
        $this->nome = $n;
        $this->email = $e;
    }

    protected function apresentar() {
        return "O nome do cliente é {$this->nome} e o email é {$this->email}.";
    }
}

$clientes = [
    new Cliente('Luan', 'luan@gmail.com'),
    new Cliente('Thais', 'thais@gmail.com'),
    new Cliente('Duda', 'duda@gmail.com')
];

echo "\n";
echo $clientes;
// echo $clientes[0]->apresentar(); não é possível pois o método está protegido, para usar precisa criar objeto de class herdada
?>