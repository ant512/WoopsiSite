<?
function ListThumbnails($directory, $scale) {

	if ($handle = opendir($directory)) {
		while (false !== ($file = readdir($handle))) {
			if ($file == '.') continue;
			if ($file == '..') continue;
			
	        echo "<img src=\"thumbnail.php?name=$directory$file&scale=$scale\">";
	    }
	
	    closedir($handle);
	} else {
		echo "Cannot open directory $directory";
	}
}
?>

<html>
	<head>
		<title>Woopsi - Screenshots</title>
		<link rel="stylesheet" type="text/css" href="styles/cssreset.css">
		<link rel="stylesheet" type="text/css" href="styles/layout.css">
	</head>

	<body>
		<div id="container">
			<div id="top">
				<div id="header">
					<a href="http://woopsi.org"><img src="img/logo.png"></a>
					<? include("navigation.php"); ?>
				</div>
			</div>
			<div id="content" class="screenshots">
				<?
					ListThumbnails("img/screenshots/", 100);
				?>
			</div>
			<div id="footer">
				<? include("footer.php"); ?>
			</div>
		</div>
	</body>
</html>