<?php
	$variable1 = 100;
	$variable2  = "Text"; 
	$variable3 = TRUE; 
	$variable4 = (bool)$variable1; 
	$variable5 = "100"; 
	
	echo $variable1.$variable2.'<br>';
	
	if ($variable3 === $variable4) {
		echo "The same values and types".'<br>';
	}
	
	if ($variable1 == $variable5) {
		echo "The same values".'<br>';
	}
	
	echo $variable4.' - it is '.gettype($variable4).'<br>';

	$ArrayIndex = array(2, 1, 0);
	$ArrayValues = array(10, 60, 20);
	$FinalArray = array_combine($ArrayIndex, $ArrayValues);
	
	for ($i = 0; $i < 3; $i++){
		echo $FinalArray[$i].' ';
	}
	echo '<br>';
	
	function sq($var)
	{
		$var = $var ** 2;
		echo $var;
	   
	}

	$var = 5;
	sq($var);
	echo "<br>";

	$TwoDimensional = array(
		array(1, 2),
		array(4, 5)
	);

	$determinant = $TwoDimensional[0][0]*$TwoDimensional[1][1] - $TwoDimensional[1][0]*$TwoDimensional[0][1];
	echo $determinant."<br>";
	
	$s = "Glory to Ukraine!";
	$StringArray = explode(" ", $s);

	echo $StringArray[0]."<br>";
	$s2 = implode(" ", $StringArray);

	print $s2."<br>";
	echo "<br>";
	
	include_once "Student.php";
	include_once "Graduates.php";
	include_once "Singleton.php";

	$Vasyl = new Student("Pupkin", "Vasyl", "physic");
	$Misha = new Graduates("Lahoida", "Mykhailo", "math", "11 July");

	echo "Vasyl: ".$Vasyl."<br>";
	echo "<br>"."<br>";
	echo "Date of exam (Misha): ".$Misha->getDates()."<br>";

	echo 'Singleton <br>';
	$s1 = Singleton::getInstance();
    $s2 = Singleton::getInstance();

    $s2->setMyData(200);
    if ($s1 === $s2) {
            echo "Singleton works";
    }
	else {
		echo "Singleton failed";
    }
?>