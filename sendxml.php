<html>
	<head>
 		<meta charset="utf-8" />
  		<title>sendxml</title>
 	</head>
 	<body>
		<?php
			$xml = simplexml_load_file("XMLTheme1.xml");
			//print_r($xml);
			echo json_encode($xml);
		?>
 </body>
</html>