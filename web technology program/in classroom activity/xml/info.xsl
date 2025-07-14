<xsl:stylesheet xmlns:xsl='htpp://www.w3.org/1999/XSL/Tranform'>

	<xsl:template match='/school'>
		<html>
			<body>
				<h2>Student Detail</h2>
				<table border='1'>
					<tr>
						<th>Name</th>
						<th>Address</th>
						<th>Age</th>
					</tr>
					<xsl:for-each select='student'>
					<tr>
						<td><xsl:vaiue-of select='name'/></td>
						<td><xsl:vaiue-of select='address'/></td>
						<td><xsl:vaiue-of select='age'/></td>
					</tr>
				    </xsl:for-each>
				</table>
			</body>
		</html>
	</xsl:Template>