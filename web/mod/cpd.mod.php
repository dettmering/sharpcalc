<?php
$name='Cumulative Population Doublings'; //Name of Calculation
$in = $_REQUEST['in']; include 'setfloat.class.php'; //Do not change this.

$in_name[1] = 'N0'; $in_unit[1] = 'Zellen';
$in_name[2] = 'N'; $in_unit[2] = 'Zellen';
$in_name[3] = 'AE'; $in_unit[3] = '';
$in_name[4] = 'CPD alt'; $in_unit[4] = '';

//Algorithm

$out[1] = $in[4] + (log($in[2]/($in[1]*$in[3])) / log(2));

$formula = '\textrm{CPD}_{\textit{new}}= \textrm{CPD}_{\textit{old}} + \frac{\ln\frac{N}{N_0 \times \textit{AE}}}{\ln 2}';
$out_name[1] = 'CPD neu'; $out_unit[1] = '';

?>
