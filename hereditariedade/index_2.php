<?php 

// HEREDITARIEDADE

// Vejamos os conceitos num exemplo mais prático

class Animal_de_estimacao {

    protected $nome;
    protected $especie;
    protected $raca;

    function __construct($nome, $especie, $raca) {
        
        $this->nome = $nome;
        $this->especie = $especie;
        $this->raca = $raca;

    }
}

class Cao extends Animal_de_estimacao {

    function latir($vezes) {
        echo "O {$this->nome} latiu $vezes vezes! \n";
    }
}

class Gato extends Animal_de_estimacao {

    function miar($vezes) {
        echo "O {$this->nome} miou $vezes vezes! \n";
    }
}

// instanciação das classes em objetos, lembrando que o construtor tambeém é herdado
$cao    = new Cao("Snoopy", "Canis lupus", "Beagle");
$gato   = new Gato("Garfield", "Felis catus", "Persa");

// Não só cada objeto tem as propriedades da classe base,
// como também tem as funcionalidades que cada classe implementa.
// Portanto:

echo $cao->latir(10);
echo "\n";
echo $gato->miar(10);

/* 
    Observa que, na classe Animal_de_estimacao, as propriedades
    foram definidas com o acess modifier PROTECTED.
    Já tinha referido que no caso do PRTECTED, a propriedade ou método
    pode ser acedida dentor da classe e dentro de classes derivadas dela.

*/

?>