<?php
	
	// Constants

	define('TITLE','Arrays');
	// Custom Variables
	date_default_timezone_set('Europe/Bucharest');
	$my_name='David';
	$today=date('d/m/Y');
	$year=date('Y');
	$lesson_number=6;
	
	// Moustache Array
	$moustaches= array('Handelbar',"Salvador Dali", 'Fu Manchu');	
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Lecture <?php $lesson_number ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>Moustache Types</h2>
				<ul>
					<li><?php echo $moustaches[0]; ?></li>
					<li><?php echo $moustaches[1]; ?></li>
					<li><?php echo $moustaches[2]; ?></li>
				</ul>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy; <?php echo $year; print(" "); echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
