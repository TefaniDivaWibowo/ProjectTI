<!DOCTYPE html>
<html>
<head>
	<title>Search SN</title>
</head>
<body>
<table border="1" >
	<thead>
	<tr>
		<th>ID PSB</th>
		<th>MDF</th>
		<th>Nomor Pots</th>
	</tr>
	</thead>
	<tbody class="isi">
		<?php
			$no = 0;
	        foreach($psb as $p){
	        	$no++;

	    ?>
	    <tr>
		    <td><?= $p['id_psb'];?></td>
		    <td><?= $p['mdf'];?></td>
		    <td><?= $p['nomor_pots'];?></td>
	    </tr>
	    <?php
			}
		?>
		</tbody>
	
</table>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous">
</script>
</body>
</html>