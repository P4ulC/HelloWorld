<?php

echo "Hello World...!";

//phpinfo();

echo"<p>start</p><hr><pre>";

$homepage = file_get_contents('http://welcome.com.intraorange/');
echo $homepage;


echo"</pre><hr><p>start</p>";

?>