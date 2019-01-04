<?php
function myfunc() {
        print "Tick";   
}
register_tick_function("myfunc");
declare(ticks=1) {
   echo 'foo!bar';
}
function myfunc2(){
	print "Bacot";
}

declare(ticks=2){
	echo 'thompson';
}
