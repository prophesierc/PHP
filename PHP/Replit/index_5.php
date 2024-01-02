<?php

namespace Mynamespace_test;
	class myclass_test
	{
		public static function main_test()
		{
		return myclass_test::class; // return Mynamespace_test\myclass_test
		}
		
		public static function main_test_2()
		{
		return "test";
		}
		
		public static function main_test_3()
		{
		$x = "5";
		$y = 6;
		echo pi();
		echo "<br>";			
		echo(min(0, 150, 30, 20, -8, -200, 1));  // returns -200
		echo "<br>";
		echo(max(0, 150, 30, 20, -8, -200, 1)); // returns 150
		echo "<br>";
		echo(abs(-6.7));  // returns 6.7
		echo "<br>";
		echo(sqrt(64));  // returns 8
		echo "<br>";
		echo(round(0.60));  // returns 1
		echo "<br>";			
		echo(round(0.49));  // returns 0
		echo "<br>";
		echo(rand(1,100)); // random number between 1 and 100
		echo "<br>";
		define("GREETING", "Welcome"); // CONSTANT GREETING
		echo GREETING;
		echo "<br>";
		define("cars", ["Alfa Romeo", "BMW", "Toyota"]); //Array of CONSTANTS
		echo cars[1];
		echo "<br>";
		echo var_dump($x === $y); // returns false because $x is str and $y is int and are not equal
		echo "<br>";
		}

		public static function math()
		{
			$x = 10;
			echo ++$x; //preincrement x by 1 // returns 11
			echo "<br>";
			$x = 10;
			echo $x++; // postincremet x by 1 / returns 10 // have to echo $x to retrun incremented value
			echo "<br>";
			echo $x; // returns x + 1 = 11
			echo "<br>";
			
			$x = 100;  
			$y = 50;
			if ($x == 100 xor $y == 80) //xor operator returns if x or y is true, but not if both are true. 
			{
			    echo "Hello world!"; // true
			}
			$x = 100;  
			$y = 50;
			if ($x == 100 xor $y == 50) //xor operator returns if x or y is true, but not if both are true. 
			{
			    echo "Hello world!"; // false // does not return any value
			}
			echo "<br>";
			$txt1 = "Hello";
			$txt2 = " There!";
			$txt1 .= $txt2; // append operator
			echo $txt1;
			echo "<br>";

		}

		public static function PHP_Array_Operators()
		{
			$x = array("a" => "red", "b" => "green");  
			$y = array("c" => "blue", "d" => "yellow");  
			print_r($x + $y); // union of $x and $y //The print_r() function is a built-in function in PHP and is used to print or display information stored in a variable
			echo "<br>";
			$x = array("a" => "red", "b" => "green");  
			$y = array("c" => "blue", "d" => "yellow");  
			var_dump($x === $y); // Returns true if $x and $y have the same key/value pairs in the same order and of the same types
			echo "<br>";
			echo "<br>";

			// Ternary Operator
			// if empty($user) = TRUE, set $status = "anonymous" //returns value 1 if True else returns value 2
			echo $status = (empty($user)) ? "anonymous" : "logged in"; // status is non existent, so is True // returns value 1
			echo("<br>");
		
			$user = "John Doe"; // status is non empty, so is False // returns value 2
			// if empty($user) = FALSE, set $status = "logged in"
			echo $status = (empty($user)) ? "anonymous" : "logged in";
			echo "<br>";
			echo "<br>";

			// Null coalescing Operator // fall back value if $variable is null
			
			// variable $user is the value of $_GET['user']
			// and 'anonymous' if it does not exist
			echo $user = $_GET["user"] ?? "anonymous"; // The value of $user is pulled from $_GET["user"] if it exists, and is not NULL else returns second value. // $user is null, so returns "anonymous"
			echo("<br>");
		  
			// variable $color is "red" if $color does not exist or is null
			$color = "green";
			echo $color = $color ?? "red"; // $color exists and is not null, so it returns original value instead of fallback value of "red"
			echo "<br>";
			echo "<br>";			
		}
		public static function date()
		{
			//date function
			echo date("H a T"); // 24 hour format | lower case am/pm | timezone
			echo "<br>";
			echo date("h A"); // 12 hour format with upper case am/pm
			echo "<br>";
			echo date("m/d/Y"); // full current date
			echo "<br>";
			echo date("l"); // day of month verbose
			echo "<br>";
		}
		public static function SwitchStatement()
		{
			$favcolor = "red";
			switch ($favcolor) 
			{
				case "red": // if switch variable = case variable return then break
			    	echo "Your favorite color is red!";
			    	break;
				case "blue": // if switch variable = case variable return then break
				    echo "Your favorite color is blue!";
				    break;
				case "green": // if switch variable = case variable return then break
				    echo "Your favorite color is green!";
				    break;
				default: // if variable doesn't match or null
				    echo "Your favorite color is neither red, blue, nor green!";
			}
			echo "<br>";
		}
		public static function Loops()
		{
			//While 
			$x = 1;
			while($x <= 5) 
			{
				echo "The number is: $x <br>"; // Iterates this statement until x == 5
				$x++; // iterated x by 1 each iteration
			}
			echo "<br>";
			
			//Do // returns once initally even if statement is intially false
			$x = 0;
			do {
			  echo "The number is: $x <br>";
			  $x+=10;
			} while ($x <= 100);
			echo "<br>";

			// For Loops
			// for x starts at 0 and ends at 10; x+1
			for ($x = 0; $x <= 5; $x++) 
			{
 			echo "The number is: $x <br>";
			}
			echo "<br>";

			//The PHP foreach Loop /This is a for loop specifically for Arrays
			$colors = array("red", "green", "blue", "yellow");
			print_r($colors); // prints array verbose
			echo "<br>";			
			echo $colors[1]; // prints index[1] of Array
			echo "<br>";
			foreach ($colors as $value) 
			{
			  echo "$value <br>"; // iterates and prints each array value
			}
			echo "<br>";	

			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // similar to dictionary k=>v pairs
			foreach($age as $x => $val) 
			{
			  echo "$x = $val<br>";
			}
			echo "<br>";

			//PHP Break
			for ($x = 0; $x < 10; $x++)
			{
				if ($x == 4) // if x++ iterates to $x==4 stop before iteration finishes
				{
					break;
				}
				echo "The number is: $x <br>"; // iterates starting at 0 and ends at 3 
			}
			echo "<br>";
			
			for ($x = 0; $x < 6; $x++) // if x++ iterates to $x==4 stop before iteration finishes and restarts after $x==4
			{
			  	if ($x == 4) 
				{
			    	continue;
			   	}
			  	echo "The number is: $x <br>"; // iterates starting at 0 and ends at 6 without displaying 4 
			}
		}
		public static function Lesson_2()
		{
			echo "Lesson_2";
			echo "<br>";
			echo '1' . (print '3') + 4; // (print '3') = '3'1 : print displays 3, but returns 1, so echo '1' . (print '3') returns 31+1 because print displays before echo = 311 => 4 == 315
			echo "<br>";
			$a = 10;
      		$b = 'a';
      		echo $$b;
			echo "<br>";
			//echo phpinfo(); //debugging method that displays all php info
			//echo phpinfo(INFO_GENERAL); // displays page with detailed information about the PHP environment under the "General" section
		}
		public static function Lesson_3()
		{
			echo "Lesson_3";
			echo "<br>";
			$test_var = NULL;
			echo gettype( $test_var ) . "<br />"; // Displays "NULL"
			$test_var = 15;
			echo gettype( $test_var ) . "<br />"; // Displays "integer"
			$test_var = 8.23;
			echo gettype( $test_var ) . "<br />"; // Displays "double"
			$test_var = "Hello, world!";
			echo gettype( $test_var ) . "<br />"; // Displays "string"
			echo var_dump( (bool) 5.8 ); // var_dump( (bool) ) returns true for any non 0 value
			echo "<br>";
			echo 14|3;
			echo "<br>";
			$var=10 & 2;
      		echo $var;
			echo "<br>";
			$a = 6 - 10 % 4;
			echo $a;
			$a=5 < 2;
			echo (gettype($a));
			echo "<br>";
			$sale = 200;
			$sale = $sale- + 1;
			echo $sale;
			echo "<br>";
			$a=12;
	    	$b=11;   
	    	$a>$b ? print($a) : print($b);
			echo "<br>";
			$a=20%-8;
       		echo $a;
			echo "<br>";
		}
		public static function Lesson_4()
		{
			echo "Lesson 4";
			echo "<br>";
			$widgets = 23;
			if ( $widgets == 23 )
				echo "We have exactly 23 widgets in stock!";
			echo "<br>";
			
			$userAction = "open";
			if ( $userAction == "open" )
				{
				   echo "open";
				}
				elseif ( $userAction == "save" )
				{
				   echo "save";
				}
				elseif ( $userAction == "close" )
				{
				   echo "close";
				}
				elseif ( $userAction == "logout" )
				{
				   echo "logout";
				}
				else
				{
				   echo "Please choose an option";
				}
			echo "<br>";
			
			$userAction = "close";
			switch ( $userAction ) // more efficent
				{
					case "open":
						echo "open";
						break;
					case "save":
						echo "save";
						break;
					case "close":
						echo "close";
						break;
					case "logout":
						echo "logout";
						break;
					default:
						echo "Please choose an option";
				 }
			echo "<br>";
			$widgets = 23;
			$plenty = "We have plenty of widgets in stock.";
			$few = "Less than 10 widgets left. Time to order some more!";
			echo ( $widgets >= 10 ) ? $plenty : $few; // if statement1 == True => return first condition else return second
			echo "<br>";

			//DO
			$width = 1;
			$length = 1;
			do
			{
			$width++;
			$length++;
			$area = $width * $length;
			} 
			while ( $area < 1000 );
			echo "The smallest square over 1000 sq ft in area is $width ft x $length ft.";
			echo "<br>";

			$x =25;
		    while($x<10)
		    {
		    	$x--;
		    }
		    echo($x); 
			echo "<br>";

			switch(1) 
			{
		        case 1: echo("Book Details<br />"); 
		        case 2: echo("Book Author<br />"); 
		        default: echo("Missing Book<br />");
		    }
			
			$x=0;
			$i;
		    for($i=0;$i<5;$i++)
		    	{
		    		$x+=$i;
		    	}
		    	print($x);
			echo "<br>";
			echo "<br>";

			$num=5;
			$ctr=$num--;
			if(true || $ctr < 4)
				echo 'if executes '; 
			else
				echo 'else executes ';
				echo 'others';
		}
		//Lesson 5
		public static function Lesson_5()
		{
			$religion = 'Hebrew';
			$myString = <<<'END_TEXT'
			"I am a $religion,' he cries - and then - 'I fear the Lord the God of Heaven who hath made the sea and the dry land!"
			END_TEXT;
			echo "<pre>$myString</pre>";

			$myString = "Hello, world!";
			echo strstr( $myString, "wor" ) . "<br />"; // Displays 'world!'
			echo (strstr( $myString, "xyz" ) ? "Yes": "No"). "<br />"; // Displays 'No'
			echo strstr( $myString, "wor", true ); // Displays 'Hello,'
			echo "<br />";
			if ( strpos( $myString, "Hel" ) === false ) echo "Not found";
			echo "<br />";
			$myString = "Hello, world!";
			$pos = 0;
			while ( ( $pos = strpos( $myString, "l", $pos ) ) !== false )
			{
			     echo "The letter 'l' was found at position: $pos<br/>";
			     $pos++;
			}
			$myString = "I say, nay, nay, and thrice nay!";
			echo substr_count( $myString, "nay" )."<br/>"; // Displays '3'	

			$myString = "Hello, world!";
			echo strpbrk( $myString, "abcdef" ); // Displays 'ello, world!'
			echo strpbrk( $myString, "xyz" ); // Displays '' (false)
			$username = "matt@example.com";
			if ( strpbrk( $username, "@!" ) ) echo "@ and ! are not allowed in usernames";

			$myNumber = 123.45;
			printf( "Binary: %b<br/>", $myNumber );
			printf( "Character: %c<br/>", $myNumber );
			printf( "Decimal: %d<br/>", $myNumber );
			printf( "Scientific: %e<br/>", $myNumber );
			printf( "Float: %f<br/>", $myNumber );
			printf( "Octal: %o<br/>", $myNumber );
			printf( "String: %s<br/>", $myNumber );
			printf( "Hex (lower case): %x<br/>", $myNumber );
			printf( "Hex (upper case): %X<br/>", $myNumber );

			echo "<br>";
			printf( file_get_contents( "template.txt" ));


			$myString = "   What a lot of space!     ";
			echo "<pre>";
			echo "|" . trim( $myString ) . "|\n";  // Displays "|What a lot of space!|"
			echo "|" . ltrim( $myString ) . "|\n"; // Displays "|What a lot of space!    |";
			echo "|" . rtrim( $myString ) . "|\n"; // Displays "|   What a lot of space!|";
			echo "</pre>";

			echo "<br>";
			$milton1 = "1:  The mind is its own place, and in it self\n";
			$milton2 = "2:  Can make a Heav'n of Hell, a Hell of Heav'n.\n";
			$milton3 = "3:  What matter where, if I be still the same,\n";
			echo "<pre>";
			echo ltrim( $milton1, "0..9: " );
			echo ltrim( $milton2, "0..9: " );
			echo ltrim( $milton3, "0..9: " );
			echo "</pre>";

			echo '<pre>"';
			echo str_pad( "Hello, world!", 20 ); // Displays "Hello, world!       "
			echo '"</pre>';

			// Displays "Hello, world!*******"
			echo str_pad( "Hello, world!", 20, "*" ) . "\n"; 
			echo "<br>";
			// Displays "Hello, world!1231231"
			echo str_pad( "Hello, world!", 20, "123" ) . "\n";
			echo "<br>";
			echo str_pad( "Hello, world!", 20, "*", STR_PAD_BOTH ) . "\n";
			echo "<br>";
			echo number_format( 1234567.89, 2, ",", " " ); // Displays "1 234 567,89"

			
			$a = 'somevalue'; 
			$array = array("a" => "One","b" => "Two", "c" => "Three");
			extract($array);
			echo "\$a = $a; \$b = $b; \$c = $c";
			echo "<br>";

			$num=10;
		    $str1="Hello World!!!";
		    $str2 = $str1;
		    $str2 = "how " . "are " . "you?";
		    $str2 = ( $num > 100 ) ? "Big number" : "Small number";
		    echo $str2;
			echo "<br>";
			echo strrchr("Hello world!","world");

			echo "<br>";

		    $str = "abcdabcdabdc"; 
		    echo substr_count($str,"abc");
			echo "<br>";
		}
		// Lesson 6
		public static function Lesson_6()
		{ 	
			// Indexed Array
			$authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens" );
			// Associative Array
			$myBook = array( "title" => "The Grapes of Wrath",
            	"author" => "John Steinbeck",
            	"pubYear" => 1939 );
			
			echo $myBook["author"]; //John Steinbeck
			echo "<br>";
			echo $authors[2]; // Tolkien
			echo "<br>";

			$my_array = array(1 => 'a', 2 => 'b');
      		//echo $my_array;


			$exam_mark = array( 
		      "William" => array
		      (
		      "Literature" => 85,        
		      "Maths" => 80,        
		      "History" => 89        
		      ),
		      "John" => array
                      (
                      "Literature" => 70,
                      "Maths" => 72,
                      "History" => 87
                      ),
                      "Mark" => array
                      (
                      "Literature" => 68,
                      "Maths" => 98,
                      "History" => 78
                      )
           );
	      	 echo $exam_mark['William']['Literature'] . "<br />"; //85

				$a = array(
	            1 => 'php',
	             'Hypertext',
	             'Preprocessor',
	              'widely used' => 
	               array(
					  'general' => 'purpose',
					   'scripting' => 'language',
					   'that' => 'was',
					   'originally' => 
						array(
							   5 => 'designed',
							   9 => 'for',
							   'Web development',
								4 => 'purpose',
					)
			   )
		   );
			print $a['widely used']['originally'][10]; // Web development
			echo "<br>";

			$a = array('a', 'b'); 
			array_push($a, array(1,2)); 
			print_r($a);
			echo "<br>";

			function modifyArray (&$array) 
		   {
			   foreach ($array as &$value)
			   {
					$value = $value + 2; 
			   } 
			   $value = $value + 3; 
			} 
				$array = array (1, 2, 3); 
				modifyArray($array); 
				print_r($array);
				echo "<br>";

				$animal = array
			    (
			    	array("cat", "milk", "gray"),
			        array("dog", "bone", "black"),
			        array("cow", "grass", "white")
			    );
			    echo $animal[2][1];
			echo "<br>";

				$sales = array(
			      30,
			      40,
			      50
			   );
			   
			      list ($a, $b, $c) = $sales;
			      echo $a;
			echo "<br>";
			$users = array ("John", "Maria", "Sharon", "Jason");
      		echo $users[2];
  		}
	// Lesson 7
		public static function Lesson_7()
		{ 
			function fun($num1, $num2) 
			{
    			echo '$num1 = ' . $num1 . '<br />$num2 = ' . $num2 . ' ';

			    if ($num1 < $num2) {
			        return;
			    } else {
			        fun($num1--, ++$num2);
			    }
			}

	fun(3, 2);	
		}
		// Lesson 10
		public static function Lesson_10()
		{ 

		}
	}

