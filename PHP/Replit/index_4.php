<?php

namespace index_4; // main namespace
	class myclass_4
	{
		public static function main() //OOP function
		{
			echo "Hello";
		}
		
		public static function secondary() //second OOP function
		{
			$name = "Brian";
			
			echo "<br>";
			echo strlen("Hello world!"); //length of string
			echo "<br>";
			echo str_word_count("Hello world!"); // outputs 2			
			echo "<br>";
			echo strrev("Hello world!"); // outputs !dlrow olleH
			echo "<br>";
			echo strpos("Hello world!", "world"); // returns index of second element of tuple; outputs 6
			echo "<br>";
			echo str_replace("world", "{$name}", "Hello world!"); // outputs Hello Brian!
			echo "<br>";
		}
		public static function third() //OOP function
		{
			$x = 5985;
			$y = "test";
			
			if (is_int($x))
			{
				echo var_dump(is_int($x));
			}
			else
			{
				echo "False";
			}

			echo "<br>";
			echo var_dump(is_int($y)); // easier 
			echo "<br>";
			echo PHP_INT_MAX;
			
		}
	}
echo myclass_4::class; // global print outside of function
echo "<br>";


namespace runner; //second namespace

	class class_runner // second class
	{	
		public static function runner() // container function
		{	
			echo "<br>";
			echo \index_4\myclass_4::main(); // print first OOP function
			echo "<br>";
			echo \index_4\myclass_4::secondary(); // print second OOP function
			echo "<br>";
			echo \index_4\myclass_4::third();
		}
	}
return \runner\class_runner::runner(); // return container function to print both OOP functions
?>