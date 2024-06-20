<?php

// CONSTRUCTOR

/*
    O contructor é um conceito da programação orientada a objetos que
    está relacionado com a existência de um método especial dentro da
    classe que vai ser executado automaticamente sempre que um novo
    objeto é criado a partir dessa classe
*/

class Mulher {

    private $nome;
    private $apelido;

    function __construct($n, $a) {
        
        $this->nome = $n;
        $this->apelido = $a;
    }

    function get_nome() {
        return $this->nome;
    }

    function get_apelido() {
        return $this->apelido;
    }
}


// quando vamos fazer a instanciação da classe num objeto,
// essa instanciação vai obrigar a que tenhamos que definir
// os argumentos que o método especial __constructor nos está
// a pedir.
$m = new Mulher('Thaís', 'Soares');

echo "O nome completo é: {$m->get_nome()} {$m->get_apelido()}";


?>