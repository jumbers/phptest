<html>
 <head>
  <title>PHP-Test</title>
 </head>
 <body>
  <?php 
	echo 'Hello World'; 
	$cmdline = "sudo -u wizbot /bin/bash ;
	
	exec($cmdline, $arrOutput, $errorOutput);
	if ($errorOutput != 0)
		die("Error: $errorOutput<br>");
	echo $arrOutput;
	?>
 </body>
</html>
