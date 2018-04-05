<?php
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "Brak połączenia z bazą";


$result = pg_query($db, "SELECT * FROM Psy.Przewodnicy");
echo "<table>";
echo "<tr><th> ID </th><th> Imie </th> <th>Nazwisko </th> <th> Data urodzenia </th><th> Adres </th> <th> Miasto </th> <th> Telefon </th> <th> Samochód </th> <th> Kondycja </th> <th> Uwagi </th></tr>";

while ($row=pg_fetch_assoc($result))
{
	echo "<tr><td> $row[id_przewodnika] </td><td> $row[imie] </td> <td>$row[nazwisko]</td> <td>  $row[data_urodzenia]</td><td>  $row[adres] </td> <td>  $row[miasto] </td><td>  $row[telefon] </td> <td> $row[samochod]</td><td>  $row[kondycja]</td> <td>  $row[uwagi] </td></tr>";
}
echo "</table>";

?>