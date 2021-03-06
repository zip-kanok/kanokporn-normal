 <?php
$host = "localhost";
$user = "egci427";
$pass = "egci427";
$database = "egci427";



$con = mysqli_connect($host, $user, $pass, $database) or die("Could not connect to host.");


$query = "SELECT * FROM personinfo ORDER BY lastname";
$result = mysqli_query($con, $query) or die("Data not found.");


header('Content-Type: text/xml');

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

	
	

	
	// create the <addres> element 
	$address = $dom->createElement('address');
		$address->appendChild($city);
	$address->appendChild($country);
	$address->appendChild($telephone);
	$address->appendChild($email);

	// create the <person> element 
	// create the address element for the person
	$person = $dom->createElement('person');
	$person->appendChild($firstname);
	$person->appendChild($lastname);
$person->appendChild($address);

	// append <person> as a child of <people>
	$people->appendChild($person);
}	

// build the XML structure in a string variable
$xmlString = $dom->saveXML();


// clean whitespace and remove space error
$xmlString = ltrim(substr($xmlString, strpos($xmlString, '?'.'>')+2)); // removing <?xml

// output the XML string
echo $xmlString;
mysqli_close($con);

?> 