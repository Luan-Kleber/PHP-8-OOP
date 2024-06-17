<?php 

// ACESS MOFIFIERS

/*
    Então qual pe a importância dos Acess Modifiers em uma classe?

    Cenaŕio Um:
        Imagian que queres que a definição da propriedade $nome não possa ser direta (pública).
        Queres que exista uma espécie de validação antes que os objetos criados
        a partir da classe possam aceitar o nome que queres definir.
*/

class Homem {

    // propriedade privada. O seu acesso não é possível sem ser dentro da classe
    private $nome;

    // este método (público por padrão) vai receber um parâmetro $n
    // e vai avaliar se o nome pode ser definido de acordo com as regras.
    // Neste caso, o nome não pode ser nenhum daqueles que existe no array
    function set_nome($n) {

        $nomes_proibidos = [
            'Joao', 'Carlos', 'Miguel', 'Joaquim'
        ];

        //verifica se $n pertence aos nomes proibidos
        if(in_array($n, $nomes_proibidos)) {
            return;
        }

        //se não pertence, define $nome com o valor de $n
        
        $this->nome = $n;
    }

    // buscar o valor de nome
    function get_nome() {

        if(!empty($this->nome)) {
            echo $this->nome;
        } else {
            echo "Nome está vazio";
        }
    }
}

$h = new Homem();

$h->set_nome("Joao"); // Proibido
$h->get_nome();

echo "\n";

$h->set_nome("Luan"); // Luan
$h->get_nome();

// OS Acess Modifiers permitem-nos controlar de forma muito clara
// que informação e métodos estão disponíveis fora da classe.
// Esta filosofia é de extrema importância: uma classe só deve ter
// público aquilo que é absolutamente necessário.

?>