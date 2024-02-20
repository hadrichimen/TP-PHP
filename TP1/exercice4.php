<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
    border-collapse: collapse;
    }
    table,td,th,tr{
    border:2px solid black;
    }
    </style>
<body>
<table>
<tr><th>Nom</th><th>Moyenne</th></tr>
<?php
require 'util.php';    
foreach($tab5 as $k => $v)
{   
    $chaine=couleur($v);
    ?>
    <tr> <td> <?=$k?> </td><td style="background-color: <?=$chaine?>;"> <?=$v ?></td></tr>
<?php
}
?>