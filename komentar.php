<form method="POST">
	komentar : <input type="text" name="komentar"> &nbsp;
	<input type="submit" name="submit" value="cek">



</form>

<?php 
	if (isset($_POST['submit'])) {
		$komentar=$_POST['komentar'];


		if (str_word_count($komentar)>=5) {
			echo $komentar;
			# code...
		}elseif (str_word_count($komentar)<5) {
			echo "error, kata kurang dari 5 kata";
			# code...
			# code...
		}
		# code...
	}



 ?>
