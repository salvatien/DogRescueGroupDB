<?php
$q = $_REQUEST["q"];
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";
echo "Dane o przewodniku:";
$result = pg_query_params($db, "SELECT * FROM Psy.Przewodnicy WHERE ID_Przewodnika = $1", array($q));
echo "<table>";
echo "<tr><th> ID </th><th> Imie </th> <th>Nazwisko </th> <th> Data urodzenia </th><th> Adres </th> <th> Miasto </th> <th> Telefon </th> <th> Samochód </th> <th> Kondycja </th> <th> Uwagi </th></tr>";

while ($row=pg_fetch_assoc($result))
{
	echo "<tr><td> $row[id_przewodnika] </td><td> $row[imie] </td> <td>$row[nazwisko]</td> <td>  $row[data_urodzenia]</td><td>  $row[adres] </td> <td>  $row[miasto] </td><td>  $row[telefon] </td> <td> $row[samochod]</td><td>  $row[kondycja]</td> <td>  $row[uwagi] </td></tr>";
}
echo "</table>";
echo "Dane o jego psach:";

$result2 = pg_query_params($db, "SELECT * FROM Psy.Psy WHERE ID_Przewodnika = $1", array($q));
echo "<table>";
echo "<tr><th> ID </th><th> Imie </th> <th> Data urodzenia </th>  <th> Rasa </th> <th> Poziom </th> <th> Tryb Pracy </th> <th> Uwagi </th></tr>";

while ($row2=pg_fetch_assoc($result2))
{
	echo "<tr><td> $row2[id_psa] </td><td> $row2[imie] </td>  <td>  $row2[data_urodzenia]</td>  <td>  $row2[rasa]</td> <td>  $row2[poziom] </td> <td>  $row2[tryb_pracy] </td> <td>  $row2[uwagi] </td></tr>";
}
echo "</table>";


$result3 = pg_query_params($db, "SELECT Nazwa FROM Psy.Rola WHERE ID_Przewodnika = $1", array($q));
	echo "Dane o jego rolach:";
	echo "<table>";
	echo "<tr><th> Rola </th> </tr>";
	if(count($row3) == 0) echo "<tr><td> Brak ról w grupie </td></tr>";
	else while ($row3=pg_fetch_assoc($result3))
	{
		echo "<tr><td> $row3[nazwa] </td></tr>";
	}
	echo "</table>";

?>
