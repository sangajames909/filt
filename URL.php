<?php
$url = "";


$url = filter_var($url, FILTER_SANITIZE_URL);


if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}
?>

