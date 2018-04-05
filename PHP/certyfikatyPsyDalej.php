<?php
$nazwa = $_REQUEST["nazwa"];
$poziom = $_REQUEST["poziom"];
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";


$result = pg_query_params($db, "SELECT Psy.wypisz_psy_z_certyfikatem($1, $2)", array($nazwa, $poziom));

echo "<table>";
echo "<tr><th> ID Psa </th> <th> Imie Psa </th> <th> ID Certyfikatu </th> <th>Nazwa </th> <th> Poziom </th><th> Ważny Do </th>  </tr>";
while($rekord=pg_fetch_row($result))
{	
	$rekord[0] = str_replace("(", "",$rekord[0]);
	$rekord[0] = str_replace(")", "",$rekord[0]);
	$wiersz = explode(",",$rekord[0]);
	echo "<tr>";
	foreach ($wiersz as $value)
		echo "<td>$value</td>";
	echo "</tr>";
}
echo "</table>";
?>