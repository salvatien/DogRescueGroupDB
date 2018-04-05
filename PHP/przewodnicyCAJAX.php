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

if($data == '' || $samochod == '')
{
	echo "Nie udało się wstawić nowego rekordu, sprawdź kompletność i poprawność wprowadzonych danych";
}

else
{

$db = pg_connect("host=pascal.fis.agh.edu.pl port=5432 dbname=u5kleiner user=u5kleiner password=5kleiner");
if (!$db) echo "brak połączenia z bazą";
echo "<br/>Próbuję wpisać nowego przewodnika do bazy <br/>";
$result = pg_query_params($db, "INSERT INTO Psy.Przewodnicy VALUES (DEFAULT, NULLIF($1, ''), NULLIF($2, ''), $3, NULLIF($4, ''), NULLIF($5, ''), NULLIF($6, ''), $7, NULLIF($8, ''), NULLIF($9, ''))", array($imie, $nazwisko, $data, $adres, $miasto, $telefon, $samochod, $kondycja, $uwagi));

$err = pg_last_error();
if($err)
{
	echo "Nie udało się wstawić nowego rekordu, sprawdź kompletność i poprawność wprowadzonych danych";
	echo $err;
}
else 
	echo "Dodano nowy rekord!";
}
echo "<button id='przewodnicyWyslijPowrot' onclick='openPrzewodnicyCRUDRefresh(event)'> Powrót </button>";
?>