<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Read CSV records on HTML table</title>
<style>
	table {
		width: 80%;
		border-collapse: collapse;
	}

	table, td, th {
		border: 1px solid black;
	}

	th {
		background-color: #3b8ce2;
		}
</style>
</head>
<body>
<?php
	$data = array();
	class csvTable{
		function readcsvfile($in_file){
		
			$file = fopen("all.csv", "r");
			while (!feof($file)) {
				print_r(fgetcsv($file));
				$data = explode(',', $result);
			}
			fclose($file);
		}
		
//		function createTable() {
//			
//		}	
	}



$obj = new csvTable;
$obj->readcsvfile($in_file);
?>
</body>
</HTML>