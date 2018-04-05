<?php
$start = $_REQUEST["start"];
$stop = $_REQUEST["stop"];
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";

$result1 = pg_query_params($db, "SELECT Psy.wypisz_akcje_z_okresu($1, $2)", array($start, $stop));
$wynik=pg_fetch_row($result1);
if($wynik[0]=='' || $wynik[0] == NULL)
	echo "Nie znaleziono akcji w zadanym zakresie dat";
else
{

echo "<table>";
echo "<tr><th> ID </th><th> Data </th> <th> Adres </th> <th> Miasto </th><th> Imie poszukiwanego </th> <th> Nazwisko Poszukiwanego </th> <th>Zleceniodawca</th><th> Czy odnaleziono? </th> <th> Ilość psów </th><th> Uwagi </th> </tr>";

$result = pg_query_params($db, "SELECT Psy.wypisz_akcje_z_okresu($1, $2)", array($start, $stop));
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

}
?>