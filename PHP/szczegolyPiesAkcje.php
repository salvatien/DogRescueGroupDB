<?php
$q = $_REQUEST["q"];
$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";

$result1 = pg_query_params($db, "SELECT Psy.pies_ile_akcji($1)", array($q));
$wynik=pg_fetch_row($result1);
if($wynik[0]=='' || $wynik[0] == NULL)
	echo "Pies nie brał udziału w żadnych akcjach";
else
{
	echo "Pies brał udział w następującej ilości akcji: " . $wynik[0];
	echo "<br/>";
	$result = pg_query_params($db, "SELECT Psy.wypisz_akcje_psa($1)", array($q));
	echo "<table>";
	echo "<tr><th> ID </th> <th>Imie </th> <th> ID Akcji </th><th> Data </th> <th> Lokacja </th> <th> Miasto </th>  <th> Nazwisko poszukiwanego </th> <th> Czy 	odnaleziono </th> <th> Czy ten pies odnalazł </th></tr>";
	while($rekord=pg_fetch_row($result))
	{	
		$rekord[0] = str_replace("(", "",$rekord[0]);
		$rekord[0] = str_replace(")", "",$rekord[0]);
		$wiersz = explode(",",$rekord[0]);
		echo "<tr>";
		foreach ($wiersz as $value)
			echo "<td>$value</td>";
		echo "</tr>";

	}
	echo "</table>";
}
?>