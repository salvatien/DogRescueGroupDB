<?php
$nazwa = $_REQUEST["nazwa"];
$liczebnosc = $_REQUEST["liczebnosc"];
$imie = $_REQUEST["imie"];
$nazwisko = $_REQUEST["nazwisko"];
$telefon = $_REQUEST["telefon"];

if($liczebnosc=='')
	$liczebnosc=0;

$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";
echo "<br/>Próbuję wpisać nową grupę do bazy <br/>";
$result = pg_query_params($db, "INSERT INTO Psy.Inne_Grupy VALUES (DEFAULT, NULLIF($1, ''), $2 , NULLIF($3, ''), NULLIF($4, ''), NULLIF($5, ''))", array($nazwa, $liczebnosc, $imie, $nazwisko, $telefon));

$err = pg_last_error();
if($err)
{
	echo "Nie udało się wstawić nowego rekordu, sprawdź kompletność i poprawność wprowadzonych danych";
	echo $err;
}
else 
	echo "Dodano nowy rekord!";

echo "<button id='grupyWyslijPowrot' onclick='openGrupyCRUDRefresh(event)'> Powrót </button>";
?>