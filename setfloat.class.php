<?php
// This sets the input type to double (for older PHP versions or shitty servers).

$n_in = count($in);
for ($n = 1; $n <= $n_in; $n++)
{
	settype ( $in[$n], 'double' ); //float?
}

?>