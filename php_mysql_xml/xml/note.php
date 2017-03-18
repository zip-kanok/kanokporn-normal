<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("note1.xml");

print $xmlDoc->saveXML();
?> 