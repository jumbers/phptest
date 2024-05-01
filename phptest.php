<?php
echo 'h';
if (!$viewdata) {exit(); } //don't actually bother to load the log if the user didn't yet make a selection
if ($log == "") {exit ("Please specify a type of log"); }
if ($search == "") {exit ("Please specify a search string"); }

$cmdline = "sudo -u wizbot whoami";

exec($cmdline, $arrOutput, $errorOutput);
#echo join("<br>", $arrOutput);
if ($errorOutput != 0)
	die("Error: $errorOutput<br>");


// Format the output 

$totallines = $arrOutput[0];
#echo "I have $lines lines<br/>";
array_shift($arrOutput);
$output = join("\n", $arrOutput);
$output = strip_tags($output);
$output = str_replace("\n", "<br/>", $output);
	
echo "<p>" . $output . "</p>";
	
?> 
