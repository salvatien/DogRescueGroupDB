<?php
$imie = $_REQUEST["imie"];
$nazwisko = $_REQUEST["nazwisko"];
$data = $_REQUEST["data"];
$adres = $_REQUEST["adres"];
$miasto = $_REQUEST["miasto"];
$telefon = $_REQUEST["telefon"];
$samochod = $_REQUEST["samochod"];
$kondycja = $_REQUEST["kondycja"];
$uwagi = $_REQUEST["uwagi"];

$tab = array();
if($imie)
{
	$tab[] = "Imie";
	$tab[] = $imie;
}
if($nazwisko)
{
	$tab[] = "Nazwisko";
	$tab[] = $nazwisko;
}
if($data)
{
	$tab[] = "Data_Urodzenia";
	$tab[] = $data;
}
if($adres)
{
	$tab[] = "Adres";
	$tab[] = $adres;
}
if($miasto)
{
	$tab[] = "Miasto";
	$tab[] = $miasto;
}
if($telefon)
{
	$tab[] = "Telefon";
	$tab[] = $telefon;
}
if($samochod==1)
{
	$tab[] = "Samochod";
	$tab[] = "TRUE";
}
else if($samochod==2)
{
	$tab[] = "Samochod";
	$tab[] = "FALSE";
}
if($kondycja)
{
	$tab[] = "Kondycja";
	$tab[] = $kondycja;
}
if($uwagi)
{
	$tab[] = "Uwagi";
	$tab[] = $uwagi;
}
$query = "";
$licznik=1;
if(count($tab) == 0)
	$query = "SELECT * FROM Psy.Przewodnicy";
else 
{
	$query = "SELECT * FROM Psy.Przewodnicy WHERE " .  $tab[0] .  "=" . "'" . $tab[1] . "'";
	for($var = 2; $var<count($tab)-1; $var+=2)
	{
		$query = $query . " AND " . $tab[$var] . "=" . "'" . $tab[$var+1] . "'";
	}	 
}

$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";
echo "<br/> Wyniki pasujące do Twojego zapytania: <br/>";
$result = pg_query($db, $query);
echo pg_last_error();
echo "<table>";
echo "<tr><th> ID </th><th> Imie </th> <th>Nazwisko </th> <th> Data urodzenia </th><th> Adres </th> <th> Miasto </th> <th> Telefon </th> <th> Samochód </th> <th> Kondycja </th> <th> Uwagi </th></tr>";
$tabID=array();
while ($row=pg_fetch_assoc($result))
{
	$tabID[] = $row[id_przewodnika];
	echo "<tr><td> $row[id_przewodnika] </td><td> $row[imie] </td> <td>$row[nazwisko]</td> <td>  $row[data_urodzenia]</td><td>  $row[adres] </td> <td>  $row[miasto] </td><td>  $row[telefon] </td> <td> $row[samochod]</td><td>  $row[kondycja]</td> <td>  $row[uwagi] </td></tr>";
}
echo "</table> <br/>";
if(count($tabID) ==0)
{
	echo "Nie znaleziono pasujących rekordów";
	echo "<button id='przewodnicyUsunPowrotBrak' onclick='openPrzewodnicyCRUD(event)'> Powrót </button>";
}
else
{
	echo "Te rekordy zostaną usunięte, czy na pewno chcesz kontynuować? <br/>";
	echo "<button id='przewodnicyUsunPowrot' onclick='openPrzewodnicyCRUD(event)'> Nie! </button>";
	echo "<button id='przewodnicyUsunDalej' onclick='openPrzewodnicyDDalej(event)'> Tak! </button>";
	$IDs = "" . $tabID[0];
	for($var = 1; $var<count($tabID); $var++)
	{
		$IDs = $IDs . "," . $tabID[$var];
	}
	echo "<input type='text' name='ID' id='ukryteIDD' value=$IDs readonly/>";
}
?>

