<?php 
echo 'test';
$cmdline2 = "whoami";
exec($cmdline2, $arrOutput, $errorOutput);
$cmdline3 = "sudo -u wizbot /bin/bash whoami";
exec($cmdline3, $arrOutput, $errorOutput);
?> 
