<html>
<head>
<style type="text/css">

table{border: 3px red solid; align:center; margin-left:500 }
td{width:100; border:1px red solid; text-align:center}
</style>
</head>
    <body >
    <a href=Hub.php>Volver a la pagina</a>
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'pokemondb');
define('DB_USER', 'root');
define('DB_PASSWORD','');
$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$mysqli){
    echo "Error: No se pudo conectar a MYSQL.". PHP_EOL;
    exit;
}
    echo "Exito! Buen trabajo crack". PHP_EOL;
    echo "Informacion del host:" . mysqli_get_host_info($mysqli) . PHP_EOL; 
    $tabla = $_GET["tabla"];
    $numero = $_GET["number"];
    $nuevo  = $_GET["fill"];
    $result = mysqli_query($mysqli, 'SELECT '.$tabla.', "Previo" FROM pokemon where numero_pokedex = '.$numero.'');
    
    echo "<table>";    
    if(!$result){
        die("Invalid query:" . mysqli_error());
    }else{
        
        echo "<tr>";
        while($row = mysqli_fetch_assoc($result)){
            foreach( $row as $col){
                echo "<td>".$col . "</td> ";
            }
            echo "</tr>";
        }
    }
$result = mysqli_query($mysqli, 'UPDATE pokemon SET '.$tabla.' = "'.$nuevo.'" where numero_pokedex = '.$numero.'');
$result = mysqli_query($mysqli, 'SELECT '.$tabla.', "Actualizado" FROM pokemon where numero_pokedex = '.$numero.'');
echo "<table>";    
if(!$result){
    die("Invalid query:" . mysqli_error());
}else{
    
    echo "<tr>";
    while($row = mysqli_fetch_assoc($result)){
        foreach( $row as $col){
            echo "<td>".$col . "</td> ";
        }
        echo "</tr>";
    }
}

mysqli_close($mysqli);
?>

    </body>
</html>