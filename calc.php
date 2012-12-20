<?php 
session_start();

if (isset($_REQUEST['a'])) $_SESSION['a'] = $_REQUEST['a'];

@include 'mod/' . $_SESSION['a'] . '.mod.php'; ?>

<html>
	<head>
		<title>The GSI Scientific Calculator &mdash; <?php echo $name; ?></title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
	</head>

	<div id="container">
	<h1>The GSI Scientific Calculator</h1>
	<h2><?php echo $name; ?></h2>

	<body>
		<form method="get" action="calc.php">
		<div id="inout">
		<table>
			<?php
			$n_in = count($in_name);
			$n_out = count($out);

			echo '<div id="in">';
			

			for ($n = 1; $n <= $n_in; $n++)
			{
				if ($in[$n] != '') {$value = $in[in];}
				
				echo '<tr><td><span class="inname">' . $in_name[$n] . '</span></td><td><input type="text" name="in[' . $n .']" value="' . $in[$n] . '"></td><td><span class="unit">' . $in_unit[$n] . '</span></td>'; 
/*				if ($in[$n] != ''){
					echo '<td><span class="unit">' . $in_name[$n] . ' = ' . $in[$n] . '</span></td>';
				} */
			}

			echo '</tr></div>';
			echo '<div id="results">';

			for ($n = 1; $n <= $n_out; $n++)
			{
				echo '<tr><td><span class="outname">' . $out_name[$n] . '</span></td><td class="result"><input type="text" name="out[' . $n .']" value="' . $out[$n] . '" readonly></td><td><span class="unit">' . $out_unit[$n] . '</span></td></tr>';
			} 

			echo '</div>';

			?>
		</table>
	<input type="submit" name="Submit" value="Calculate">
	</form>
	</div>
	<br /><a href="index.php">Back to Menu</a><br />
	<hr />
	<span class="contact">written by Till Dettmering at GSI (<a href="mailto:t.dettmering@gsi.de">contact</a>)</span>
	</div>
	</body>
</html>
