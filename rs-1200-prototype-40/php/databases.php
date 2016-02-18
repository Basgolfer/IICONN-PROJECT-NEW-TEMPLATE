<?php 
//1. Create a database connection
$dbhost = "nurrocks.site.nfoservers.com";
$dbuser = "nurrocks";
$dbpass = "sviaD8cCVs";
$dbname = "nurrocks_iiconn";
$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(mysqli_connect_errno())
{
	die("Database connection failed: " .
			mysqli_connect_error() .
			" (" . mysqli_connect_errno(). ")"
			);
}
?>

<?php 
//2. Perform database query
$query = "SELECT * FROM `Employee Table`";
$result = mysqli_query($connection, $query);
//Test if there was a quiry error
if(!$result){
	die("Datebase query failed.");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>
	<ul>
	<?php 
	//3. User returned data (if any)
	while($subject = mysqli_fetch_assoc($result))	{
		//output date from each row
		?>
		
		<li>
		
		
		<pre><?php print_r($subject); ?></pre>
		
		</li>
	
		<?php 
	}
	
	
	?>
	</ul>
<?php 
//4. Release returned data
mysqli_free_result($result);
?>

	
	

	</body>
</html>
<?php 
// 5. Close database conenction
mysqli_close($connection);

?>