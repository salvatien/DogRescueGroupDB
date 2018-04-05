<?php
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";

$wynik = pg_query($db, "SELECT ID_Psa, Imie, Rasa from Psy.Psy");


echo "Wybierz Psa:<br/>";

echo "<select id='ktoryPiesDodajDoAkcji'>";
while($rekord=pg_fetch_row($wynik))
{
	echo "<option value='$rekord[0]'>$rekord[1], $rekord[2]</option>";
}
echo "</select><br/>";

$wynik2 = pg_query($db, "SELECT * from Psy.Akcje ORDER BY Data DESC");

echo "Wybierz Akcje:<br/>";

echo "<select id='ktoraAkcjaDodajDoAkcji'>";
while($rekord=pg_fetch_row($wynik2))
{
	echo "<option value='$rekord[0]'> $rekord[1], $rekord[2], $rekord[3]</option>";
}
echo "</select><br/>";


echo "<ul><li>Czy ten pies odnalazł osobę poszukiwaną? <input type= 'checkbox'  name='akcjeDodajPsaCzyTenOdnalazl' id='akcjeDodajPsaCzyTenOdnalazl'> </li>";


echo "<li><button id='akcjeDodajPsaWyslij' onclick='akcjeDodajPsaWyslijC(event)'> Wyślij </button> </li></ul>";
?>