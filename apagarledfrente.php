<?php
$a=exec('sudo python apagarledfrente.py');
echo $a;
header('Location: index.html');
?>
