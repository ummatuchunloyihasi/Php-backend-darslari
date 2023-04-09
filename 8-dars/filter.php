
<?php
// $d = filter_list();
// print_r($d);

// $str = "<h1>Hello World!</h1>";
// echo $str;

// $newstr = filter_var($str, FILTER_SANITIZE_STRING);
// echo $newstr;

$ip = "127.0.0.167";


if (filter_var($ip, FILTER_VALIDATE_IP)) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}

?>
