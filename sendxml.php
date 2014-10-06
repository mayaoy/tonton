<html>
	<head>
 		<meta charset="utf-8" />
  		<title>sendxml</title>
 	</head>
 	<body>
		<?php
			$file_name = $_POST;
			//$xml = simplexml_load_file("1412584790.xml");
			$xml = simpleXML_load_file($file_name,"SimpleXMLElement",LIBXML_NOCDATA);
			//print_r($xml);
			echo json_encode($xml);
		?>
 </body>
</html>