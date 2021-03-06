<!DOCTYPE HTML>
<html>
<head>
	<title>Tugas Pemrograman Integratif</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="main" class="frame">
		<form method="post" action="index1.php">
			<p style="color:white" class="header">Tugas Pemrograman Integratif</p><br>
			<p style="color:white" class="text"> Farrell Yodihartomo </p>
			<p style="color:white" class="text"> 18211033 </p>
			<p style="color:white" class="text"> Azka Ihsan Nurrahman </p>
			<p style="color:white" class="text"> 18211002 </p>
			<p style="color:black;font-family:'Segoe UI';font-weight:bold">Tekan tombol untuk melakukan konversi data</p><br>
			<input type="submit" class="button">	
		</form>
	</div>
	<div name="outputcsv" class="outputdiv">
		<p style="color:white" class="text">Output File CSV</p>
		<textarea class="output">
				<?php
				$xml=simplexml_load_file("myData.xml");
				echo "<?xml version='1.0' encode='UTF-8' ?>";
			 	echo "<".$xml->getName().">";
				foreach($xml->children() as $ticket)
				{
					echo "<".$xml->getName().">";
					echo "<ID>".$ticket->id."</ID>";
					echo "<CodeName>".$ticket->code-name."</CodeName>";
					echo "<Value>".$ticket->value."</Value>";
					echo "</".$xml->getName.">";
				}
				echo "</".$xml->getName.">";
				?>
		</textarea>
	</div>
	<div name="outputsql" class="outputdiv">
		<p style="color:white" class="text">Output File XML</p>
		<textarea class="output">
			<?php
				$xml=simplexml_load_file("text.xml");
				echo "<?xml version='1.0' encode='UTF-8' ?>";
			 	echo "<".$xml->getName().">";
				foreach($xml->children() as $ticket)
				{
					echo "<data_pesanan>";
					echo "<nomor>".$ticket->nomor."</nomor>";
					echo "<id_karyawan>".$ticket->id_karyawan."</id_karyawan>";
					echo "<id_pelanggan>".$ticket->id_pelanggan."</id_pelanggan>";
					echo "<tanggal>".$ticket->tanggal."</tanggal>";
					echo "<data_pesanan>";
				}
				echo "</".$xml->getName.">";
				?>
		</textarea>	
	</div>
	<div class="outputdiv" name="outputxml">
		<p style="color:white" class="text">Output File XML</p>
		<textarea class="output">
			<?php
				$xml=simplexml_load_file("dbxml.xml");
				echo "<?xml version='1.0' encode='UTF-8' ?>";
			 	echo "<".$xml->getName().">";
				foreach($xml->children() as $ticket)
				{
					echo "<genre>";
					echo "<nama>".$ticket->nama."</nama>";
					echo "<peminat>".$ticket->peminat."</peminat>";
					echo "</genre>";
				}
				echo "</".$xml->getName.">";
			?>
		</textarea>	
	</div>
</body>

<?php
	
	$tombol = $_REQUEST['execute'];

	if (onclick)

?>
</html>
