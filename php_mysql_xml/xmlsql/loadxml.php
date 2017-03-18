<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head>
		<title>Example: Working with PHP and XML</title>
	</head>
	<body>
	<h2>loadxml.php</h2>
	<?php
		// Create XML DOM
		$xmlDoc = new DOMDocument();

		// Load note.xml file
		$xmlDoc->load("note.xml");
	
		// Print output
		print $xmlDoc->saveXML();
	?> 
	</body>
</html>