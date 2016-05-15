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
			<div id = "control">
				<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<table>
						<tr>
							<td>
								<input type="submit" value="ON / OFF" id="button_on_off"/>
							</td>
						</tr>
					</table>
				</form>
			</div>
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				    echo $markdown->text("ON / OFF");
				    exec("echo '5' > /dev/ttyACM0");
				}else{
					echo $markdown->text("NONE");
				}
				?>
		</div>
	</body>
</html>