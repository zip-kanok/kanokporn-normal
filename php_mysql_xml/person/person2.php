 <?php
$host = "localhost";
$user = "egci427";
$pass = "egci427";
$database = "egci427";


$con = mysqli_connect($host, $user, $pass, $database) or die("Could not connect to host.");
$query = "SELECT * FROM personinfo ORDER BY lastname";
$result = mysqli_query($con, $query) or die("Data not found.");

header('Content-Type: text/html');

$dom = new DOMDocument();

// create the root <response> element
$response = $dom->createElement('response');
$dom->appendChild($response);

// create the <people> element and append it as a child of <response>
$people = $dom->createElement('people');
$response->appendChild($people);

while($row = mysqli_fetch_array($result))
{
	// create the firstname element for the person
	$firstname = $dom->createElement('firstname');
	$firstnameText = $dom->createTextNode($row['firstname']);
	$firstname->appendChild($firstnameText);

	// create the lastname element for the person
	$lastname = $dom->createElement('lastname');
	$lastnameText = $dom->createTextNode($row['lastname']);
	$lastname->appendChild($lastnameText);

	// create the city element for the person
	$city = $dom->createElement('city');
	$cityText = $dom->createTextNode($row['city']);
	$city->appendChild($cityText);

	// create the country element for the person
	$country = $dom->createElement('country');
	$countryText = $dom->createTextNode($row['country']);
	$country->appendChild($countryText);
	
	// create the telephone element for the person
	$telephone = $dom->createElement('telephone');
	$telephoneText = $dom->createTextNode($row['telephone']);
	$telephone->appendChild($telephoneText);

	// create the email element for the person
	$email = $dom->createElement('email');
	$emailText = $dom->createTextNode($row['email']);
	$email->appendChild($emailText);
		

	// create the <person> element 
	$person = $dom->createElement('person');
	$person->appendChild($firstname);
	$person->appendChild($lastname);

	
	// create the <addres> element 
	$address = $dom->createElement('address');
	$address->appendChild($city);
	$address->appendChild($country);
	$address->appendChild($telephone);
	$address->appendChild($email);

	// create the address element for the person
	$person->appendChild($address);

	// append <person> as a child of <people>
	$people->appendChild($person);
	}	


// XSL Transform
// load XSL file
$xsl = new DOMDocument;
$xsl->load('person.xsl');

// Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // attach the xsl rules

// transform XML with XSL
$new =  $proc->transformToXML($dom);
echo substr_replace($new, '/>',strpos($new, '8')+2, 2);

mysqli_close($con);
?> 