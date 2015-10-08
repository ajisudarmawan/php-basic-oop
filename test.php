<?php
/*
 * STRUKTUR class
 *
 *nama file : test.php
 * sumber : http://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762
 * 
 * 
 * Sintaks untuk menciptakan class cukup sederhana: 
 * mendeklarasikan sebuah class yang menggunakan kata kunci kelas, 
 * diikuti oleh nama class dan satu set kurung kurawal ({}):
 */

class  MyClass
{
	// Class properties and method go here
}

/*
 * Setelah membuat class, class baru dapat dipakai 
 * dan disimpan dalam variabel dengan menggunakan kata kunci new :
 */

$obj = new MyClass();

/*
 * Untuk melihat isi dari kelas, gunakan var_dump ():
 */

var_dump($obj);

/*
 * hasil keluaran :
 * object(MyClass)#1 (0) { }
 */
 ?>
