<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include './vendor/autoload.php';


if (!isset($_GET['pdf'])) die('?pdf cannot empty');
if (!file_exists ( './pdf/'.$_GET['pdf']  )) die('No pdf found');

$parser = new \Smalot\PdfParser\Parser();
$pdf    = $parser->parseFile('./pdf/'.$_GET['pdf']);

$text = $pdf->getText();
var_dump($text);

die("end");

