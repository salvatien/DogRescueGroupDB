<?php
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "Brak połączenia z bazą";
$result = pg_query($db, "SELECT Psy.Psy.ID_Psa, Psy.Psy.Imie, Psy.Psy.Data_Urodzenia,Psy.Psy.Rasa, Psy.Psy.Poziom, Psy.Psy.Tryb_Pracy, Psy.Psy.Uwagi, Psy.Przewodnicy.Nazwisko FROM Psy.Psy INNER JOIN Psy.Przewodnicy ON Psy.Psy.ID_Przewodnika=Psy.Przewodnicy.ID_Przewodnika");
echo "<table>";
echo "<tr><th> ID </th><th> Imie </th> <th> Data urodzenia </th>  <th> Rasa </th> <th> Poziom </th> <th> Tryb Pracy </th> <th> Uwagi </th> <th> Nazwisko Przewodnika </th> </tr>";

while ($row=pg_fetch_assoc($result))
{
	echo "<tr><td> $row[id_psa] </td><td> $row[imie] </td>  <td>  $row[data_urodzenia]</td>  <td>  $row[rasa]</td> <td>  $row[poziom] </td> <td>  $row[tryb_pracy] </td> <td>  $row[uwagi] </td> <td>  $row[nazwisko] </td></tr>";
}
echo "</table>";

?>