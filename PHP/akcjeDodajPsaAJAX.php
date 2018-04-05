<?php
$id_akcji = $_REQUEST["akcja"];
$id_psa = $_REQUEST["pies"];
$czy_ten_odnalazl = $_REQUEST["czy_ten_odnalazl"];

$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");

if (!$db) echo "brak połączenia z bazą";
echo "<br/>Próbuję dopisać psa do akcji <br/>";
$result = pg_query_params($db, "INSERT INTO Psy.psy_akcje VALUES ($1, $2, $3)", array($id_psa, $id_akcji, $czy_ten_odnalazl));

$err = pg_last_error();
if($err)
{
	echo "Nie udało się wstawić nowego rekordu, sprawdź kompletność i poprawność wprowadzonych danych";
	echo $err;
}
else 
	echo "Dodano nowy rekord!";

echo "<button id='akcjeDodajPsaWyslijPowrot' onclick='openAkcjeCRUDRefresh(event)'> Powrót </button>";
?>