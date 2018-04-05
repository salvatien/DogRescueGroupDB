<?php
$nazwa = $_REQUEST["nazwa"];
$nazwisko = $_REQUEST["nazwisko"];
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";


$result = pg_query_params($db, "SELECT Psy.szczegoly_innej_grupy($1, $2)", array($nazwa, $nazwisko));

echo "<table>";
echo "<tr><th> ID </th> <th>Nazwa </th> <th> Liczebność </th><th> Imie szefa </th> <th> Nazwisko szefa </th> <th> Telefon szefa </th>  </tr>";
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