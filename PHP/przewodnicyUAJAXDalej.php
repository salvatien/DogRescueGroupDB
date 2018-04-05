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

else {
if($ile==1)
{
$query = pg_query_params($db, "SELECT * FROM Psy.Przewodnicy WHERE ID_Przewodnika = $1", array($tab[0]));
$row = pg_fetch_row($query);
$err = pg_last_error();
if($err)
	echo "Wystąpił problem, spróbuj jeszcze raz";
$if_samochod_checked = "";
if($row[7] == 't')
	$if_samochod_checked = "checked";
//PELNY FORMULARZ
echo "Wpisz nowe dane - aktualizujesz tylko ten 1 rekord <br/>";
echo "<ul><li>Imie</li><li><input type='text' name='imie' id='przewodnicyUKoniecImie' value='$row[1]' /></li><li>Nazwisko</li><li><input type='text' name='nazwisko' id='przewodnicyUKoniecNazwisko' value='$row[2]'/></li><li>Data Urodzenia:</li><li><input type='date' name='data_urodzenia' id='przewodnicyUKoniecData' value='$row[3]'></li><li>Adres</li><li><input type='text' name='adres' id='przewodnicyUKoniecAdres' value='$row[4]'/></li><li>Miasto</li><li><input type='text' name='miasto' id='przewodnicyUKoniecMiasto' value='$row[5]'/></li><li>Telefon</li><li><input type='text' name='telefon' id='przewodnicyUKoniecTelefon' value='$row[6]'/></li><li>Samochód</li><li><input type='checkbox' name='samochod' value='Samochód' id='przewodnicyUKoniecSamochod' $if_samochod_checked ></li><li>Kondycja</li><li><input type='text' name='kondycja' id='przewodnicyUKoniecKondycja' value='$row[8]'/></li><li>Uwagi</li><li><input type='text' name='uwagi' id='przewodnicyUKoniecUwagi' value='$row[9]'/></li><li><button id='przewodnicyUKoniecAktualizacja' onclick='openPrzewodnicyUAktualizacja()'> Aktualizuj </button></li></ul>";
}

else
{
//PUSTY FORMULARZ
echo "Wpisz nowe dane - uwaga, aktualizujesz jednocześnie wiele rekordów! <br/>";
echo "<ul><li>Imie</li><li><input type='text' name='imie' id='przewodnicyUKoniecImie' /></li><li>Nazwisko</li><li><input type='text' name='nazwisko' id='przewodnicyUKoniecNazwisko'</li><li>Data Urodzenia:</li><li><input type='date' name='data_urodzenia' id='przewodnicyUKoniecData'></li><li>Adres</li><li><input type='text' name='adres' id='przewodnicyUKoniecAdres' /></li><li>Miasto</li><li><input type='text' name='miasto' id='przewodnicyUKoniecMiasto'/></li><li>Telefon</li><li><input type='text' name='telefon' id='przewodnicyUKoniecTelefon'/></li><li>Samochód</li><li><input type='checkbox' name='samochod' value='Samochód' id='przewodnicyUKoniecSamochod'></li><li>Kondycja</li><li><input type='text' name='kondycja' id='przewodnicyUKoniecKondycja'/></li><li>Uwagi</li><li><input type='text' name='uwagi' id='przewodnicyUKoniecUwagi' /></li><li><button id='przewodnicyUAktualizacja' onclick='openPrzewodnicyUAktualizacja()'> Aktualizuj </button></li></ul>";


}

$IDs = "" . $tab[0];
	for($var = 1; $var<count($tab); $var++)
	{
		$IDs = $IDs . "," . $tab[$var];
	}
	echo "<input type='text' name='ID' id='kolejneUkryteID' value='$IDs' readonly />";
}
?>