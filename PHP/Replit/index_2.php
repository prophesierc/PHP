<?php
namespace mynamespace;

	class myclass
	{
		function fun()
		{
			echo "Hello";
		}
	}
echo myclass::class;
echo "<br>";




namespace mynamespace_2;

	class myclass_2
	{
		public static function func() // function onyl meant to == false
		{
			return false; // func() == False
		}

		public static function checkFunc() // function only meant to be contained by func()
		{
			if (empty(self::func())) // if self.func() does not exist or == false // requires self::func() when referencing a different function in this class
			{
				return "False value returned.<br />"; // func() == false, so this will return
			}
			if (empty(true)) // if func() == true (It's not), it will return this
			{
				return "True.<br />";
			}
		}
	}
use mynamespace_2\myclass_2; // use this class from this namespace
echo myclass_2::checkFunc(); // return this class.returning function();


?>