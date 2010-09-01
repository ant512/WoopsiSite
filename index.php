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
					<a href="http://woopsi.org"><img src="img/logo.png"></a>
					<? include("navigation.php"); ?>
				</div>
			</div>
			<div id="content">
				<div id="download">
					<div>
						<a class="button lightgrey" href="downloads/woopsi-src-0.99.3.zip"><img src="img/zip.png">Download Woopsi</a>
					</div>
					<div>
						<a class="button lightgrey" href="downloads/"><img src="img/ds.png">Download DS Demo</a>
					</div>
					<div>
						<a class="button lightgrey" href="downloads/"><img src="img/imac.png">Download OSX Version</a>
					</div>
				</div>
			</div>
			<div id="footer">
				<? include("footer.php"); ?>
			</div>
		</div>
	</body>
</html>