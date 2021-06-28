<?php

echo '<h2>Hospedando seu projeto PHP no Heroku</h2>';

mysqli_connect("host", "user", "password", "db") or die(mysqli_error());

echo "Connected to MySQL<br />";

phpinfo();

?>