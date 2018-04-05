<?php
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";

$wynik = pg_query($db, "SELECT ID_Psa, Imie, Rasa from Psy.Psy");


echo "Wybierz Psa:<br/>";

echo "<select id='ktoryPiesDodajSlad'>";
while($rekord=pg_fetch_row($wynik))
{
	echo "<option value='$rekord[0]'>$rekord[1], $rekord[2]</option>";
}
echo "</select><br/>";

$wynik2 = pg_query($db, "SELECT * from Psy.Treningi ORDER BY Termin DESC");

echo "Wybierz Trening:<br/>";

echo "<select id='ktoryTreningDodajTrening'>";
while($rekord=pg_fetch_row($wynik2))
{
	echo "<option value='$rekord[0]'> $rekord[1], $rekord[2], $rekord[3]</option>";
}
echo "</select><br/>";


$wynik3 = pg_query($db, "SELECT * from Psy.Pozoranci");

echo "Wybierz Pozoranta:<br/>";

echo "<select id='ktoryPozorantDodajTrening'>";
while($rekord=pg_fetch_row($wynik3))
{
	echo "<option value='$rekord[0]'>$rekord[1], $rekord[2]</option>";
}
echo "</select>";

echo "<ul><li>Ślad <input type= 'text'  name='treningiDodajSlad' id='treningiSladDodajSlad'> </li>";


echo "<li><button id='treningiDodajSladWyslij' onclick='dodajSladWyslijC(event)'> Wyślij </button> </li></ul>";
?>