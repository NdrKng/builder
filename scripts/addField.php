<?php

session_start();  // start session

include 'functions.php';

$type = $_POST['field'];
$fieldNumber = fieldNumber();
$properties = array('fieldName'=>'field ' . $fieldNumber, 'fieldType'=>$type);

if($type == "text")
{
	$properties = array('fieldName'=>'field ' . $fieldNumber, 'fieldType'=>$type, 'blubergub'=>'Fluber');
}
if($type == "statictext")
{

}
if($type == "numeric")
{

}
if($type == "photo")
{

}
if($type == "optionlist")
{

}
if($type == "yesnona")
{

}

$_SESSION['form']['pages'][$_SESSION['selectedPage']]['sections'][$_SESSION['selectedSection']]['fields']['field' . $fieldNumber] = $properties;

header("Location:../index.php");

?>

);
