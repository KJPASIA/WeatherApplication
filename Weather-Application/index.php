<!DOCTYPE html>
<html>
<head>

	<!-- PAGE TITLE -->
	<title>Weather Scraper</title>

	<!-- FAVICON -->
	<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

	<!-- META DATA -->
  <meta charset="utf-8" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">

	<!-- RESET CSS LINK -->
  <link rel="stylesheet" type="text/css" href="assets/css/reset.css">

	<!-- CUSTOM CSS LINK -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
	<!-- BOOTSTRAP CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

	<!-- WEATHER INFO PANEL -->
	<div class="container">
		<div class="row text-center">
			<div id="weather-panel" class="col-12 col-sm-10 col-md-8">

				<!-- APP NAME/TITLE -->
				<h1>TODAY'S WEATHER</h1>
				<!-- APP INSTRUCTIONS/INFO -->
				<p>Search any City name to find the current weather anywhere in the World!</p>

				<!-- CITY SEARCH FORM -->
				<form method="post">
					<div class="form-group">
						<input type="text" name="city" id="city" class="form-control" placeholder="Eg. London, Hong Kong, New York..." />
					</div>

					<button type="submit" id="find-weather" class="btn btn-primary btn-lg">Submit</button>
				</form>
				<!-- END CITY SEARCH FORM -->

				<!-- SUCCESSFUL WEATHER SEARCH ALERT -->
				<div class="alert alert-primary" role="alert">
					<p>Weather Forecast:</p>
					<span id="forecast"></span>
				</div>

				<!-- ERROR WEATHER SEARCH ALERT -->
				<div class="alert alert-danger" role="alert"></div>

			</div>
		</div>
	</div>
	<!-- END WEATHER INFO PANEL -->


<!-- JQUERY CDN -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<!-- CUSTOM APP JS LINK -->
<script type="text/javascript" src="assets/js/app.js"></script>

</body>
</html>