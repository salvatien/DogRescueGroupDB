<?php

$ile = $_REQUEST["ile"];
$tabID = array();
for($var = 97; $var < 97+$ile; $var++)
{
	$str = chr ($var);
	$tabID[] = $_REQUEST["$str"];
}

$imie = $_REQUEST["imie"];
$nazwisko = $_REQUEST["nazwisko"];
$data = $_REQUEST["data"];
$adres = $_REQUEST["adres"];
$miasto = $_REQUEST["miasto"];
$telefon = $_REQUEST["telefon"];
$samochod = $_REQUEST["samochod"];
$kondycja = $_REQUEST["kondycja"];
$uwagi = $_REQUEST["uwagi"];

$tab = array();
if($imie)
{
	$tab[] = "Imie";
	$tab[] = $imie;
}
if($nazwisko)
{
	$tab[] = "Nazwisko";
	$tab[] = $nazwisko;
}
if($data)
{
	$tab[] = "Data_Urodzenia";
	$tab[] = $data;
}
if($adres)
{
	$tab[] = "Adres";
	$tab[] = $adres;
}
if($miasto)
{
	$tab[] = "Miasto";
	$tab[] = $miasto;
}
if($telefon)
{
	$tab[] = "Telefon";
	$tab[] = $telefon;
}
$tab[] = "Samochod";
$tab[] = $samochod;

if($kondycja)
{
	$tab[] = "Kondycja";
	$tab[] = $kondycja;
}
if($uwagi)
{
	$tab[] = "Uwagi";
	$tab[] = $uwagi;
}

$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";

else {
	$set = "SET ";
	for($var = 0; $var < count($tab)-3; $var+=2)
		$set = $set . $tab[$var] . "='" . $tab[$var+1] . "', ";
	$set = $set . $tab[$var] . "='" . $tab[$var+1] . "'";
	$query = "UPDATE Psy.Przewodnicy " . $set . " WHERE ID_Przewodnika = " . $tabID[0];
	for($var = 1; $var <$ile; $var++)
		$query = $query . " OR ID_Przewodnika = " . $tabID[$var];
	$result = pg_query($db, $query);
	$err = pg_last_error();
	if($err)
	{
		echo "Nie udało się zaktualizować, sprawdź poprawność danych i spróbuj ponownie";
		echo $err;
	}
	else echo "Zaktualizowano pomyślnie";
}

echo "<button id='przewodnicyUWyswietlPowrot' onclick='openPrzewodnicyCRUDRefresh(event)'> Powrót </button>";
?>