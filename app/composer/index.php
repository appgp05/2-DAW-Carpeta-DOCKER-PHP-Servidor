<?php
require __DIR__ . '/vendor/autoload.php';
use Controller\Admin\A as Admin_A;
use Controller\Services\A as Services_A;

$a1 = new Admin_A();
$a2 = new Services_A();
$c = new C();
$d = new A();
$e = new E();
$f = new F();
$g = new G();
$h = new H();
$i = new I();
$j = new J();

echo "<h1>$a1</h1>";
echo "<h1>$a2</h1>";
echo "<h1>$c</h1>";
echo "<h1>$d</h1>";
echo "<h1>$e</h1>";
echo "<h1>$f</h1>";
echo "<h1>$g</h1>";
echo "<h1>$h</h1>";
echo "<h1>$i</h1>";
echo "<h1>$j</h1>";
?>
