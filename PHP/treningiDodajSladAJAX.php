<?php
$id_tren = $_REQUEST["trening"];
$id_psa = $_REQUEST["pies"];
$id_poz = $_REQUEST["pozorant"];
$slad = $_REQUEST["slad"];

$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");

if (!$db) echo "brak połączenia z bazą";
echo "<br/>Próbuję wpisać nowy ślad do bazy <br/>";
$result = pg_query_params($db, "INSERT INTO Psy.Trening_Psa VALUES ($1, $2, $3, $4)", array($id_psa, $id_tren, $slad, $id_poz));

$err = pg_last_error();
if($err)
{
	echo "Nie udało się wstawić nowego rekordu (śladu), sprawdź kompletność i poprawność wprowadzonych danych";
}
else 
{
	echo "Dodano nowy rekord!";
	$result2 = pg_query_params($db, "INSERT INTO Psy.treningi_pozoranci VALUES ($1, $2)", array($id_poz, $id_tren));
	$err2 = pg_last_error();
	if($err2)
	{
		echo "Udało się wstawić ślad, ale nie udało się wstawić nowego rekordu - pozoranta";
	}
	else 
	{
		echo "Dodano nowy rekord!";
	}
}

echo "<button id='treningiDodajSladWyslijPowrot' onclick='openTreningiCRUDRefresh(event)'> Powrót </button>";
?>