<?php
$imie = $_REQUEST["imie"];
$nazwisko = $_REQUEST["nazwisko"];
$data = $_REQUEST["data"];
$adres = $_REQUEST["adres"];
$miasto = $_REQUEST["miasto"];
$zleceniodawca = $_REQUEST["zleceniodawca"];
$czy_odnaleziono= $_REQUEST["czy_odnaleziono"];
$ile_psow= $_REQUEST["ile_psow"];
$uwagi = $_REQUEST["uwagi"];


if($data == '' || $czy_odnaleziono == '' || $ile_psow == '')
{
	echo "Nie udało się wstawić nowego rekordu, sprawdź kompletność i poprawność wprowadzonych danych";
}

else
{

$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";
echo "<br/>Próbuję wpisać nową akcję do bazy <br/>";
$result = pg_query_params($db, "INSERT INTO Psy.Akcje VALUES (DEFAULT, $1, NULLIF($2, ''), NULLIF($3, ''), NULLIF($4, ''), NULLIF($5, ''), NULLIF($6, ''), $7, $8, NULLIF($9, ''))", array($data, $adres, $miasto, $imie, $nazwisko, $zleceniodawca, $czy_odnaleziono, $ile_psow, $uwagi));

$err = pg_last_error();
if($err)
{
	echo "Nie udało się wstawić nowego rekordu, sprawdź kompletność i poprawność wprowadzonych danych";
	echo $err;
}
else 
	echo "Dodano nowy rekord!";
}
echo "<button id='akcjeWyslijPowrot' onclick='openAkcjeCRUDRefresh(event)'> Powrót </button>";
?>