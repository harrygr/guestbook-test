<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guestbook</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<meta id="token" name="token" value="{{ csrf_token() }}">

</head>
<body>
	<div class="container">
		@yield('content')
	</div>
	<script src="js/main.js"></script>
</body>
</html>