<?php
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "Brak połączenia z bazą";
$result = pg_query($db, "SELECT * FROM Psy.Treningi");
echo "<table>";
echo "<tr><th> ID </th><th> Termin </th> <th> Adres </th> <th> Miasto </th> <th> Uwagi </th> </tr>";

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