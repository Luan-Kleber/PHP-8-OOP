<?php 

// DESTRUCTOR

/*

    Tal como acontece com o __contructor, existe um método especial
    que só vai ser executado quando um objeto é destruído ou o script
    termina a sua execução.
*/

class Cliente {

    private $nome;

    function __construct($n) {
        
        $this->nome = $n;
        echo "Foi criado um novo objeto com o nome de {$this->nome} \n";
    }

    function __destruct() {

        echo "O objeto foi destruído. Tinha o seguinte nome {$this->nome} \n";
    }
}

//vamos criar um objeto a partir da classe
$cliente = new Cliente("Luan");

//Vamos executar um bloco de código.
for($i = 1; $i <= 10; $i++) {
    echo "Valor do i: $i \n";
}

// agora vamos destruir deliberadamente o objeto
unset($cliente); // se não destruir o objeto irá rodar o destruct quando acabar o código ou seja depois do echo "Fim script".

echo "Fim script";

// IMPORTANTE: Estamos nesta fase inicial a conhecer os conceitos de forma
// simples: access modifiers PUBLIC, PROTECTED  PRIVATE. O __contruct e __destruct
// Estes conceitos serão explorados em vários exemplos ao longo do módulo
// e irei acrescentar mais informações e detalhes a importância
// e as consequências da sua situação.

?>