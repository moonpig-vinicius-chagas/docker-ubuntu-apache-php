<?php

$cid = getenv('HOSTNAME');
$hid = getenv('HOST_HOSTNAME');
print "Your Client IP address is: " . $_SERVER['REMOTE_ADDR'] . "<br>";
print "My Docker Container ID is: " . $cid . "<br>";
print "My Physical Hostname is: " . $hid . "<br>";

// Loop through $_SERVER and print each value
// foreach($_SERVER as $key_name => $key_value) {
//   print $key_name . " = " . $key_value . "<br>";
// }

?>
