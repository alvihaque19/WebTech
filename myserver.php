<?php

echo "<pre>";print_r($GLOBALS);echo "</pre>";

echo "<br>";

$na = strlen($_POST["firstname"]);
$ln = strlen($_POST["firstname"]);
$dd = strlen($_POST["DOBDay"]);
$dm = strlen($_POST["DOBMonth"]);
$dy = strlen($_POST["DOBYear"]);
$gn = strlen($_POST["gender"]);
$ph = strlen($_POST["phone"]);
$em = strlen($_POST["Email"]);
$ps = strlen($_POST["password"]);
$cs = strlen($_POST["confirm_password"]);
$emm = $_POST["Email"];



if ( $na == 0 || $ln == 0 || $dd == 0|| $dm == 0 || $dy == 0 || $gn == 0 || $ph == 0 || $em == 0 || $ps == 0 || $cs == 0)
{
echo "<b> Empty field </b>";}

echo " <br>";

 if ( $ph != 11)
 {
echo "<b> invalid ph </b>";}

echo " <br>";

if ( $gn == 0)
 {
echo "<b> Gender not selected </b>";}
 	 
echo " <br>";

if ( $ps > 8 && $ps != $cs)
	 {
echo "<b> password wrong </b>";}


$str1 = strpos($emm, '@');
$str2 = strpos($emm, '.');

if ( $str1 == null || $str2 < $str1) 
{
    echo '<b> Invalid Email Address <b>';
}
	


    



	


echo "<br>";
echo $_POST["firstname"];
echo "<br>";
echo $_POST["lastname"];
echo "<br>";
echo $_POST["DOBDay"];
echo "<br>";
echo $_POST["DOBMonth"];
echo "<br>";
echo $_POST["DOBYear"];
echo "<br>";
echo $_POST["gender"];
echo "<br>";
echo $_POST["phone"];
echo "<br>";
echo $_POST["Email"];
echo "<br>";
echo $_POST["password"];
echo "<br>";
echo $_POST["confirm_password"];
echo "<br>";
echo strlen($_POST["lastname"]);
echo "<br>";
echo strpos($_POST["Email"],"@");
echo "<br>";

echo "<br>";
?>