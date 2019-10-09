<?php
print "Hello, World! php version is " . PHP_VERSION . "Error matematico: \n";
$a=10/10;
echo $a;  
echo "<br />";
echo "El valor de la variable que llega desde el config map es: ".$_ENV["MENSAJE"]["MSG"] . "--- \n ". $_ENV["MENSAJE=MSG"] . " ----\n ". $_ENV["SUMMARY"] ; 
?>
