<?php
$output = shell_exec('/usr/local/bin/connectblue');
echo "<pre>$output</pre>";
header('Location: /control.php?success=true');
?>
