<?php
// declare constant
define("PI", 3.14);
	
  // get the radius from the textfields
	$radius = $_POST['radius'];

	// calculate the area
	$diameter = $radius ** 2;
  $area = $diameter * PI;
  $circumference = $radius * PI * 2;
?>
<?php echo "<h3>Results:</h3>
  The area of the circle is " . round($area, 2) . 
  "<br>The circumference of the circle is " . round($circumference, 2) 
  ?>