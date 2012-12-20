<?php
$name='Addition zweier Zahlen'; //Name of Calculation
$in = $_REQUEST['in']; include 'setfloat.class.php'; //Do not change this.

$in_name[1] = 'A'; $in_unit[1] = 'Einheit';
$in_name[2] = 'B'; $in_unit[2] = 'Einheit';

//Algorithm

$out[1] = $in[1] + $in[2];
$formula = 'A + B = C';

$out_name[1] = 'C'; $out_unit[1] = 'Einheit';

?>