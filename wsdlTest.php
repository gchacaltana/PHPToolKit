<?php

header("Content-Type: text/plain");

$wsdl = 'http://server.com/path/to/wsdl';

$options = array(
  "login" => "user",
  "password" => "password",
  "verify_peer" => false,
  "allow_self_signed" => true
);

$client = new SoapClient($wsdl, $options);
var_dump($client->__getFunctions()); 
var_dump($client->__getTypes()); 

?>
