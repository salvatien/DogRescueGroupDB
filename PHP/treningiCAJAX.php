<?php
$data = $_REQUEST["data"];
$adres = $_REQUEST["adres"];
$miasto = $_REQUEST["miasto"];
$uwagi = $_REQUEST["uwagi"];


if($data == '')
{
	echo "Nie udało się wstawić nowego rekordu, sprawdź kompletność i poprawność wprowadzonych danych";
}

else
{

$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";
echo "<br/>Próbuję wpisać nowy trening do bazy <br/>";
$result = pg_query_params($db, "INSERT INTO Psy.Treningi VALUES (DEFAULT, $1, NULLIF($2, ''), NULLIF($3, ''), NULLIF($4, ''))", array($data, $adres, $miasto, $uwagi));

$err = pg_last_error();
if($err)
{
	echo "Nie udało się wstawić nowego rekordu, sprawdź kompletność i poprawność wprowadzonych danych";
	echo $err;
}
else 
	echo "Dodano nowy rekord!";
}
echo "<button id='treningiWyslijPowrot' onclick='openTreningiCRUDRefresh(event)'> Powrót </button>";
?>