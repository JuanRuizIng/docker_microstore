<?php
$usuario = $_POST['usuario'];

$items = array();

// Recorrer los valores de cantidad enviados por el formulario
foreach ($_POST['cantidad'] as $id => $cantidad) {
    if ($cantidad>0){
    $item['id'] = $id;
    $item["cantidad"] = $cantidad;
    array_push($items, $item);
}

}

//$items = array(
//    'id' => $id,
//    'cantidad' => $cantidad,
//);
//$json_data = json_encode($data);

$orden['usuario']=$usuario;
$orden['items']=$items;

$json = json_encode($orden);
//echo $json;


$url = 'http://ordenes:3003/ordenes';

// Inicializar cURL
$ch = curl_init();

// Configurar opciones de cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la solicitud POST
$response = curl_exec($ch);
if (curl_errno($ch)) {
    // Mostrar el mensaje de error
    echo 'Error:' . curl_error($ch);
};
// Manejar la respuesta
if ($response===false){
    header("Location:index.html");
}
// Cerrar la conexión cURL
curl_close($ch);

//echo "la orden ha sido creada";
header("Location:usuario.php");

?>
