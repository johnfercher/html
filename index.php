<html>
	<head>
		<title>
			Raspberry PI 2
		</title>
	</head>

	<body>
		<?php
			require_once "utils/markdown/Parsedown.php";

			$markdown = new Parsedown();
			$text = file_get_contents("md_files/README.md");
			echo $markdown->text($text);
		?>
	</body>
</html>