if ($_SERVER['HTTP_X_FORWARDED_FOR'])
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
else
  $ip   = $_SERVER['REMOTE_ADDR'];

$two_letter_country_code=iptocountry($ip);
