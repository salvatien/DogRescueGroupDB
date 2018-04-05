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
	$query = "SELECT ps.Imie, ps.Data_Urodzenia, ps.Rasa, ps.Poziom, ps.Tryb_Pracy, ps.Uwagi, pr.Nazwisko FROM Psy.Psy ps JOIN Psy.Przewodnicy pr USING(ID_Przewodnika) WHERE " .  $tab[0] .  "=" . "'" . $tab[1] . "'";
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

while ($row=pg_fetch_assoc($result))
{
	echo "<tr><td> $row[imie] </td> <td>$row[data_urodzenia]</td> <td>  $row[rasa]</td><td>  $row[poziom] </td> <td>  $row[tryb] </td><td>  $row[uwagi] </td> <td> $row[nazwisko]</td></tr>";
}
echo "</table>";
echo "<button id='psyWyswietlPowrot' onclick='openPsyCRUD(event)'> Powrót </button>";
?>