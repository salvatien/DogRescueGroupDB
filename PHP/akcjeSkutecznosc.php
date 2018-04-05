<?php

$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";


$wynik = pg_query($db, "select Psy.procent_udanych_akcji()");

$rekord=pg_fetch_row($wynik);

echo "<h2> Procentowa skuteczność grupy w odnajdywaniu zaginionych osób wynosi " . $rekord[0] . " procent </h2>";
?>
