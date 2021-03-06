<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>The GSI Scientific Calculator</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
	</head>
	<body>
	<div id="container">
		<h1>The GSI Scientific Calculator</h1>
		<div id="links">
		<?php
		$real_path = realpath ( './mod/' );
		$dir_handle = opendir($real_path); 
		
		while ($file = readdir($dir_handle)) 
		{ 		
  	  			if(substr($file,-7,-4) == 'mod')
				{	
					$prefix=substr($file, 0, -8);
					@include('mod/' . $file);
			
					echo '<a class="link" href="calc.php?a=' . $prefix . '">' . $name . '</a><br />';
				}
		}
	
		closedir($dir_handle); 
		?>
		</div>
		<hr />
		<span class="contact">written by Till Dettmering at GSI (<a href="mailto:tilldettmering@gmail.com">contact</a>). <a href="https://github.com/dettmering/sharpcalc/">Fork on GitHub!</a></span>
		</div>
	</body>
</html>
  
