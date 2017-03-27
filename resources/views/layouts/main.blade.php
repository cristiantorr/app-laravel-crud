<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>lara el capacitación</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
	<header>
	 	<nav class="navbar navbar-inverse">
	 		<ul class="nav navbar-nav">
	 			<li><a href="{{ route('updateCitiesView') }}">Registrarse</a></li>
	 			<li><a href="{{ route('participantView') }}">Participantes</a></li>
	 		</ul>
	 	</nav>
	</header>
	<div class="container">
		@yield('content')
	</div>
	<footer class="footer" style="margin-top: 20px">
      <div class="container">
        <p>Footer</p>
      </div>
    </footer>
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.7.0/parsley.min.js"></script>-->
<script src="{{ asset('js/main.js')}}"></script>
</body>
</html>