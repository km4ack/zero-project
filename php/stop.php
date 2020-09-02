<?php
$output = shell_exec('/usr/local/bin/removeblue');
echo "<pre>$output</pre>";
header('Location: /control.php?success=true');
?>
