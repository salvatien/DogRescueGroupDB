<?php
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";

$wynik = pg_query($db, "SELECT * from Psy.Treningi");


echo "Wybierz Trening:<br/>";

echo "<select id='treningiTreningID'>";
while($rekord=pg_fetch_row($wynik))
{
	echo "<option value='$rekord[0]'>$rekord[0], $rekord[1], $rekord[2], $rekord[3], $rekord[4]</option>";
}
echo "</select>";

echo "<button id='szczegolyTreningiTrening' onclick='szczegolyTreningiTrening()'> Wybierz </button>";
?>