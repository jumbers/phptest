<html>
 <head>
  <title>PHP-Test</title>
 </head>
 <body>
	<?php
	$cmdline = "sudo -u wizbot /bin/bash whoami";
	
	exec($cmdline, $arrOutput, $errorOutput);

	if ($errorOutput != 0)
		die("Error: $errorOutput<br>");
	$totallines = $arrOutput[0];
	#echo "I have $lines lines<br/>";
	array_shift($arrOutput);
	$output = join("\n", $arrOutput);
	$output = strip_tags($output);
	$output = str_replace("\n", "<br/>", $output);
		
	echo "<p>" . $output . "</p>";
		
	?>
 </body>
</html>
