<?php
$q = $_REQUEST["q"];
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";


$result = pg_query_params($db, "SELECT Psy.wypisz_trening_psa($1)", array($q));

echo "<table>";
echo "<tr><th> ID </th> <th>Imie </th> <th> ID Treningu </th><th> Termin </th> <th> Lokacja </th> <th> Miasto </th>  <th> Uwagi </th> <th> Imie pozoranta </th> <th>Nazwisko pozoranta </th> <th> Ślad </th></tr>";
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