<?php
$name='Konzentration'; //Name of Calculation
$in = $_REQUEST['in']; include 'setfloat.class.php'; //Do not change this.

$in_name[1] = 'c1'; $in_unit[1] = 'mg/mL';
$in_name[2] = 'V1'; $in_unit[2] = 'mL';
$in_name[3] = 'V2'; $in_unit[3] = 'mL';

//Algorithm

$out[1] = $in[1] * $in[2] / $in[3];
$out_name[1] = 'c2'; $out_unit[1] = 'mg/mL';

?>
