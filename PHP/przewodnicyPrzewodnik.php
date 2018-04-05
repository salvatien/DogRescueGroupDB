<?php
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";

$wynik = pg_query($db, "SELECT ID_Przewodnika, Imie, Nazwisko from Psy.Przewodnicy");


echo "Wybierz Przewodnika:<br/>";

echo "<select id='ktoryPrzewodnik'>";
while($rekord=pg_fetch_row($wynik))
{
	echo "<option value='$rekord[0]'>$rekord[0], $rekord[1], $rekord[2]</option>";
}
echo "</select>";

echo "<button id='szczegolyPrzewodnika' onclick='szczegolyPrzewodnik()'> Wybierz </button>";
?>