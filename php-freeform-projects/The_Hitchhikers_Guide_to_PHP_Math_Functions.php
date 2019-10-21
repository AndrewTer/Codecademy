<?php
$initial = '555';

$a = octdec($initial);
echo "1: $a\n";

$b = deg2rad($a);
echo "2: $b\n";

$c = cos($b);
echo "3: $c\n";

$d = round($c, 3);
echo "4: $d\n";

$e = log($d);
echo "5: $e\n";

$f = abs($e);
echo "6: $f\n";

$g = acos($f);
echo "7: $g\n";

$h = rad2deg($g);
echo "8: $h\n";

$i = floor($h);
echo "9: $i\n";

$j = $i - 47;
echo "10: $j\n";
?>
