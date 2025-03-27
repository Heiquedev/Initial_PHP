<?php
/*
Crie um array de usuários onde cada item tem nome e idade. Depois, exiba os dados formatados.
Exemplo de saída:
Usuário: Ana, Idade: 22
Usuário: Pedro, Idade: 30
Usuário: Julia, Idade: 27
*/
 $arrayPerson = [];

class Person {
    public $name;
    public $age;

    function getName(){
        return $this -> name;
    }
    
    function getAge(){
        return $this -> age;
    }

    function setName($nome){
        $this-> name = $nome;
    }
    function setAge($idade){
        $this-> age = $idade;
    }
} 

    $person1 = new Person();
    $person1->setName("Jairo");
    $person1->setAge("43");
    $person2 = new Person();
    $person2->setName("Claudia");
    $person2->setAge("32");
    $person3 = new Person();
    $person3->setName("Gustavo");
    $person3->setAge("20");
    $person4 = new Person();
    $person4->setName("Heique");
    $person4->setAge("17");

    array_push($arrayPerson, $person1);
    array_push($arrayPerson, $person2);
    array_push($arrayPerson, $person3);
    array_push($arrayPerson, $person4);

    function shouwInfo(array $arr, int $i) {
        echo "<h3>Nome: ". $arr[$i]->getName() ."<br> Idade: ". $arr[$i]->getAge() ."</h3>
        <hr><br>";
    }

    shouwInfo($arrayPerson, 0);
    shouwInfo($arrayPerson, 1);
    shouwInfo($arrayPerson, 2);
    shouwInfo($arrayPerson, 3);

?>