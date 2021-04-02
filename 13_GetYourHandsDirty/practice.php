<?php
	
	// Constants
		define('TITLE','If,Else,Elseif');
	
	// Custom Variables
		$my_name='David';
		$species='Human';
		$nativeLanguage='Romanian';
		$yearsOnEarth=21;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<?php
					if($species=='Black Rihno'){
						echo "Welcome Black Rihno";

					}elseif ( $species== 'Human' ) {
						echo 'Welcome Human';
					}else{
						echo 'Welcome unknown species';
					} 
				?>
				<h5>Another Exemple:</h5>
				<?php
					if($yearsOnEarth==20){
						echo 'You are 20 years old';
					}elseif($yearsOnEarth<20){
						echo 'You are younger than 20';
					}else{
						echo 'You are older than 20';
					}
				?>
				<h5>Another Exemple:</h5>
				<?php
					if($nativeLanguage=='German'){
						echo'You speak german';
					}elseif($species=='Black Rhino'){
						echo 'Rhinos don t speak german';
					}else{
						echo 'You don t speak german and you aren t a rhino ';
					}
				?>
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
