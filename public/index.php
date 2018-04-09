<?php
/**
 * Created by PhpStorm.
 * User: legolas
 * Date: 09/04/18
 * Time: 11:32
 */

require '../vendor/autoload.php';

$hello = new \App\Wcs\Hello();
$hime = new HelloWorld\SayHello();

echo $hello->talk();
echo $hime->world();