<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head>
		<title>Example: Working with PHP and XML Elements (I)</title>
	</head>
	<body>
		<h2>loadxmlnode1.php</h2>
		<?php
			//Create XML DOM
			$xmlDoc = new DOMDocument();

			//Load note.xml file
			$xmlDoc->load("note.xml");
			
			//Declare $x as Root Element
			$x = $xmlDoc->documentElement;
			
			// Loop to Print Each Element
			// To: Tove ...
			foreach ($x->childNodes AS $item)
			{
				print $item->nodeName . " : " . $item->nodeValue . "<br />";
			}
		?>
	</body>
</html>