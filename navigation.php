<?php
$navLinks = array(
	0 => array(0 => "docs/index.html", 1 => "Documentation"),
	1 => array(0 => "screenshots.php", 1 => "Screenshots"),
	2 => array(0 => "http://bitbucket.org/ant512/woopsi", 1 => "Source"),
	3 => array(0 => "http://simianzombie.com", 1 => "Blog")
);
?>
					<ul>
<?php
foreach ($navLinks as $link) {
	echo "						<li><a href=\"$link[0]\">$link[1]</a></li>\n";
}
?>
					</ul>