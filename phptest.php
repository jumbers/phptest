<html>
 <head>
  <title>PHP-Test</title>
 </head>
 <body>
	<?php
	$log == "1";
	$search == "Money+Trades";
	$cmdline = "sudo -u wizbot /bin/bash /home/wizbot/searchspeciallog.sh $log $search";
	
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
