<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
	  <p>Hello HTML<p>
    <?php
	// function function_name(range(start), range(end), counter)
	// Generators use less memory than arrays
    function Odd_generator($val1, $val2, $counter = 1)
    {
        //for(iterable i in (range(start), iterable i in range(end), iterable i + counter = i + 1 each iterable))
		for($i = $val1; $i <= $val2; $i += $counter)
        {
			//return iterable i
			yield $i;
        }
    }
	echo "Odd Numbers: ";
	// for each iteration of function func(range(start) = 1, range(end) = 7, counter increment = 2) as num
    foreach(Odd_generator(1, 7, 2) as $num)
    {
		//print num with break line
		echo "$num ";
    }
	echo "<br>";
	$name = strtoupper("Brian");	
	$age = 25;
	$height = "short";
	echo "My name is {$name}";
	echo "<br>";
	echo "My age is {$age}";
	echo "<br>";		
	echo substr($height, 1, 2);
	echo "<br>";		
	echo ["Rose", "Lotus", "Marigold", "Sunflower"][2]."<br>";
	
	foreach(range(1,9) as $num) // for each loop range() as var{echo variable} // slower than generator
	{
		echo $num;
	}
	echo "<br>";

	$x = "5985"; 
	var_dump($x); // determines variable data type
	print("<br>"); // slower than echo

	// Finally
	function fun($var)
    {
        if (!$var) // if $var == false
        {
            throw new Exception('Arithmetic exception: Divide by zero...'); // throw exception if $var == false
        }
        return 1/$var; // creates division by zero error if $var = 0
    }
    try
    {
        echo fun(0) . "<br />"; // $var = 0 which makes function fun == false and throws new exception
    }
    catch (Exception $ex) // if function fun == false and new Exception is caught adds $ex to new Exception prior 
    {
        echo 'Exception caught: ',  $ex->getMessage(), "<br />";
    }
    finally // will run regardless of try or Exception
    {
        echo "Finally block executed!!!<br />";
    }

	// New Password Hashing API
	echo password_hash("uCertify", PASSWORD_DEFAULT)."<br />"; //idk where this goes?? Instructions unclear... stuck in toaster
	echo "<br>";


	//array and string literal dereferencing
	echo "for God's sake"[6];
    echo "<br />";
    echo ["Apple", "Boy", "Cat", "Dog"][1];
	echo "<br />";

	include("index_2.php");
	echo "<br />";
	include("index_3.php");
	echo "<br />";

	//Support for the list() construct by a foreach loop
	$val = [ [20, 30], [35, 45] ]; // multidimensional array made of 2 one - dimensional arrays
    foreach($val as list($num1, $num2)) // converts multidimensional array into list // $num1 and $num2 = list 1 and list 2
    {
        echo "First: $num1; Second: $num2<br />";
    }

	echo "<br />";
	include("index_4.php");
	echo "<br />";
	include("index_5.php");
	echo "<br>";

	define("GREET", "Welcome to W3Schools.com!");
	function myTest()
	{
	  echo GREET;
	}
	 
	myTest(); // classical function 
	include("index_6.php");
	echo "<br>";
	echo "<br>";
	include("index_7.php");
	echo "<br>";
	echo "<br>";
	include("index_8.php");
	echo "<br>";
	echo "<br>";
	include("index_9.php");
	echo "<br>";
	echo "<br>";
	include("index_10.php");
	echo "<br>";
	echo "<br>";

 ?>
  </body>
</html>