<?php

$fila = 1;

$conn =  mysql_connect('localhost', 'root', 'leo1979');
mysql_select_db('ctz');
mysql_query("SET AUTOCOMMIT=0");
mysql_query("START TRANSACTION");

try
{
	if (($gestor = fopen("socios.csv", "r")) !== FALSE) {
	    while (($datos = fgetcsv($gestor, 1000, ";")) !== FALSE) {
	    	$nro = $datos[0];
	    	$apenom = explode(',', $datos[1]);
	    	$ap = $apenom[0];
	    	$nom = $apenom[1];
	    	$dir = $datos[2];
	    	$mail = $datos[3];
	    	$cat = $datos[4];
	    	$fecha = $datos[5];
	    	$fnac = 'null';
	    	if ($fecha)
	    	{
	    		$fecha = DateTime::createFromFormat('d/m/Y', $fecha);
	    		$fnac = "'".$fecha->format('Y-m-d')."'";
	    	}
	    	$gf = ($datos[6]?$datos[6]:'NULL');
	    	$lugar = $datos[7];
			
			$sql = "insert into socio (id_categoria, apellido, nombre, mail, direccion, numero, fecha_nacimiento, id_lugar_pago, id_gf)
					values ($cat, '$ap', '$nom', '$mail', '$dir', $nro, $fnac, $lugar, $gf)";
			mysql_query($sql) or die(mysql_error($conn));

	    }
	    fclose($gestor);
	    mysql_query("COMMIT");
	   }

    } catch (Exception $e) {

mysql_query("ROLLBACK");
die($e->getMessage());
	}