<?php

$raw_json = $_GET['objects'];
$json = json_decode($raw_json, true);

$xml = new SimpleXMLElement('<xml/>');
echo "<pre>";
print_r($json);

// header('Content-type: text/xml');
// header('Content-Disposition: attachment; filename="text.xml"');

// echo $xml->asXML();