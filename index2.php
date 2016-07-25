<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('./PdfParser.php');

if (!isset($_GET['pdf'])) die('?pdf cannot empty');
if (!file_exists ( './pdf/'.$_GET['pdf']  )) die('No pdf found');

$a = new PdfParser();
echo $a->parseFile('./pdf/'.$_GET['pdf']);

