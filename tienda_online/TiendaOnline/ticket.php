<div align="center" style="height:80%; border:solid; margin-left:30%; margin-right:30%;">
<?php
//setlocale(LC_TIME,"es_MX");
date_default_timezone_set('UTC');
date_default_timezone_set("America/Mexico_City");		

$carritoobt = $_GET["carrito"];
$totalp = $_GET['tot_pagar'];
$pagara = $_GET['pago'];
$num_articulo = $_GET['contador_art'];

/*echo $carritoobt."\n";
echo '<br>';
echo $totalp."\n";
echo $pagara."\n";*/

echo '<br>' ;
echo '<br>' ;
echo '<h1>Don baraton </h1>';

echo 'Fecha: '.strftime ("%d de %b del %Y");

//echo strftime("Hoy es %A y son las %H:%M");
//echo strftime("El año es %Y y el mes es %B");

echo '<br>';
echo '<br>' ;
echo 'Hora de venta: ' .strftime("%H:%M");
echo '<br>';
echo '<br>' ;
echo '
Articulos vendidos: '.$num_articulo;
echo '<br>';
echo '<textarea disabled style="width:400px; height:150px;">'.$carritoobt.'</textarea>';

echo '<br>';
echo '<br>' ;
echo '
Total de venta: '.$totalp;

echo '<br>';
echo '<br>' ;
echo '
Total pagado: ',$pagara;

echo '<br>';
echo '<br>' ;
echo '
Cambio: '.($pagara -$totalp);

//echo fechaHoraMexico(strftime ("%d de %B del %Y"));

//function fechaHoraMexico($timestamp) {
    /*date_default_timezone_set('UTC');
    date_default_timezone_set("America/Mexico_City");
    //$hora = strftime("%I:%M:%S %p", strtotime($timestamp));Descomentar en caso de requerir hora
    setlocale(LC_TIME, 'spanish');
    $fecha = utf8_encode(strftime("%A %d de %B del %Y", strtotime($timestamp)));
    echo  $fecha ;//$hora; concatenar con fecha para obtener fecha y hora*/

?>
</div>
<div align="center" style="height:80%; margin-left:30%; margin-right:30%;">
     <h2><a href="tienda.php" style="text-align:center">Otra venta</a></h2>
</div>
          
