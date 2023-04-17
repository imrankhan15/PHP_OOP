<?php
		$database = new Master\db();
		$database->selectData();


		if ($_SESSION['data'] == 5) {
			$secondsWait = 0;
			
			$_SESSION['data'] = 0;
			echo '<meta http-equiv="refresh" content="'.$secondsWait.'">';
			
			

		}
		

		


		 
	?> 