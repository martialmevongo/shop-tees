<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    
</head>
<?php
 require_once('../view/partial/_header.view.php')
 ?>
<body>
    <header>
        <nav>
            <ul>
                <li>créer une commande</li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Payer une commande</h1>
        <?php if ($orderByUser) {?>
			<p> <?php echo $orderByUser['product']; ?> :  <?php echo $orderByUser['quantity']; ?>
			<p>Créée le <?php echo $orderByUser['createDate']->format('y-m-d'); ?></p>
			<p>Votre commande est en statut :<?php echo $orderByUser['statut']; ?> </p>

            <form method="post">

			<button>Payer</button> 

            </form> 

		<?php } else { ?>
			<p>Vous n'avez pas de commande à payer</p>
		<?php } ?>

    </main>
</body>
</html>