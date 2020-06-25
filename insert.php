<html>
<head>
	<title>inserting</title>
	<link rel="stylesheet" href="css/log.css">
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {

	$image = $_FILES['image']['tmp_name'];
	$iname = $_FILES['image']['name'];

	$dest = 'C:\xampp\htdocs\challenge\gallery\ '.$iname;
	move_uploaded_file($image,$dest);
		//insert data to database
		$result = mysqli_query($mysqli, "INSERT INTO img(image) VALUES('$iname')");

		//display success message
		/*echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";*/
		header('location:index.php');

}
?>
</body>
</html>
