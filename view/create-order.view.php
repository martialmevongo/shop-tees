<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<?php
require_once('../view/partial/_header.view.php')
?>
<body>

	<header>

		<nav>
			<ul>
				<li>Créer une commande</li>
			</ul>
		</nav>

	</header>


	<main>
    
	<p><?php echo $message; ?></p>

		<?php if ($orderByUser) {?>
			<p>Vous avez une commande en attente : <?php echo $orderByUser['product']; ?> <?php echo $orderByUser['quantity']; ?>
			<p>Créé le <?php echo $orderByUser['createDate']->format('y-m-d'); ?></p>
			<p>Votre commande est en statut :<?php echo $orderByUser['statut']; ?> </p>
		<?php } ?>

		<form method="POST" >

			<label for="quantity">Quantity
				<input type="number" name="quantity" />
			</label>

			<label for="product">
				<select name="product">
					<?php foreach ($products as $product) { ?>
						<option value="<?php echo $product; ?>"><?php echo $product; ?></option>
					<?php } ?>
				</select>
			</label>

			<button type="submit">Créer la commande</button>

		</form>

	</main>

</body>
</html>