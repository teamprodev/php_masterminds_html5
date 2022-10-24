<?php
// Assuming you installed from Composer:
require "vendor/autoload.php";

use Masterminds\HTML5;
$html = new HTML5(array(
    "implicitNamespaces"=>array(
        "t"=>"http://www.example.com"
    )
));

$dom = $html->loadHTML('<t:tag/>');

$dom->documentElement->namespaceURI;
