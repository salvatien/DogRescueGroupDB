<?php
$imie = $_REQUEST["imie"];
$nazwisko = $_REQUEST["nazwisko"];
$data = $_REQUEST["data"];
$adres = $_REQUEST["adres"];
$telefon = $_REQUEST["telefon"];
$kondycja = $_REQUEST["kondycja"];

if($data == '')
{
	echo "Nie udało się wstawić nowego rekordu, sprawdź kompletność i poprawność wprowadzonych danych";
}

else
{

$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";
echo "<br/>Próbuję wpisać nowego pozoranta do bazy <br/>";
$result = pg_query_params($db, "INSERT INTO Psy.Pozoranci VALUES (DEFAULT, NULLIF($1, ''), NULLIF($2, ''), $3, NULLIF($4, ''), NULLIF($5, ''), NULLIF($6, ''))", array($imie, $nazwisko, $data, $adres, $telefon, $kondycja));

$err = pg_last_error();
if($err)
{
	echo "Nie udało się wstawić nowego rekordu, sprawdź kompletność i poprawność wprowadzonych danych";
	echo $err;
}
else 
	echo "Dodano nowy rekord!";
}
echo "<button id='pozoranciWyslijPowrot' onclick='openPozoranciCRUDRefresh(event)'> Powrót </button>";
?>