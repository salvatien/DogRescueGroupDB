<?php
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";

$wynik = pg_query($db, "SELECT ID_Psa, Imie, Rasa from Psy.Psy");


echo "Wybierz Psa:<br/>";

echo "<select id='ktoryPiesDodajCertyfikat'>";
while($rekord=pg_fetch_row($wynik))
{
	echo "<option value='$rekord[0]'>$rekord[0], $rekord[1], $rekord[2]</option>";
}
echo "</select><br/>";
$wynik2 = pg_query($db, "SELECT DISTINCT Nazwa from Psy.Uprawnienia");

echo "Wybierz Certyfikat:<br/>";

echo "<select id='ktoryCertyfikatDodajCertyfikat'>";
while($rekord=pg_fetch_row($wynik2))
{
	echo "<option value='$rekord[0]'>$rekord[0]</option>";
}
echo "</select>";

echo "<ul><li>Poziom <input type= 'number' min = '0' max = '2' name='poziomCertyfikatu' id='certyfikatyDodajPsyPoziom'> </li>";

echo "<li>Ważny Do <input type= 'date' name='certyfikatyWaznyDo' id='certyfikatyCWaznyDo'> </li>";




echo "<li><button id='certyfikatyPsyWyslij' onclick='certyfikatyWyslijC()'> Wyślij </button> </li></ul>";
?>