<form action="PWTablasM.php" method="post">
    <p>Filas: <input type="text" name="filas"></p>
    <p>Columnas: <input type="text" name="columnas"></p>
    <p>Multiplicadores: <input type="text" name="multiplicadores"></p>
    <input type="submit" value="Generar">
</form>

<?php 

$filas = (int)$_POST['filas'];
$columnas = (int)$_POST['columnas'];
$multiplicadores = (int)$_POST['multiplicadores'];
$tablas = $columnas * $filas;


echo"<table border=1 cellpadding=5 cellspacing=5>";
for($i=1; $i <= $tablas; $i++){
    
    echo"<td border=1>";
    for($j=1; $j <= $multiplicadores; $j++){
        echo"$i * $j = ";
        echo $i * $j ;
        echo"<br>";
        
    }
    if($i % $columnas == 0){
        
        echo"<tr>";
        
        echo"</tr>";
        
    }
    echo"</td>";
}
echo"</table>";


?>