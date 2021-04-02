<?php
	
	// Constants
	define('TITLE','Comparison operators');
	
	// Custom Variables
	$my_name='David';
	$lesson_num=14;
	$yearsOnEarth = 25.32;
	$favoriteStringNum = "1";
	$birthCountry = 'Romania';

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
			
			<h1>Tutorial <?php echo $lesson_num ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Equal <code>==</code></h3>
				<?php
					if($yearsOnEarth==25.32)
					{
						echo "<p> Your age is equal to $yearsOnEarth </p>";
					}
				?>
				
				<h3>Identical <code>===</code></h3>
				<?php
					if($favoriteStringNum==1){
						echo 'Your fav number is int';
					}elseif($favoriteStringNum=='1'){
						echo 'Your fav number is string';
					}else{
						echo 'Your fav number is not 1 int or 1 string';
					}
				?>
				
				<h3>Not Equal <code>!=</code></h3>
				<?php
					if($birthCountry!='Mexico')
					{
						echo 'You are not from Mexico';
					}
				?>
				
				<h3>Not Identical <code>!==</code></h3>
				<?php
					if($yearsOnEarth!=='25'){
						echo "<p>You are not exactly the string '$yearsOnEarth'</p>"; 

					}else{
						echo "<p>You are not the string '$yearsOnEarth'</p>";
					}
				?>
				
				<h3>Less Than <code>&lt;</code></h3>
				<?php
					if($lesson_num<15){
						echo 'This is not lesson 15';
					}
				?>
				
				<h3>Greater Than <code>&gt;</code></h3>
				<?php
					if($lesson_num>10)
					{
						echo 'You are past lesson 10';
					}
				?>
				
				<h3>Less Than or Equal To <code>&lt;=</code></h3>
				<?php
					if($lesson_num<=14){
						echo "$lesson_num <= 14";
					}
				?>
				
				<h3>Greater Than or Equal To <code>&gt;=</code></h3>
				<?php
					if($lesson_num>=14){
                    echo "$lesson_num >= 14";
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
