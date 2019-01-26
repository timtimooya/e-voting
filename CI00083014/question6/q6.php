<?php
echo date("D j M G:i: Y");

echo cos(10);echo "<br>";
echo ceil(10.6445645);echo "<br>";
echo log(10.6445645);echo "<br>";
echo uniqid();echo "<br>";
echo max(12,13,432,35);echo "<br>";
echo min(12,13,432,35);echo "<br>";
echo hypot(3,4);echo "<br>";
$start_time=microtime(true);
register_shutdown_function('my_shutdown');
function my_shutdown(){
	 global $start_time;
	 echo "execution took: ".
	 (microtime(true) - $start_time).
	 "seconds.";
}
?>
