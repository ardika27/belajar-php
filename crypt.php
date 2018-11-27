<?php
$user_input =  '12345';
$pass = urlencode($user_input);
$pass_crypt = crypt($pass);

if ($pass_crypt == crypt($pass, $pass_crypt) {
  echo "Success! Valid password";
} else {
  echo "Invalid password";
} 
?>
