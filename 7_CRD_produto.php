<?php

/*
Crie um programa para cadastrar, listar e excluir produtos de uma
lista contendo nome e preço.
*/

$productsList = array();

function listProduct()
{
    global $productsList;

    foreach ($productsList as $key => $value) {

        echo "<h4> Product: ".$value['product']."</h4>";
        echo "<h4> Price: ". $value['price']."</h4>";
        echo "<h4> Price: ". $value['description']."</h4>";
        echo "<hr>";
    }
}

function addProduct($productName, $price, $description)
{
    global $productsList;

    array_push($productsList, array(
        "product" => $productName,
        "price" => $price,
        "description" => $description
    ));
}

addProduct("Iphone 16", "Your kidney","Smartphone IOS");
addProduct("Iphone 15", "Your eyes","Smartphone IOS");
addProduct("Iphone 14", "Your lung","Smartphone IOS");
listProduct();

?>