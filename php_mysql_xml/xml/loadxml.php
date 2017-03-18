<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("names.xml");

print $xmlDoc->saveXML();
?> 