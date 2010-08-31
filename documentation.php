<html>
	<head>
		<title>Woopsi - News</title>
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
				<div class="rounded">
					<ul>
						<li><a href="docs/index.html">API documentation</a></li>
						<li><a href="faq.php">Frequently asked questions</a></li>
						<li><a href="tutorials.php">Tutorials</a></li>
					</ul>
				</div>
			</div>
			<div id="footer">
				<? include("footer.php"); ?>
			</div>
		</div>
	</body>
</html>