<!DOCTYPE HTML>
<html>
	<head>
		<title>Woopsi - Home</title>
		<link rel="stylesheet" type="text/css" href="styles/cssreset.css">
		<link rel="stylesheet" type="text/css" href="styles/layout.css">
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"></meta>
		<script src="javascript/jquery-1.4.2.min.js"></script>
		<script>
			var news = "21/07/2011: Version 1.3 released!";

			$(document).ready(function() {
				if (news != "") {
					$('#container').before($('<div class="news" style="display: none">' + news + '</div>'));
					$('.news').slideDown('slow');
				}
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
				<a class="button lightgrey" href="https://bitbucket.org/ant512/woopsi/downloads/woopsi-nds-1.3.zip">Download Woopsi</a>
				<a class="button lightgrey" href="https://bitbucket.org/ant512/woopsi/downloads/woopsi-demo-1.3.zip">Download DS Demo</a>
				<a class="button lightgrey" href="https://bitbucket.org/ant512/woopsisdlxcode/downloads/woopsi-osx1.3.zip">Download OSX Version</a>
			</div>
			<div id="footer">
				<? include("footer.php"); ?>
			</div>
		</div>
	</body>
</html>