namespace container_namespace; //needed if main class has multiple functions
	class container
	{	
		public static function container_function()
		{	
			echo "<br>";
			echo \Mynamespace_test\myclass_test::main_test();
			echo "<br>";
			echo \Mynamespace_test\myclass_test::main_test_2();
			echo "<br>";
			echo \Mynamespace_test\myclass_test::main_test_3();
			echo "<br>";
			echo \Mynamespace_test\myclass_test::math();
			echo "<br>";
			echo \Mynamespace_test\myclass_test::PHP_Array_Operators();
			echo "<br>";
			echo \Mynamespace_test\myclass_test::date();
			echo "<br>";
			echo \Mynamespace_test\myclass_test::SwitchStatement();
			echo "<br>";
			echo \Mynamespace_test\myclass_test::Loops();
			echo "<br>";
			echo \Mynamespace_test\myclass_test::Lesson_2();
			echo "<br>";
			echo \Mynamespace_test\myclass_test::Lesson_3();
			echo "<br>";
			echo \Mynamespace_test\myclass_test::Lesson_4();
			echo "<br>";
			echo \Mynamespace_test\myclass_test::Lesson_5();
			echo "<br>";
			echo \Mynamespace_test\myclass_test::Lesson_6();
			echo "<br>";
			echo \Mynamespace_test\myclass_test::Lesson_7();
			echo "<br>";
			echo \Mynamespace_test\myclass_test::Lesson_10();
			echo "<br>";
		}
	}
return \container_namespace\container::container_function(); // return container function to print both OOP functions
// prints Hello World!

?>