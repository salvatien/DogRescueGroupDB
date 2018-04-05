<?php
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "Brak połączenia z bazą";
$result = pg_query($db, "SELECT * FROM Psy.Inne_Grupy");
echo "<table>";
echo "<tr><th> ID </th><th> Nazwa </th> <th> Liczebność </th><th> Imie Szefa </th> <th> Nazwisko Szefa </th> <th> Telefon szefa </th>  </tr>";

while ($row=pg_fetch_row($result))
{
	echo "<tr>";
	foreach ($row as $value) 
	{
    		echo "<td> $value </td>";
	}
	echo "</tr>";
}
echo "</table>";

?>