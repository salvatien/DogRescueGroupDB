<?php

$ile = $_REQUEST["ile"];
$tabID = array();
for($var = 97; $var < 97+$ile; $var++)
{
	$str = chr ($var);
	$tabID[] = $_REQUEST["$str"];
}


$id_przewodnika = $_REQUEST["id_przewodnika"];
$imie = $_REQUEST["imie"];
$data = $_REQUEST["data"];
$rasa = $_REQUEST["rasa"];
$poziom = $_REQUEST["poziom"];
$tryb = $_REQUEST["tryb"];
$uwagi = $_REQUEST["uwagi"];

$tab = array();
if($id_przewodnika)
{
	$tab[] = "ID_Przewodnika";
	$tab[] = $id_przewodnika;
}
if($imie)
{
	$tab[] = "Imie";
	$tab[] = $imie;
}

if($data)
{
	$tab[] = "Data_Urodzenia";
	$tab[] = $data;
}
if($rasa)
{
	$tab[] = "Rasa";
	$tab[] = $rasa;
}
if($poziom)
{
	$tab[] = "Poziom";
	$tab[] = $poziom;
}
if($tryb)
{
	$tab[] = "Tryb_Pracy";
	$tab[] = $tryb;
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
	$query = "UPDATE Psy.Psy " . $set . " WHERE ID_Psa = " . $tabID[0];
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

echo "<button id='psyUWyswietlPowrot' onclick='openPsyCRUDRefresh(event)'> Powrót </button>";
?>