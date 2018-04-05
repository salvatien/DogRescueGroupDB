<?php
$id_przewodnika = $_REQUEST["id_przewodnika"];
$imie = $_REQUEST["imie"];
$data = $_REQUEST["data"];
$rasa = $_REQUEST["rasa"];
$poziom = $_REQUEST["poziom"];
$tryb = $_REQUEST["tryb"];
$uwagi = $_REQUEST["uwagi"];

$tab = array();
if($id_przewodnika)
{
	$tab[] = "ID_Przewodnika";
	$tab[] = $id_przewodnika;
}
if($imie)
{
	$tab[] = "ps.Imie";
	$tab[] = $imie;
}

if($data)
{
	$tab[] = "Data_Urodzenia";
	$tab[] = $data;
}
if($rasa)
{
	$tab[] = "Rasa";
	$tab[] = $rasa;
}
if($poziom)
{
	$tab[] = "Poziom";
	$tab[] = $poziom;
}
if($tryb)
{
	$tab[] = "Tryb_Pracy";
	$tab[] = $tryb;
}
if($uwagi)
{
	$tab[] = "Uwagi";
	$tab[] = $uwagi;
}
$query = "";
$licznik=1;
if(count($tab) == 0)
	$query = "SELECT * FROM Psy.Psy";
else 
{
	$query = "SELECT ps.ID_Psa, ps.Imie, ps.Data_Urodzenia, ps.Rasa, ps.Poziom, ps.Tryb_Pracy, ps.Uwagi, pr.Nazwisko FROM Psy.Psy ps JOIN Psy.Przewodnicy pr USING(ID_Przewodnika) WHERE " .  $tab[0] .  "=" . "'" . $tab[1] . "'";
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
echo "<tr><th> Imie </th>  <th> Data urodzenia </th><th> Rasa </th> <th> Poziom </th> <th> Tryb </th> <th> Uwagi </th> <th> Nazwisko Przewodnika </th></tr>";
$tabID=array();
while ($row=pg_fetch_assoc($result))
{
	$tabID[] = $row[id_psa];
	echo "<tr><td> $row[imie] </td> <td>$row[data_urodzenia]</td> <td>  $row[rasa]</td><td>  $row[poziom] </td> <td>  $row[tryb] </td><td>  $row[uwagi] </td> <td> $row[nazwisko]</td></tr>";
}
echo "</table> <br/>";


if(count($tabID) ==0)
{
	echo "Nie znaleziono pasujących rekordów";
	echo "<button id='psyUsunPowrotBrak' onclick='openPsyCRUD(event)'> Powrót </button>";
}
else
{
	echo "Te rekordy zostaną usunięte, czy na pewno chcesz kontynuować? <br/>";
	echo "<button id='psyUsunPowrot' onclick='openPsyCRUD(event)'> Nie! </button>";
	echo "<button id='psyUsunDalej' onclick='openPsyDDalej(event)'> Tak! </button>";
	$IDs = "" . $tabID[0];
	for($var = 1; $var<count($tabID); $var++)
	{
		$IDs = $IDs . "," . $tabID[$var];
	}
	echo "<input type='text' name='ID' class = 'ukryte' id='psyUkryteIDD' value=$IDs readonly/>";
}
?>

