<?php
class perusahaan 
{
	public static  $namaPerusahaan=' Xtend Indonesia';//properti
	public static function Brand()//method
	 {
		return self::$namaPerusahaan;
	 }

}

class karyawan extends perusahaan
	{
		public static $namakaryawan='Oky ';
		public static function Brand2(){
		 return self::$namakaryawan."dari". parent::$namaPerusahaan;
		 }

}


echo karyawan::brand2();
