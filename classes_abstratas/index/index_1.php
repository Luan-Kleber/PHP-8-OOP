<?php 

// CLASSES ABSTRATAS

/*

    Um outro conceito muito importante na Programação Orientada a Objetos
    é o conceito de classes abstratas.

    Uma classe abstrata, com métodos abstratos, implica que a classe
    tenha métodos que estão declarados, mas que os métodos sejam obrigatoriamente
    implementado nas classes derivadas.

*/

abstract class Pessoa
{
    abstract public function identificar();
    abstract public function falar();
    abstract public function saltar();
}

// Como podes ver, os métodos estão declarados, mas não têm implementação.
// As classes derivadas vão ter que definir essa implementação.

// A classe filha por não implementar os métodos da classe mão terá erro.
/*class Cliente1 extends Pessoa 
{
    // Fatal error: Class CLiente1 contains 3 abestract mthods
    // and must therefore be declared abestract or implement the remaining methods
}*/

class Cliente2 extends Pessoa
{
    public function identificar(){
        // code ...
    }
    
    public function falar(){
        // code ...
    }

    public function saltar(){
        // code ...
    }
} 

// A classe CLiente2 contém todas as implementações
// que a classe Pessoa "obriga" a implementar devido ao uso
// da expressão ABSTRACT
?>