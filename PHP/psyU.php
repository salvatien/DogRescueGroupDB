<?php
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";

$wynik = pg_query($db, "SELECT ID_Przewodnika, Imie, Nazwisko, Data_Urodzenia from Psy.Przewodnicy");


echo "Wybierz Przewodnika:<br/>";

echo "<select id='ktoryPrzewodnikU'>";
echo "<option value='0'>Obojętne</option>";
while($rekord=pg_fetch_row($wynik))
{
	echo "<option value='$rekord[0]'>$rekord[0], $rekord[1], $rekord[2]</option>";
}
echo "</select>";

//echo "<button id='szczegolyPiesTreningi' onclick='szczegolyPiesTreningi()'> Wybierz </button>";


echo "<h2>Wpisz dane psa lub psów, aby wyświetlić wszystkie pasujące rekordy. </h2><ul><li>Imie</li><li><input type='text' name='imie' id='psyUImie' /></li><li>Data Urodzenia:</li><li><input type='date' name='data_urodzenia' id='psyUData'></li><li>Rasa</li><li><input type='text' name='rasa' id='psyURasa' /></li><li>Poziom:</li><li><select id='psyUPoziom'><option value = 'Początkujący'> Początkujący </option><option value = 'Średni'> Średni </option><option value = 'Zaawansowany'> Zaawansowany </option><option value = 'Obojętne' selected> Obojętne </option></select></li><li>Tryb:</li><li><select id='psyUTryb'><option value = 'Tropiący'> Tropiący </option><option value = 'Terenowy'> Terenowy </option><option value = 'Gruzowy'> Gruzowy </option><option value = 'Obojętne' selected> Obojętne </option></select></li><li>Uwagi</li><li><input type='text' name='uwagi' id='psyUUwagi' /></li><li><button id='psyWyslijU' onclick='psyWyslijU()'> Szukaj </button></li></ul>";
?>