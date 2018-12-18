<?php 

 $arr = array('one', 'two', 'three', 'four', 'stop', 'five');
foreach ($arr as $val) {
    if ($val == 'stop') {
        break; 
    }
    echo "$val".PHP_EOL;
}
