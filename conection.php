<?php
  $mysqli = new mysqli("localhost","root", "", "pi");
  if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
  ?>