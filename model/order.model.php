<?php

//je créé une class order et a l'interieur de la class je vais ajouter des propiétés 
class order {
    //public sert a déclarer une propriété
    // j'ajoute la propriété product
    public $product;
    // la proprié quantity
    public $quantity;
    // la propriété createdA
    public $createdAt;
    // la propriéte status
    public $status;
    
    //je recupère la call $order et je créé un objet que $order
    //En ajoutant chaque propriété de mon objet $order, je viens lui déclarer une valeur
    $order = new Order();

    $order->product = "Teeshirt Mario";
    $order->quantity = 1;
    $order->cratedAt = new dateTime();
    $order->status = "CART";
}






