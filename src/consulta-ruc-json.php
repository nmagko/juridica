<?php
// METHOD GET. Input RUC and Token.
// Modified by Victor C (aka nmagko)
// This program was originally written in Spanish because of the
// technical challenge, but I rewrote it in English for general use.

// Calling URL
$ruta = "https://ruc.com.pe/api/v1/consultas";

// The "tipo" variable is just for compatibility and not really used in
// this program.
$tipo = isset($_GET["tipo"]) ? $_GET["tipo"] : "0";

// Query data
$token = $_GET["token"];
$rucaconsultar = $_GET["ruc"];

$data = array(
      "token"	=> $token,
      "ruc"	=> $rucaconsultar
);
	
$data_json = json_encode($data);

// Calling the web service in ruc.com.pe
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
