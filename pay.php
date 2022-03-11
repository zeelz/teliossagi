<?php

$price  = $_POST['price'];
$email  = $_POST['email'];
$ebookNo = $_POST['ebookNo'];

$url = "https://api.paystack.co/transaction/initialize";
$fields = [
  'email' => $email,
  'amount' => $price . '00',
  'metadata' => ['ebookNo' => $ebookNo]

];
$fields_string = http_build_query($fields);
//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer sk_test_9bc1f613a771d825c5cbb1567920c988abf12a0e",
  "Cache-Control: no-cache",
));

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute post
$result = curl_exec($ch);

// $serialize = json_encode($result);
$auth_url = json_decode($result)->data->authorization_url;


// $serialize = serialize($result);
// $unserialize = unserialize($serialize);

// $res;

// try {
//     $res = eval($result);
// } catch (\Throwable $e ) {
//     echo "parsing failed " .$e;
// }

// print_r($decodedResult->data->authorization_url);

header("Location: " . $auth_url);

// https://azusion.com/?trxref=80jf9v31fo&reference=80jf9v31fo
