<?php



function createOrder($product, $quantity) {
	$order = [
		"product" => $product,
		"quantity" => $quantity
	];

	return $order;
}

// la function saveOrder sauvegarde les information de la session 
function saveOrder($order) {
	$_SESSION["order"] = $order;
}

// la function findOrderForUser verifie si il y a une clé order dans session 
function findOrderForUser() {

	if (array_key_exists("order", $_SESSION)) {
		return $_SESSION["order"];
	} else {
		return null;
	}
}
