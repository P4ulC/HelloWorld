<?php

echo "Hello World...!";

phpinfo();

echo"<hr>";

$homepage = file_get_contents('http://welcome.com.intraorange/');
echo $homepage;


?>