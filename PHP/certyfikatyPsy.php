<?php
echo "<h2> Podaj nazwę certyfikatu oraz minimalny poziom, na jakim ma go mieć zdany pies </h2>";
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";

$wynik = pg_query($db, "SELECT DISTINCT Nazwa from Psy.Uprawnienia");

echo "Wybierz Certyfikat:<br/>";

echo "<select id='ktoryCertyfikatCertyfikaty'>";
while($rekord=pg_fetch_row($wynik))
{
	echo "<option value='$rekord[0]'>$rekord[0]</option>";
}
echo "</select>";
echo "<ul><li>Poziom <input type= 'number' min = '0' max = '2' name='poziomCertyfikatu' id='certyfikatyPsyPoziom'> </li><li><button id='certyfikatyPsyWyslij' onclick='szczegolyCertyfikatyPsy(event)'> Wyślij </button> </li></ul>";
?>