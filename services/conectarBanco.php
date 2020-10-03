<?php
$mysqli = new mysqli("fdb22.awardspace.net","3486769_cadastro","","3486769_cadastro");
//$mysqli = new mysqli("localhost","root","","cadastro");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>