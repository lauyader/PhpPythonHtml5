<?php
$a=exec('sudo python encenderledfrente.py');
echo $a;

header('Location: index.html');
?>
