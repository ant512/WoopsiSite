<html>
	<head>
		<title>Woopsi - Home</title>
		<link rel="stylesheet" type="text/css" href="styles/cssreset.css">
		<link rel="stylesheet" type="text/css" href="styles/layout.css">
	</head>

	<body>
		<div id="container">
			<div id="top" class="darkblue">
				<div id="header">
					<img>
					<? include("navigation.php"); ?>
				</div>
			</div>
			<div id="content">
				<div id="about">
					GUI framework for Nintendo DS homebrew applications.
				</div>
				<div id="download">
					<a class="button lightgrey" href="downloads/woopsi.zip"><img src="img/zip.png"style="position: relative; top: 30">Download Woopsi</a>
				</div>
			</div>
			<div id="footer">
				<? include("footer.php"); ?>
			</div>
		</div>
	</body>
</html>