<?php
class foo
{
    function do_foo($val,$next,$int)
    {
	$valu = $val;
        echo "Doing foo.$val $next $int"; 
    }
}

$bar = new foo;
$bar->do_foo("Tommorow","@",10);
?>
