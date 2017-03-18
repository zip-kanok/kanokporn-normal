<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head>
		<title>Example: Working with PHP and XML Elements (II)</title>
	</head>
	<body>
		<h2>loadxmlnode2.php</h2>
		<?php
			$xml = simplexml_load_file("note.xml");
	
			echo $xml->getName() . "<br />";

			foreach($xml->children() as $child)
			{
				echo $child->getName() . " : " . $child . "<br />";
			}
		?>
	</body>
</html>