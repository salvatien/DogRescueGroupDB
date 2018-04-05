<?php
$ile = $_REQUEST["ile"];
$tab = array();
for($var = 97; $var < 97+$ile; $var++)
{
	$str = chr ($var);
	$tab[] = $_REQUEST["$str"];
}



$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";

$wynik = pg_query($db, "SELECT ID_Przewodnika, Imie, Nazwisko, Data_Urodzenia from Psy.Przewodnicy");

$opcje = "<option value='Zostaw' selected> Nie zmieniaj przewodnika </option>";
while($rekord=pg_fetch_row($wynik))
{
		$opcje .= "<option value='$rekord[0]'>$rekord[0], $rekord[1], $rekord[2]</option>";
}
$nazwisko_przewodnika = "<select id='ktoryPrzewodnikUKoniec'>" . $opcje . "</select>";

if (!$db) 
	echo "brak połączenia z bazą";

else {


	if($ile==1)
	{
		$query = pg_query_params($db, "SELECT * FROM Psy.Psy WHERE ID_Psa = $1", array($tab[0]));

		$row = pg_fetch_row($query);
	
		$err = pg_last_error();
		if($err)
			echo "Wystąpił problem, spróbuj jeszcze raz";
		$poziom = "";
		$tryb = "";


		if($row[4] == 'Początkujący')
			$poziom = "<option value = 'Początkujący' selected> Początkujący </option><option value = 'Średni'> Średni </option><option value = 'Zaawansowany'> Zaawansowany </option>";
		else if($row[4] == 'Średni')
			$poziom = "<option value = 'Początkujący'> Początkujący </option><option value = 'Średni' selected> Średni </option><option value = 'Zaawansowany'> Zaawansowany </option>";
		else if($row[4] == 'Zaawansowany')
			$poziom = "<option value = 'Początkujący' > Początkujący </option><option value = 'Średni'> Średni </option><option value = 'Zaawansowany' selected> Zaawansowany </option>";


		if($row[5] == 'Tropiący')
			$tryb = "<option value = 'Tropiący' selected > Tropiący </option><option value = 'Terenowy'> Terenowy </option><option value = 'Gruzowy'> Gruzowy </option>";
		else if($row[5] == 'Terenowy')
			$tryb = "<option value = 'Tropiący'> Tropiący </option><option value = 'Terenowy' selected> Terenowy </option><option value = 'Gruzowy'> Gruzowy </option>";
		else if($row[5] == 'Gruzowy')
			$tryb = "<option value = 'Tropiący'> Tropiący </option><option value = 'Terenowy'> Terenowy </option><option value = 'Gruzowy' selected> Gruzowy </option>";

	
		echo "Wpisz nowe dane - aktualizujesz tylko ten 1 rekord. Zostawiając odpowiednie pole puste, nie zmieniasz tego parametru w rekordzie <br/>";
		echo "<ul><li>Imie</li><li><input type='text' name='imie' id='psyUKoniecImie' value='$row[1]' /></li><li>Data Urodzenia:</li><li><input type='date' name='data_urodzenia' id='psyUKoniecData' value='$row[2]'></li><li>Rasa</li><li><input type='text' name='rasa' id='psyUKoniecRasa' value='$row[3]'/></li><li>Poziom:</li><li><select id='psyUKoniecPoziom'>" . $poziom . "</select></li><li>Tryb:</li><li><select id='psyUKoniecTryb'>" . $tryb . "</select></li><li>Uwagi</li><li><input type='text' name='uwagi' id='psyUKoniecUwagi' value='$row[6]'/></li><li>Nazwisko przewodnika</li><li>" . $nazwisko_przewodnika . "</li><li><button id='psyUKoniecAktualizacja' onclick='openPsyUAktualizacja()'> Aktualizuj </button></li></ul>";
	}
	else
	{
		//PUSTY FORMULARZ
		echo "Wpisz nowe dane - uwaga, aktualizujesz jednocześnie wiele rekordów! Zostawiając odpowiednie pole puste, nie zmieniasz tego parametru w rekordach <br/>";
		$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
		if (!$db) 
			echo "brak połączenia z bazą";

		$wynik1 = pg_query($db, "SELECT ID_Przewodnika, Imie, Nazwisko, Data_Urodzenia from Psy.Przewodnicy");


		echo "Wybierz Przewodnika:<br/>";	

		echo "<select id='ktoryPrzewodnikUKoniec'>";
		echo "<option value = 'Zostaw' selected> Nie zmieniaj przewodnika </option>";
		while($rekord1=pg_fetch_row($wynik1))
		{
			echo "<option value='$rekord1[0]'>$rekord1[0], $rekord1[1], $rekord1[2]</option>";
		}
		echo "</select>";

		echo "<h2>Wpisz dane psa </h2><ul><li>Imie</li><li><input type='text' name='imie' id='psyUKoniecImie' /></li><li>Data Urodzenia:</li><li><input type='date' name='data_urodzenia' id='psyUKoniecData'></li><li>Rasa</li><li><input type='text' name='rasa' id='psyUKoniecRasa' /></li><li>Poziom:</li><li><select id='psyUKoniecPoziom'><option value = 'Początkujący'> Początkujący </option><option value = 'Średni'> Średni </option><option value = 'Zaawansowany'> Zaawansowany </option><option value = 'Zostaw' selected> Zostaw stare wartości</option></select></li><li>Tryb:</li><li><select id='psyUKoniecTryb'><option value = 'Tropiący'> Tropiący </option><option value = 'Terenowy'> Terenowy </option><option value = 'Gruzowy'> Gruzowy </option><option value = 'Zostaw' selected> Zostaw stare wartości</option></select></li><li>Uwagi</li><li><input type='text' name='uwagi' id='psyUKoniecUwagi' /></li><li><button id='psyWyslijUKoniec' onclick='openPsyUAktualizacja()'> Wpisz </button></li></ul>";
	}

$IDs = "" . $tab[0];
	for($var = 1; $var<count($tab); $var++)
	{
		$IDs = $IDs . "," . $tab[$var];
	}
	echo "<input type='text' name='ID' class = 'ukryte' id='psyKolejneUkryteIDU' value='$IDs' readonly />";

}
?>