<?php
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "Brak połączenia z bazą";
$result = pg_query($db, "SELECT * FROM Psy.Akcje");
echo "<table>";
echo "<tr><th> ID </th><th> Data </th> <th> Adres </th> <th> Miasto </th><th> Imie poszukiwanego </th> <th> Nazwisko Poszukiwanego </th> <th>Zleceniodawca</th><th> Czy odnaleziono? </th> <th> Ilość psów </th><th> Uwagi </th> </tr>";

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