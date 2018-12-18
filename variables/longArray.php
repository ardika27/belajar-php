<?php
    function long_to_GET(){
        /**
        * This function converts info.php/a/1/b/2/c?d=4 TO
        * Array ( [d] => 4 [a] => 1 [b] => 2 [c] => ) 
        **/
        if(isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] != ''){
            //Split it out.
            $tmp = explode('/',$_SERVER['PATH_INFO']);
            //Remove first empty item
            unset($tmp[0]);
            //Loop through and apend it into the $_GET superglobal.
            for($i=1;$i<=count($tmp);$i+=2){ $_GET[$tmp[$i]] = $tmp[$i+1];}
        }
    }
?>
