<?php

//Declare new DOMDocument
$xmlDoc = new DOMDocument();
//Load links.xml
$xmlDoc->load("links.xml");

//Add one line here
$x = $xmlDoc->getElementsByTagName('link');
//or $x = $xmlDoc.getElementsByTagName('link');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0)
{
$hint="";
for($i=0; $i<($x->length); $i++)
  {
  $y=$x->item($i)->getElementsByTagName('title');
  $z=$x->item($i)->getElementsByTagName('url');
  if ($y->item(0)->nodeType==1)
    {
    //find a link matching the search text
    if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q))
      {
      if ($hint=="")
        {
            //Add your code here
            $hint = "<a href='".$z->item(0)->childNodes->item(0)->nodeValue."' target = '_blank'>"
              .$y->item(0)->childNodes->item(0)->nodeValue."</a>"; // target blank is new tab
            
        }
      else
        {
            //Add your code here
            $hint = $hint."<br/><a href='".$z->item(0)->childNodes->item(0)->nodeValue."' target = '_blank'>"
              .$y->item(0)->childNodes->item(0)->nodeValue."</a>"; // target blank is new tab.
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint=="")
  {
		$response="no suggestion";
  }
else
  {
		$response=$hint;
  }

//output the response
echo $response;
?>