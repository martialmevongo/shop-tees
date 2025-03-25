<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><h1>formulaire de selection</h1></header>
    <main>
    <form method="POST">
        
        <label for="vetement">Choisissez un Vêtement:</label>
        <select name="vetement" id="vetement" required>
            <option value="T-shirt">T-shirt</option>
            <option value="Pantalon">Pantalon</option>
            <option value="Veste">Veste</option>
            <option value="Robe">Robe</option>
        </select><br><br>
       
        <label for="taille">Choisissez une Taille:</label>
        <select name="taille" id="taille" required>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
        </select><br><br>
    
        <input type="submit" value="Envoyer">
    </form>
    </main>
</body>
</html>