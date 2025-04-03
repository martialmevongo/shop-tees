
<?php
//SELECT * FROM order where user.id = $id
function findOrderByUser() {
	if (array_key_exists("order", $_SESSION)) {
		return $_SESSION["order"];
	} else {
		return null;
	}
}
//la function createOrder permet de créer un tableau de $product et un tableau de $quantity dans la session 
function createOrder($product, $quantity) {
// à ce tableau on ajoute un message si la quantity de la commande est < 0 ou supérieur à 3
    if ($quantity < 0) {
        throw new Exception("message: Interdiction de mettre une quantité de commande inferieur à 0");

    } else if ($quantity > 3) {
    	throw new exception("message: Interdiction de mettre une quantité de commande superieur à 3");
    }else {

        $order = [
    	    "product" => $product,
			"quantity" => $quantity,
            "createDate"  => new DateTime()
    	];
	
	    return $order;
	}
}


// INSERT INTO order values ($order['product'], $order['quantity'])
function saveOrder($order) {
	$_SESSION["order"] = $order;
}