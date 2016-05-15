<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/global_style.css">
		<title>
			Raspberry PI 2
		</title>
	</head>

	<body>
		<div id="global_content">
			<?php
				require_once "utils/markdown/Parsedown.php";

				include "header.php";

				$markdown = new Parsedown();
				$text = file_get_contents("md_files/README.md");
				echo $markdown->text($text);
			?>
		</div>
		
	</body>
</html>