<?php
// Método GET. RUC a consultar y Token autorizado.
// Adaptado por Victor C (aka nmagko)

// URL de llamada para consultar RUC
$ruta = "https://ruc.com.pe/api/v1/consultas";

// Esta variable es sólo por compatibilidad con el servicio web
// con método GET provisto en el reto técnico. (Opcional)
$tipo = isset($_GET["tipo"]) ? $_GET["tipo"] : "0";

// Datos de consulta
$token = $_GET["token"];
$rucaconsultar = $_GET["ruc"];

$data = array(
      "token"	=> $token,
      "ruc"	=> $rucaconsultar
);
	
$data_json = json_encode($data);

// Invocamos el servicio a ruc.com.pe
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $ruta);
curl_setopt(
	$ch, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json',
	)
);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$respuesta  = curl_exec($ch);
curl_close($ch);

print_r($respuesta);
?>
