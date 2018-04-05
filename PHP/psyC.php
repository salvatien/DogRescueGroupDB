<?php
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";

$wynik = pg_query($db, "SELECT ID_Przewodnika, Imie, Nazwisko, Data_Urodzenia from Psy.Przewodnicy");


echo "Wybierz Przewodnika:<br/>";

echo "<select id='ktoryPrzewodnikC'>";
while($rekord=pg_fetch_row($wynik))
{
	echo "<option value='$rekord[0]'>$rekord[0], $rekord[1], $rekord[2]</option>";
}
echo "</select>";

//echo "<button id='szczegolyPiesTreningi' onclick='szczegolyPiesTreningi()'> Wybierz </button>";


echo "<h2>Wpisz dane psa </h2><ul><li>Imie</li><li><input type='text' name='imie' id='psyCImie' /></li><li>Data Urodzenia:</li><li><input type='date' name='data_urodzenia' id='psyCData'></li><li>Rasa</li><li><input type='text' name='rasa' id='psyCRasa' /></li><li>Poziom:</li><li><select id='psyCPoziom'><option value = 'Początkujący' selected> Początkujący </option><option value = 'Średni'> Średni </option><option value = 'Zaawansowany'> Zaawansowany </option></select></li><li>Tryb:</li><li><select id='psyCTryb'><option value = 'Tropiący' selected> Tropiący </option><option value = 'Terenowy'> Terenowy </option><option value = 'Gruzowy'> Gruzowy </option></select></li><li>Uwagi</li><li><input type='text' name='uwagi' id='psyCUwagi' /></li><li><button id='psyWyslijC' onclick='psyWyslijC()'> Wpisz </button></li></ul>";
?>