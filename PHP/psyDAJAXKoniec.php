<?php

$ile = $_REQUEST["ile"];
$tabID = array();
for($var = 97; $var < 97+$ile; $var++)
{
	$str = chr ($var);
	$tabID[] = $_REQUEST["$str"];
}
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";

else {
	$query = "DELETE FROM Psy.Psy WHERE ID_Psa = " . $tabID[0];
	for($var = 1; $var <$ile; $var++)
		$query = $query . " OR ID_Psa = " . $tabID[$var];
	$result = pg_query($db, $query);
	$err = pg_last_error();
	if($err)
	{
		echo "Nie udało się usunąć";
		echo $err;
	}
	else echo "Zaktualizowano pomyślnie";
}

echo "<button id='psyDWyswietlPowrot' onclick='openPsyCRUDRefresh(event)'> Powrót </button>";
?>