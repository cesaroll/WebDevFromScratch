<?php include('header.php');?>

<body>
	<div id="header">
		<h1>My Website</h1>
	</div>
	<div id="navigation">
		<ul>
			<li><a href="section1.php">Section 1</a></li>
			<li><a href="section2.php">Section 2</a></li>
			<li><a href="section3.php">Section 3</a></li>
			<li><a href="section4.php">Section 4</a></li>
			<li><a href="#">Coming Soon</a></li>
		</ul>
	</div>
	
	<div id="content">
    
        <?php include('section1.php'); ?>
        <?php include('section2.php'); ?>
        <?php include('section3.php'); ?>
        <?php include('section4.php'); ?>
	
	</div>
	
    <?php include('footer.php'); ?>

</body>

</html>