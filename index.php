<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('./PDF2Text.php');

if (!isset($_GET['pdf'])) die('?pdf cannot empty');
if (!file_exists ( './pdf/'.$_GET['pdf']  )) die('No pdf found');

$a = new PDF2Text();
$a->setFilename('./pdf/'.$_GET['pdf']);
$a->decodePDF();
echo ($a->output())?:"Empty";
