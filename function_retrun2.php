<?php

declare(strict_types=1);//artinya disni kita memperkuat suatu function yang kita buat apabila tidak sesuai dengan argumnt maka akan muncul eror


function Deks($a,$b): int{

	
	return $a*$b;
}



var_dump(Deks(10,5.5));//disni kita mengisi argument  $b -> float sedang kan kita telah membuat declare diatas untuk memberikan eror apabila tipe variabel != $b

