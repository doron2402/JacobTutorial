<?php
$Site_Title = "Jacob Abern Personal Web Site";


if ( $_GET['p'] != ''){
	$Page = $_GET['p'];
}
else
{
	$Page = 'Home';
}

$title = $_GET['t'];

?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title;?></title>
</head>
<body>
<?php
if($Page == 'Contact')
{
	echo '<h1>Contact Me</h1>';
}
else if($Page == 'About')
{
	echo '<h1>Youre in About!!!</h1>';
}
else if($Page == 'News')	
{
	echo '<h1>News Feed</h1>';
	echo $_GET['a'];
}
else{
	echo '<h1>Youre in HOME!!!</h1>';
}

echo $_GET['a'];
?>
</body>
</html>
