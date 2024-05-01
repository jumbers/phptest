<html>
 <head>
  <title>PHP-Test</title>
 </head>
 <body>
  <?php echo '<h1>Hello World!</h1><h3>Welcome to WPMU DEV</h3>'; 
	$cmdline = "sudo -u wizbot /bin/bash /home/wizbot/searchspeciallog.sh $log $search";
	
	exec($cmdline, $arrOutput, $errorOutput);
	if ($errorOutput != 0)
		die("Error: $errorOutput<br>");
	echo $arrOutput;
	?>
 </body>
</html>
