<?php
$errors = " ";

if(empty($_POST['username']) ||
	empty($_POST['password']))
{
	echo "Error:All fields are required";
}
else
{
	header('Location:2.html');
}
?>