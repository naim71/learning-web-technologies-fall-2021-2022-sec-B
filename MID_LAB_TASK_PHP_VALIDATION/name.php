<?php


if (isset($_POST['submit'])) {
//checking name
if(empty($_POST['full_name']))
$msg_name = "You must supply your name";
$name_subject = $_POST['full_name'];
$name_pattern = '/^[a-zA-Z ]*$/';
preg_match($name_pattern, $name_subject, $name_matches);
if(!$name_matches[0])
$msg2_name = "Only alphabets and white space allowed";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="get"> 
		<fieldset>
			<legend>Name</legend>
		Name:<input type="text" name="myname" value=""><br>
		<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html>