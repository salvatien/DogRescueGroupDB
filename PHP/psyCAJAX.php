<?php
$imie = $_REQUEST["imie"];
$data = $_REQUEST["data"];
$rasa = $_REQUEST["rasa"];
$poziom = $_REQUEST["poziom"];
$tryb = $_REQUEST["tryb"];
$uwagi = $_REQUEST["uwagi"];
$id_przewodnika = $_REQUEST["id_przewodnika"];

echo $imie;
echo $nazwisko;
echo $data;
echo $adres;
echo $miasto;
echo $telefon; 
echo $samochod;
echo $kondycja;
echo $uwagi;

if($data == '')
{
	echo "Nie udało się wstawić nowego rekordu, sprawdź kompletność i poprawność wprowadzonych danych";
}

else
{

$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";
echo "<br/>Próbuję wpisać nowego psa do bazy <br/>";
$result = pg_query_params($db, "INSERT INTO Psy.Psy VALUES (DEFAULT, NULLIF($1, ''), $2,  NULLIF($3, ''), NULLIF($4, ''), NULLIF($5, ''), NULLIF($6, ''), $7)", array($imie, $data, $rasa, $poziom, $tryb, $uwagi, $id_przewodnika));

$err = pg_last_error();
if($err)
{
	echo "Nie udało się wstawić nowego rekordu, sprawdź kompletność i poprawność wprowadzonych danych";
	echo $err;
}
else 
	echo "Dodano nowy rekord!";
}
echo "<button id='psyWyslijPowrot' onclick='openPsyCRUDRefresh(event)'> Powrót </button>";
?>