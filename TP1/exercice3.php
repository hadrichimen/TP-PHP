<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    table{
    border-collapse :collapse ;
    }

    table ,tr,td {
    border : 2px solid black ;
    }
</style>
<body>
<?php 

$tableau =array("yesmin" =>"13.25" ,"eya"=> "14.36","sonia" => "12.36","ahmed" =>"9.36") ;
    echo "<table border=1>" ;
    
    foreach($tableau as $key => $value){
        $moyenne = moy($value) ;
    echo "<tr><td style = 'background-color:$chaine ;'> $key </td><td style ='background-color:$chaine ;'> $value </td> </tr>" ; }
    echo "</table>" ;
    
    function moy ($moyenne){
        if($moyenne >10){
        return "green";

    }else{
        return "red";
    }
}
?>
</body>
</html>
