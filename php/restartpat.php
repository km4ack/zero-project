<?php
$output = shell_exec('/usr/local/bin/restartpat');
echo "<pre>$output</pre>";
header('Location: /control.php?success=true');
?>
