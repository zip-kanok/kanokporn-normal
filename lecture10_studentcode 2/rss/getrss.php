<?php
//get the q parameter from URL
$q=$_GET["q"];

//find out which feed was selected
if($q=="Google")
  {
  $xml=("http://news.google.com/news?ned=us&topic=h&output=rss");
  }
elseif($q=="MSNBC")
{
  $xml=("http://rss.msnbc.msn.com/id/3032091/device/rss/rss.xml");
}


//Declare New DOMDocument
//Add one line here
//Load $xml
//Add one line here

//get elements from "<channel>"
//Add one line here

//get elements from "<title>"
//Add one line here

//get elements from "<link>"
//Add one line here

//get elements from "<description>"
//Add one line here

//output elements from "<channel>"
echo("<p><a href='" . $channel_link
  . "'>" . $channel_title . "</a>");
echo("<br />");
echo($channel_desc . "</p>");

//get and output "<item>" elements
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=2; $i++)
  {
	//Load value of $item_title, $item_link, $item_desc
	//Add your code here




  echo ("<p><a href='" . $item_link
  . "'>" . $item_title . "</a>");
  echo ("<br />");
  echo ($item_desc . "</p>");
  }
?> 