<html>
 <head>
  <title>PHP-Test</title>
 </head>
 <body>
  <?php 
	echo 'Hello World'; 
	$cmdline = "sudo -u wizbot /bin/bash whoami";
	
	exec($cmdline, $arrOutput, $errorOutput);
	if ($errorOutput != 0)
	{
		die("Error: $errorOutput");
	}
	echo $arrOutput;
	?>
 </body>
</html>
