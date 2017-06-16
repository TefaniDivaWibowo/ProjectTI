<?php
		foreach ($Ta_Copper_Date_Close as $row) {
			$time 	= strtotime($row->tgl_open);
			$tgl 	= date("d", $time);
			echo $tgl;
			echo " ";
			echo $row->count;
			echo "<br>";
		}
?>