<?php

$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";


$wynik = pg_query($db, "select Psy.najskuteczniejsze_psy()");
echo "<table>";
echo "<tr><th>Imie</th><th>Ilość odnalezień</th></tr>";
while($rekord=pg_fetch_row($wynik))
{	
	$rekord[0] = str_replace("(", "",$rekord[0]);
	$rekord[0] = str_replace(")", "",$rekord[0]);
	$wiersz = explode(",",$rekord[0]);
	$wynikImie = pg_query_params($db, "SELECT Imie FROM Psy.Psy WHERE ID_PSA = $1", array($wiersz[0]));
	$rekordImie=pg_fetch_row($wynikImie);
	$wiersz[0] = $rekordImie[0];
	echo "<tr>";
	foreach ($wiersz as $value)
		echo "<td>$value</td>";
	echo "</tr>";

}
echo "</table>";
?>
