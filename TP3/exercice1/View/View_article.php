<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="../Control/ControlArticle.php" method="post">

        <label for="Reference">Réference:</label>
        <input type="text" name="Reference"><br><br>

        <label for="Libelle">Libellé:</label>
        <input type="text" name="Libelle"><br><br>

        <label for="Prix">Prix:</label>
        <input type="text" name="Prix"><br><br>

        <label for="Fournisseur">Fournisseur:</label>
        <select name="Fournisseur[]" multiple>
            <?php include("../Model/Fournisseur.php"); ?>
            <?php

            echo $fournisseur1;
            echo $fournisseur2;
            echo $fournisseur3;
            ?>
        </select><br><br>

        <label for="point de vente">point de vente:</label>
        <input type="checkbox" name="PV[]" value="point de vente">sfax<br>

        <label for="qte en stock">qte en stock:</label>
        <input type="text" name="qte"><br><br>
        <input type="submit" value="Connexion">
    </form>

</body>

</html>