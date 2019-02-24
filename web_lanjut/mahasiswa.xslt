<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
	<html> 
	<body>
		<h1>Data Mahasiswa</h1>
		<xsl:for-each select="akademik/mahasiswa">
			<span style='color:blue'>NIM </span><xsl:value-of select="nim"/> <br/>
			Nama <xsl:value-of select="nama"/>  <br/>
			Alamat <xsl:value-of select="alamat"/>  <br/>
			Jurusan  <xsl:value-of select="jurusan"/>  <br/>
		</xsl:for-each>
	</body>
	</html>
</xsl:template>
</xsl:stylesheet>