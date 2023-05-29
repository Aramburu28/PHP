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
    echo "<table>";
    $nombre = $_GET["name"];
    $result = mysqli_query($mysqli, 'SELECT "Numero de movimientos",movimientosPok("'.$nombre.'")');
    
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
    
    $result = mysqli_query($mysqli, 'SELECT p.nombre, m.nombre, t.nombre as tipo FROM pokemon p, pokemon_movimiento_forma pmf, movimiento m, tipo t WHERE p.nombre like "'.$nombre.'" 
    AND p.numero_pokedex = pmf.numero_pokedex AND pmf.id_movimiento = m.id_movimiento AND m.id_tipo = t.id_tipo');
    
if(!$result){
    die("Invalid query:" . mysqli_error());
}else{
    echo "<tr>";
    while($row = mysqli_fetch_assoc($result)){
        
            echo "<td>".$row['nombre']. "</td><td>".$row['tipo']. "</td> ";
        echo "</tr>";
    }
}

mysqli_close($mysqli);
?>

    </body>
</html>