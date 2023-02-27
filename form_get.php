
<?php
	try {
		$sid=$_GET['sid'];
		$url = 'https://mis.ucu.edu.ph/chk/cb.php?sid='.$sid;

		$response = file_get_contents($url);

		if($response !== false) {
				echo $response;
		}

	}catch (Exception $e) {
		echo $e->getMessage();
}	
?>