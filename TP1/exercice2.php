<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=²²²²², initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $etudiant=array("eya"=>12,"imen"=>8,"yessmine"=>10);

    echo "<table>";
    echo "<tr><th>nom</th><th>moyenne</th></tr>"; 
    
    foreach($etudiant as $nom=>$moyenne) {
        echo "<tr><td>$nom</td><td style='background-color:" . couleur($moyenne) ."'>$moyenne</td></tr>";
    }

    echo "</table>";

    function couleur($moyenne){
        
        if($moyenne <10){
            return "red";
        }
        else {
            return "green";
        }
    echo($moyenne);  
}
    ?>

</body>
</html>