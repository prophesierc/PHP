 <?php
	function odd(){
      for($i=1; $i<=50; $i=$i+2)
      {
          echo "$i<br />";
      }
  }
	echo "The last value of the variable \$i: $i";
	echo "<br>";
	echo "<br>";

	$num1 = 2; 
    $num2 = 3;
    $res = ($num1++ * ++$num2);
    echo $res;

	echo "<br>";
	echo "<br>";
	echo (int) "A456"; 
    echo (int) "678A";
	echo "<br>";
	echo "<br>";
//
	for($i=0;$i<5;$i++)
	    {
	        if(++$i >=1)
	        {
	            while($i<3)
	            {
	                echo $i;
	                $i++;
	            }
	        }
	        else
	        {
	            for(;$i<4;$i++)
	            {
	                echo $i;
	            }
	        }
	    }
	echo "<br>";
	echo "<br>";
	$num = -321;
	$newnum = abs( $num );
	echo $newnum;
	echo "<br>";
	echo "<br>";
	$num=5;
    for($i=2;$i<=5;$i++)
    {
        if ($num <=$i)
         {
            echo $num--;
         }
         elseif ($num >=$i)
         {
            echo $num++;
         }
    }
	echo "<br>";
	echo "<br>";

	for ($i=0;$i<10;$i++)
    {
        if ($i>3)
        {
            continue;
        }
        else
        {
            break;
        }
    }
    echo $i;

	echo "<br>";
	echo "<br>";
	$num = 5;
    $num = $num-- + 1;
    echo 'The value of $num is '.$num;

	echo "<br>";
	echo "<br>";
	//$num = -123test;
    $newnum = abs( $num );
	print $newnum;
?>