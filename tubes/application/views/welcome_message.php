<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
</head>
<body>
	<div class="container">
		<fieldset>	
			<div class="content">
				<div class="header">
					<h2>SIMPLE LAPOR!</h2><br>	
				</div>
				<form action="form.php" method="post"> 
					<input class="boxcari" type="text" name="term" />
					<input class="btncari"type="submit" value="Cari" /> 
				</form> <br>
				<p align="center">
					<a href="<?php echo base_url('Welcome/buat_laporan') ?>" class="buat-lapor">Buat Laporan/Komentar +</a>
				</p>
				<p>Laporan/Komentar Terakhir</p>
				<hr>
			</div>
		</fieldset>
	</div>

</body>
</html>
