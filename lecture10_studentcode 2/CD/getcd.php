<?php
$q=$_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("cd_catalog.xml");

$x=$xmlDoc->getElementsByTagName('ARTIST');

for ($i=0; $i<=$x->length-1; $i++)
{
//Process only element nodes


$cd=($y->childNodes);

for ($i=0;$i<$cd->length;$i++)
{
//Process only element nodes

}
?> 