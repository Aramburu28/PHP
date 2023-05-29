<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
<style type="text/css">
img:hover body{background-image: url('imagenes/edit.jpg')}
table{background:yellow; ;}
div{background-color:black; color:white}
</style>
<script type="text/javascript">
function enviar()
{
  datos.action="01-Basico.php";
  datos.submit();
}
</script>

</HEAD>

<BODY style=" background-image: url('imagenes/fly.gif'); background-repeat: no-repeat; background-size:100% 100%; background-attachment:fixed">
<form style="position:absolute;margin-top:0;" id="datosOrden" name="datosOrden" method="get" action="Ordenar.php">
   <div>LISTADO DE POKEMONS ORDENADO</div> 
<table style="" align="left" border="1">
   <tr><td><p>Pokemons ordenados por: </p></td>
       <td><select name="Order" id="Order">
       <option value="nombre">Nombre</option>
        <option value="peso">Peso</option>
        <option value="Altura">Altura</option></select>
       <td><select name="sentido" id="sentido">
        <option value="ASC">Ascendiente</option>
        <option value="DESC">Descendiente</option>
   </tr>
   <tr>
		<td colspan="2"><input type="submit" value="Enviar"><img style="cursor:pointer" src="./imagenes/pokeball.png" width="100" onclick="enviar()"></td>
   </tr>
</table>
</form>
<form id="datosNombre" name="datosNombre" method="get" action="Movimiento.php">
<div style="margin-left:1150;width:352">ATAQUES APRENDIDOS POR UN POKEMON</div>
<table style="margin-left:1150; " border="1">
   <tr><td><p>Nombre de pokemon ----></p></td>
       <td><input type="text" name="name" id="name">
      </td>
   </tr>
   <tr>
		<td colspan="2"><input type="submit" value="Enviar"><img style="cursor:pointer" src="./imagenes/tm.png" width="100" height="100" onclick="enviar()"></td>
   </tr>
</table>
</form>
<form style="position:absolute;margin-top:250;" id="datosNombre" name="datosNombre" method="get" action="Editar.php">
<table style="margin-left:0; " border="1">
<tr> <div>EDITAR DATOS DE UN POKEMON</div>  </tr>
<tr><td><p>Valor a editar ----------> </p></td>
       <td><select name="tabla" id="tabla">
        <option value="nombre">Nombre</option>
        <option value="peso">Peso</option>
        <option value="Altura">Altura</option>
</td>
</tr><tr>
        <td><p style="">Numero de pokedex</p><input type="text" name="number" id="number"></td>    
   </tr>
   <tr>
        <td><p style="">Valor a introducir:</p><input type="text" name="fill" id="fill"></td>    
   </tr>
   <tr>
		<td colspan="2"><input type="submit" value="Enviar"><img style="cursor:pointer" src="./imagenes/edit.jpg" width="100" height="100" onclick="enviar()"></td>
   </tr>
</table>
</form>
<form style="position:absolute;margin-top:240; margin-left:1150" id="datosNombre" name="datosNombre" method="get" action="Anyadir.php">
<table   border="1">
<tr> <div  >INTRODUCIR UN NUEVO POKEMON</div>  </tr>
   <tr>
        <td><p style="">Nombre</p><input type="text" name="name" id="name"></td>    
   </tr>
   <tr>
        <td><p style="">Peso</p><input type="text" name="weight" id="weight"></td>    
   </tr>
   <tr>
        <td><p style="">Altura</p><input type="text" name="height" id="height"></td>    
   </tr>
   <tr>
		<td colspan="2"><input type="submit" value="Enviar"><img style="cursor:pointer" src="./imagenes/edit.jpg" width="100" height="100" onclick="enviar()"></td>
   </tr>
</table>
</form>
<form style="position:absolute;margin-top:350; margin-left:700" id="datosNombre" name="datosNombre" method="get" action="Borrar.php">
<table   border="1">
<tr> <div  >BORRAR UN POKEMON</div>  </tr>
<tr>
        <td><p style="">Numero de pokedex</p><input type="text" name="number" id="number"></td>    
   </tr>
		<td colspan="2"><input type="submit" value="Enviar"><img style="cursor:pointer" src="./imagenes/borr.png" width="100" height="100" onclick="enviar()"></td>
   </tr>
</table>
</form>
</BODY>
</HTML>