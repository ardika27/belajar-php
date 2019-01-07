<?php 
	goto start;

	start: echo 'start';

	working: {
	echo 'working';
    	goto start;
    	echo 'never executed';
}
