<?php
$name='Carbon Dose'; //Name of Calculation
$in = $_REQUEST['in']; include 'setfloat.class.php'; //Do not change this.

$in_name[1] = 'Fluenz'; $in_unit[1] = 'cm-2';
$in_name[2] = 'LET'; $in_unit[2] = 'keV/um';

//Algorithm

$out[1] = 1.6 * 10E-9 * $in[1] * $in[2];
$out_name[1] = 'Dosis'; $out_unit[1] = 'Gy';

?>
