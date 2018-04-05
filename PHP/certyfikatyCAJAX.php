<?php
$nazwa = $_REQUEST["nazwa"];
$id_psa = $_REQUEST["id_psa"];
$poziom = $_REQUEST["poziom"];
$wazny_do = $_REQUEST["wazny_do"];

$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
$wynik = pg_query_params($db, "SELECT ID_Certyfikatu FROM Psy.Uprawnienia WHERE Nazwa= $1 AND Poziom=$2", array($nazwa, $poziom));
$rekord = pg_fetch_row($wynik);
$id_cert = $rekord[0];

$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";
echo "<br/>Próbuję wpisać nową grupę do bazy <br/>";
$result = pg_query_params($db, "INSERT INTO Psy.psy_uprawnienia VALUES ($1, $2, $3)", array($id_cert, $id_psa, $wazny_do));

$err = pg_last_error();
if($err)
{
	echo "Nie udało się wstawić nowego rekordu, sprawdź kompletność i poprawność wprowadzonych danych";
	echo $err;
}
else 
	echo "Dodano nowy rekord!";

echo "<button id='certyfikatyWyslijPowrot' onclick='openCertyfikatyCRUDRefresh(event)'> Powrót </button>";
?>