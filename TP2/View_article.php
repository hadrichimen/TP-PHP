
<?php

$ref=$_GET['Reference'];
if(isset($ref)){

    if (isset($_GET['Fournisseur'])&& !empty($_GET['Fournisseur'])){
        
        foreach($_GET['Fournisseur'] as $fournissseur)
            echo "<li> $fournissseur</li>";
        
    }

        if(isset($_GET['PV']) && !empty($_GET['PV'])) {
            
            foreach($_GET['PV'] as $pointdevente)
                echo "<li>$pointdevente</li>";
        
    }
    else
    header('Location: article.html');
}
?>
<?php

$mesgerreur1 = " ";
$mesgerreur2 = " "; 
$mesgerreur3 = " "; 
$mesgerreur4 = " "; 
$mesgerreur5 = " ";
$submit=false;

$ref = " ";
if(isset($_GET['ref'])){
    $submit=false;

    if(!empty($_GET['Reference'])){
    $ref =  $_GET['Reference'];
}else{
    $mesgerreur1="La reference est obligatoire";
    $submit=false;
}
    
$libelle = " ";
    if(!empty($_GET['libelle'])){
        $libelle = $_GET['libelle'];
    }
    else{
        $mesgerreur2 = "Le libellé de l'article est obligatoire.";
        $submit=false;
    }
    
    $Prix = " ";
    if(!empty($_GET['Prix'])){
        $Prix = $_GET['Prix'];
    }
    else{
        $mesgerreur2 = "Le prix est obligatoire.";
        $submit=false;
    }
    
    $fourni=array();
    if(!empty($_GET['Fournisseur'])){
        $fourni = $_GET['Fournisseur'];
    }
    else{
        $mesgerreur3 ="Le fournisseur est obligatoire.";
        $submit=false;
    }
    
    $pointv = array();
    if(!empty($_GET['PV'])){
        $pointv = $_GET['PV'];
    }
    else{
        $mesgerreur4 = "le champs est vide ";
        $submit=false;
    }
    
    $qte = " ";
    if(!empty($_GET['qte'])){
        $pointv = $_GET['qte'];
    }
    else{
        $mesgerreur5 = "le champs est vide ";
        $submit=false;
    } 
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?> " method="get">

        <label for="Réference">Réference:</label>
        <input type="text" name="Reference" ><br><br>

        <label for="Libellé">Libellé:</label>
        <input type="text" name="Libelle" value="<?=$fourni?>"><br><br>

        <label for="Prix">Prix:</label>
        <input type="text" name="Prix" value="<?=$Prix?>"><br><br>

        <label for="Fournisseur">Fournisseur:</label>
        <select name="Fournisseur[]" multiple value="<?=$fourni?>">
            <option value="Fournisseur1">Fournisseur1 <?php if(array("Fournisseur1",$fourni)) echo "selected";?></option>
            <option value="Fournisseur2">Fournisseur2 <?php if(array("Fournisseur2",$fourni)) echo "selected";?></option>
        </select><br><br>

        <label for="point de vente">point de vente:</label>
        <input type="checkbox"name="PV[]" value="<?=$pointv?>"<?php if(array("PV",$pointv)) echo "checked";?>>Fraise<br>

        <label for="qte en stock">qte en stock:</label>
        <input type="text" name="qte"value="<?=$qte?>"><br><br>
        
        <input type="submit" value="Connexion">
    </form>
</body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
    <?php
    echo $ref;
    echo $Prix;
    echo $libelle;
    echo $fourni;
    echo $pointv;
    echo $qte;
?>
