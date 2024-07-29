<?php

// Classe Abstrata

/*  
    Ao herdar de uma classe abstracta, o método da classe filha deve ser
    definido com o mesmo nome, e um access modifier com restrição
    igual ou menor.

    Por exemplo, se o método abstracto for definido como protected, o 
    método da classe filha deve ser definido como protected ou public.
    Não pode ser privado.

    Além disso, o tipo e o número de argumentos exigidos devem ser os mesmo.
    No entanto, as classes filhas podem ter argumentos opcionais.

    Assim, quando uma classe filha é herdada de uma classe abstracta, temos as seguiintes regras:

    - O método da classe filha deve ser definido com o mesmo nome;
    - O métodos da classe filha deve ser definido com o mesmo access modifier ou outro menos restrito;
    - O número de argumentos necessários deve ser o mesmo. No entanto , a classe filha pode ter argumentos 
    opcionais adicionais.
*/

abstract class Pessoa1
{
    abstract public function falar($mensagem);
}

class Cliente1 extends Pessoa1
{
    public function falar($mensagem, $autor = 'luan'){
        echo "$mensagem - $autor";
    }
}

$cliente = new Cliente1();
$cliente->falar("mensagem de teste", "luan");

// IMPORTANTE: a assinatura do método em Cliente, tem que ser igual à
// assinatura do método na class abestrata. COntudo, ao adcionar um parâmetro
// opcional, podemos passar informação adicional para o interior da função.

?>