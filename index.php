<!DOCTYPE HTML>
<html>
	<head>
		<title>Woopsi - Home</title>
		<link rel="stylesheet" type="text/css" href="styles/cssreset.css">
		<link rel="stylesheet" type="text/css" href="styles/layout.css">
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"></meta>
		<script src="javascript/jquery-1.4.2.min.js"></script>
		<script>
			$(document).ready(function() {
				$('#container').before($('<div class="news" style="display: none">Latest news: Woopsi 0.99.5 released!</div>'));
				$('.news').slideDown('slow');
			});
		</script>
	</head>

	<body>
		<div id="container">
			<div id="top">
				<div id="header">
					<a href="http://woopsi.org"><img src="img/logo.png" alt="Woopsi" title="Woopsi"></a>
					<? include("navigation.php"); ?>
				</div>
			</div>
			<div id="content" class="download">
				<a class="button lightgrey" href="downloads/woopsi-src-0.99.5.zip">Download Woopsi</a>
				<a class="button lightgrey" href="downloads/woopsi-demo-0.99.5.zip">Download DS Demo</a>
				<a class="button lightgrey" href="downloads/woopsi-sdl-xcode-0.99.5.zip">Download OSX Version</a>
			</div>
			<div id="footer">
				<? include("footer.php"); ?>
			</div>
		</div>
	</body>
</html>