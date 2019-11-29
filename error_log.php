<?php
$nul = 0;
try {
    throw new Exception();
} catch (Exception $e) {
    print "oeps";
    error_log("error gevonden", 3, "Error-logging-dc6b3b94");
}
?>