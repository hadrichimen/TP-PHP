<?php

include('../Model/Fournisseur.php');
include('../Model/Article.php');

if (
    !empty($_POST['Reference']) && !empty($_POST['Libelle']) &&
    !empty($_POST['Prix']) && !empty($_POST['qte']) &&
    !empty($_POST['Fournisseur']) && !empty($_POST['PV'])
) {

    $ref = $_POST["Reference"];
    $lib = $_POST["Libelle"];
    $prix = $_POST["Prix"];
    $qte = $_POST["qte"];
    $fournisseur = $_POST["Fournisseur"];
    $pv = $_POST["PV"];


    $article = new Article($ref, $lib, $prix, $qte, $fournisseur, $pv);
    echo "<table border><tr><td>Référence</td><td> Libellé</td><td>prix</td><td>qte</td><td>fournisseur</td><td>PV</td></tr>";
    echo $article;
    echo "</table>";
} else
    echo "bb";
