<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://cevicherias.informaticapp.com/DetallePedido/'.$_GET['depe_id'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'DELETE',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VnVHZPcXhGNVg5MmZ6OGxyOGtuZHM0MGZBT2JWY0U2Om8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlLjF4VzB4NEZVWmNXNlpKYTVMMi5iUS5jekVyRzdpcQ==' ),
));

$response = curl_exec($curl);

curl_close($curl);
$data = json_decode($response, true);
header("Location: detalle_pedido_html.php");
?>