<?php
	/*$conexion = mysqli_connect("http://localhost:3306", "root	", ""); 
	mysqli_select_db($conexion, "tienda"); */
	//$tildes = $conexion->query("SET NAMES 'utf8'");//Para que se muestren las tildes correctamente
	
	/*$resultado = mysqli_query($conexion, $consulta);				
	if($row2 = mysqli_fetch_array($resultado))
	
	$result2 = mysqli_query($conexion, $consulta);		 
	while($row = mysqli_fetch_array($result2)){}*/
	
	//$basedatos = new SQLite3('tienda.db');
	include ('./db/conexion.php');
	
	?> 
<!DOCTYPE html>
<html>
	<head>
    <script src="carrito.js"></script>
    <title>Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">  

    </head>
	<body>
    <?php
	 if(!empty($_POST['cantidad'])){
		 ////////agrega productos tabla ticket
		 $fecha= date("Y-m-d H:i:s");
		 $total = $_POST['cantidad']*$_POST['precio'];
		 $insert = "insert into tickets (fecha, cantidad_producto, producto, total_producto) values ('".$fecha."',".$_POST['cantidad'].",'".$_POST['producto']."',".$total.");";
		//echo $insert;
	$basedatos->query($insert);
	//////////FIN//////////
	/////resta cantidad vendido
	$insert_resta = " update productos set existencias = existencias-".$_POST['cantidad'].";";
		//echo $insert;
	$basedatos->query($insert_resta);
	//////FIN//////
	
	 }
	?>
    <style>
	.colirin{
		text-decoration: none;
		padding: 5px;
		font-weight: 600;
		font-size: 20px;
		color: #ffffff;
		background-color: #18b83a;
		border-radius: 10px;
		border: 1px none #0016b0;
		margin-left:10px;
	}
	.colirin2{
		text-decoration: none;
		padding: 5px;
		font-weight: 600;
		font-size: 20px;
		color: #ffffff;
		background-color: #b85d18;
		border-radius: 10px;
		border: 1px none #0016b0;
		margin-left:10px;
	}
	
	</style>
    <h3>Lista de productos</h3>
    <p><a class="colirin" href="Insert.php"> Nuevo producto</a> <a class="colirin2" href="historial_ventas.php">Historial ventas</a></p>
    
    <table style="margin-left:10px; margin-right:10px; width:70%;" align="left" class="table" border="1" action="ticket.php" method="get">
    	<tr>
        <th>Id producto</th>
        <th>Producto</th>
        <th>Precio</th>
        <th>Opciones</th>
        </tr>
        
        <?php
		$consulta = "SELECT * FROM productos where existencias >=1;";
        $resultado = $basedatos->query($consulta );		 
		while ($row = $resultado->fetchArray()) {
		//while($row = $resultado->fetchArrays()){
			?>
            <form method="post" action="index.php">
            <tr>
            <td><input hidden="true" name="id_producto" type="text" value="<?php echo $row['id_producto'];?>"><?php echo $row['id_producto'];?></td>
            <td><input hidden="true" name="producto" type="text" value="<?php echo $row['producto'];?>"><?php echo $row['producto'];?></td>
            <td><input hidden="true" name="precio" type="text" value="<?php echo $row['precio'];?>"><?php echo $row['precio'];?></td>
            <td>
            <a href="view.php?idpro=<?php echo $row['id_producto'];?>" type="button" style="width:100px;height:30px;background-color:blue;color:black;font-size:12pt; font-family:Verdana;text-align:center;">Detalle</a>
            <a href="Update.php?idactu=<?php echo $row['id_producto'];?>" type="button" style="width:100px;height:30px;background-color:orange;color:black;font-size:12pt; font-family:Verdana;text-align:center;">Actualizar</a>
            <a href="Delete.php?idelim=<?php echo $row['id_producto'];?>" type="button" style="width:100px;height:30px;background-color:red;color:black;font-size:12pt; font-family:Verdana;text-align:center;">Eliminar</a>
            <input name="cantidad" type="number" value="1" min="0" max="<?php echo $row['existencias'];?>" required>
            <input type="submit" value="Generar ticket" style="width:150px;height:30px;background-color:#0C0;color:black;font-size:12pt; font-family:Verdana;text-align:center;">
            <!--<input onClick="agrega_ticket(<?php echo $row['existencias'];?>,<?php echo $row['id_producto'];?>,<?php echo $row['precio'];?>);" type="button"  value="Generar ticket" style="width:150px;height:30px;background-color:#0C0;color:black;font-size:12pt; font-family:Verdana;text-align:center;">-->
            </td>
            
            </tr>
            </form>
            <?php
		}
        
		?>
	</table>
    
    <script>
	/*function agrega_ticket(existe, id_producto, precio){
		var checa_exis = parseInt(prompt("Cantidad en existencia: "+existe+"\nFavor de ingresar la CANTIDAD "),10);
		if(checa_exis <= existe){
			if(checa_exis > 0){
				var fecha = "now()";
				var cantidad_producto = checa_exis;
				var id_producto = id_producto;
				var total = cantidad_producto*precio;
				var cadena = fecha+","+cantidad_producto+",'"+id_producto+"', "+total;
				alert(cadena);
				//alert (cantidad_producto+"::"+id_producto+"::"+total);
				<?php
				/*$insert = "insert into tickets (fecha, cantidad_producto, producto, total_producto) values ("?> +cadena+ <?php ");";
				echo $insert;
				$basedatos->query($insert );*/
				?>
			}else{
				alert("Valor incorrecto!!");
			}
		}else{
			alert("Valor incorrecto!!");
		}
		
	}*/
	</script>
    <script type="text/javascript">
	/*function PromptDemo() {
	//Ingresamos un mensaje a mostrar
	var mascota = prompt("¿Cuál es tu mascota favorita?", "");
	//Detectamos si el usuario ingreso un valor
	if (mascota != null){
	alert("Tu mascota favorita es " + mascota);
	}
	//Detectamos si el usuario NO ingreso un valor
	else {
	alert("No has ingresado una mascota");
	}
	}*/
	</script>
	</body>
</html>