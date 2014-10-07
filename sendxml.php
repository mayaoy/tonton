<html>
	<head>
 		<meta charset="utf-8" />
  		<title>sendxml</title>
 	</head>
 	<body>
		<?php
			$postdata = $_POST;
			print_r($_POST);
			$file_name = $postdata[0]['file_name'].'.xml';

			if(file_exists($file_name)){
				$xml = simpleXML_load_file($file_name,"SimpleXMLElement",LIBXML_NOCDATA);
			}else{
				echo '檔案不存在';
			}

			
			//$xml = simplexml_load_file("1412584790.xml");
			
			//print_r($xml);
			echo json_encode($xml);
		?>
 </body>
</html>