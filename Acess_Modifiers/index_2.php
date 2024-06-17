<?php 

// ACESS MODIFIERS

// Vejamos o que acontece com os métodos

class Mulher {

    public $nome;
    public $apelido;
    public $cor_do_cabelo;

    function metodo_1() {
        echo "Método 1";
    }

    protected function metodo_2() {
        echo "Método 2";
    }

    private function metodo_3() {
        echo "Método 3";
    }

}

$m = new Mulher();

//$m->metodo_1(); // ok
//$m->metodo_2(); // erro
//$m->metodo_3(); // erro

?>