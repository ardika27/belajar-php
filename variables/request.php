<?php
  $_REQUEST['id'] = 0;
  function some_other_method() {
    echo $_REQUEST['id'];
  }
  function some_method() {
    $_REQUEST['id'] = 440;
    some_other_method();
    var_dump($_REQUEST);
  }
?>

