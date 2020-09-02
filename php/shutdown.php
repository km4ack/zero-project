<br><br>

<?php
echo "<h1>Shutting Down</h1>";
sleep(10);
$output = shell_exec('/usr/local/bin/killpi');
echo "<pre>$output</pre>";
header('Location: /control.php?success=true');
?>
