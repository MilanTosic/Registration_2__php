<?php

# My message typeing here!

if(!isset($_POST["password"]))
{

	die("Lozinka koju ste uneli ne postoji!");
}

if(!isset($_POST["user_name"]))
{

	die("Korisničko ime koje ste uneli ne postoji!");
}

$user_name = strtolower( $_POST["user_name"]);
$password = strtolower( $_POST["password"]);


if($user_name == "Zika" && $password == "ovojepravasifra84")
{

	echo "Vaše korisničko ime i lozinka je tačna!";
}
else
{
	echo "Podaci koje ste uneli nisu tačni!";

}


?>