<?php
$name='UNILAC Pulse Calculation'; //Name of Calculation
$in = $_REQUEST['in']; include 'setfloat.class.php'; //Do not change this.

$in_name[1] = 'Dosis'; $in_unit[1] = 'Gy'; 
$in_name[2] = 'LET'; $in_unit[2] = 'keV/um';
$in_name[3] = 'Eichfaktor'; $in_unit[3] = '1/(P * cm2)';

//Algorithm

$out[1] = $in[1] / ( 1.6E-9 * $in[2] * $in[3] );
$out_name[1] = ''; $out_unit[1] = 'Pulse';

?>
