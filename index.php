<?php
error_log("UUIS:25:15 Envio de mensajes al log --  Iniciando ejercicios");
print "Hello, World! php version is " . PHP_VERSION . "Ya no hay error matematico: \n";
$a=10/10;
error_log("UUIS:25:15 Envio de al log --  El valor de la operacion es: ".$a);
echo $a;  
echo "<br />";
echo "El valor de la variable que llega desde el config map es: ".$_ENV["MENSAJE"]["MSG"] . "--- \n ". $_ENV["MENSAJE"] . " ----\n ". $_ENV["SUMMARY"] ; 
error_log("UUIS:25:15 Envio de mensajes al log --  Finaliza el ejercicio ");

?>
