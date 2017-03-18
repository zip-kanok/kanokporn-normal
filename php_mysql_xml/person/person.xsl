<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<html>
			<head>
				<title>In-class Example: PHP, MySQL, and XML</title>
				<style type="text/css">
					h3 {color:darkgreen}				
					b {color:darkgrey}
					i {color:darkblue}
				</style>
			</head>
			<body>
  				<h3>Information about <xsl:value-of select="count(response/people/person)" /> people.</h3>
				<table border="0">
				<tbody>                         
					<xsl:for-each select="//person">
						<tr><td><i>Address</i></td></tr>
						<tr>
							<td><b>Name:</b></td>
							<td><xsl:apply-templates select="./lastname"/>, <xsl:apply-templates select="./firstname"/></td> 
						</tr>						
						<tr>
							<td><b>Location:</b></td>
							<td><xsl:apply-templates select="./address/city"/>, <xsl:value-of select="./address/country" /></td>
						</tr>
						<tr>
							<td><b>Telephone:</b></td>
							<td><xsl:apply-templates select="./address/telephone"/></td>
						</tr>
						<tr>
							<td><b>E-mail</b></td>
							<td><xsl:apply-templates select="./address/email"/></td>
						</tr>						
					</xsl:for-each>
				</tbody>
				</table>
  			</body>
 		</html>
	</xsl:template>
</xsl:stylesheet>