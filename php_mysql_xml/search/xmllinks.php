<?php
//Load data from Database: hostname: localhost, username: root, password: , database_name: class, table_name:links 
//-- Add your codes here --//

//Load data from Database
//-- Add your codes here --//

header('Content-Type: text/xml');

// creat XML structure and add the datavalue into XML document
$dom = new DOMDocument();

// create the root <pages> element
//-- Add your codes here --//

while($row = mysql_fetch_array($result))
{
	// create the element <title> for the <link>
	//-- Add your codes here --//

	// create the element <url> for the <link>
	//-- Add your codes here --//	

	// append <title> and <url> as a child of the <link> element 
	//-- Add your codes here --//

	// append <pages> as a child of <link>
	//-- Add your codes here --//
}	

// build the XML structure in a string variable
//-- Add your codes here --//

// save XML data as link.xml
$dom->save('link.xml');


// clean whitespace and remove space error
$xmlString = ltrim(substr($xmlString, strpos($xmlString, '?'.'>')+2)); // removing <?xml

// print output as the XML string on the screen
echo $xmlString;

?> 