<?php
	date_default_timezone_set('Europe/Zagreb');
	if(isset($_POST['Izvodac'])){
		$Izvodac = $_POST['Izvodac'];
		$Album = $_POST['Album'];
		$Zanr = $_POST['Zanr'];
		$Godina = $_POST['Godina'];
		$Ocjena = $_POST['ocjena'];
		$Opis = $_POST['Opis'];
		
		$result = '';
		$result .= "<Rock_album>\n";
		$result .= "<Izvodac>" . $Izvodac . "</Izvodac>\n";
		$result .= "<Album>" . $Album . "</Album>\n";
		$result .= "<Zanr>" . $Zanr . "</Zanr>\n";
		$result .= "<Godina>" . $Godina . "</Godina>\n";
		$result .= "<Ocjena>" . $Ocjena . "</Ocjena>\n";
		$result .= "<Opis>" . $Opis . "</Opis>\n";
		$result .= "</Rock_album>";
		
		$file = 'rock_album' . date('Y_m_d_h_i_s') . '.xml';
		file_put_contents($file, $result);
		die('Uspjesno generiran XML!');
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Moj XML projekt</title>
  </head>
  <body class="p-3 mb-2 bg-dark text-white">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="My_albums.html">Moji albumi</a>
      </li>
    </ul>
  </div>
</nav>
	<div class="container">
		<h1 class="mt-5 mb-5" style="text-align: center;">Rock album</h1>
		<form  action="projekt.php" method="POST">
		  <div class="form-group">
			<label for="Izvodac">Izvođač:</label>
			<input type="text" name="Izvodac" class="form-control" id="Izvodac">
		  </div>
		  <div class="form-group">	
			<label for="Album">Album:</label>
			<input type="text" name="Album" class="form-control" id="Album">
		  </div>
		  <div class="form-group">
			<label for="Zanr">Žanr:</label>
			<input type="text" name="Zanr" class="form-control" id="Zanr">
		  </div>
		  <div class="form-group">
			<label for="Godina">Godina izdavanja:</label>
			<input type="text" name="Godina" class="form-control" id="Godina">
		  </div>
		  <div class="form-group">
		    <label for="ocjena">Ocjena albuma:</label><br>
		    <input type="range" name="ocjena" class="ocjena" min="0" max="5" id="ocjena">
		  </div>
		  <div class="form-group">
			<label for="Opis">Opis:</label>
			<textarea class="form-control" name="Opis" id="Opis" rows="5"></textarea>
		  </div>
		  <div class="form-group">
			<button type="submit" name="submit" id="submit" class="btn btn-light btn-lg mt-3">Pošalji</button>
		  </div>
		</form>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>