<!DOCTYPE html>
 <head>
  <title>Baza grupy tropiącej</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="cache-control" content="no-cache, must-revalidate, post-check=0, pre-check=0" />
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />
  <link rel = "stylesheet" href = "../style.css">

</head>
<body>
<h2>Witaj w bazie danych!</h2>
<div id="divContainer">
<nav class = "tab">
  <button  id = "przewodnicyButton" class = "tabButtons" style = "background-color : green;" onclick="openPrzewodnicy(event)">Przewodnicy</button>
  <button  id = "psyButton" class = "tabButtons" onclick="openPsy(event)">Psy</button>
  <button id = "inneGrupyButton"  class = "tabButtons" onclick="openGrupy(event)">Inne grupy</button>
  <button  id = "treningiButton" class = "tabButtons" onclick="openTreningi(event)">Treningi</button>
  <button  id = "akcjeButton" class = "tabButtons" onclick="openAkcje(event)">Akcje</button>
  <button id = "pozoranciButton"  class = "tabButtons" onclick="openPozoranci(event)">Pozoranci</button>
  <button id = "certyfikatyButton"  class = "tabButtons" onclick="openCertyfikaty(event)">Certyfikaty</button>
</nav>
</div>

<div class = "tabdivs" id = "przewodnicy">


<nav class = "tab">
<button  id = "przewodnicy1" class = "tabButtonsPrzewodnicy" style = "background-color : green;" onclick="openPrzewodnicy(event)">Wyświetl wszystkich</button>
<button  id = "przewodnicy2" class = "tabButtonsPrzewodnicy" onclick="openPrzewodnicyAuta(event)">Posiadający samochody</button>
<button  id = "przewodnicy3" class = "tabButtonsPrzewodnicy" onclick = "openPrzewodnicyRole(event)">Role</button>
<button  id = "przewodnicy4" class = "tabButtonsPrzewodnicy" onclick = "openPrzewodnik(event)" >Wybrany Przewodnik</button>
<button  id = "przewodnicy5" class = "tabButtonsPrzewodnicy" onclick = "openPrzewodnicyCRUD(event)" >Edytuj dane</button>

</nav>
</div>


<div class = "tabdivs" id = "psy" >
<nav class = "tab">
<button  id = "psy1" class = "tabButtonsPsy" style = "background-color : green;" onclick="openPsy(event)">Wyświetl wszystkie</button>
<button  id = "psy2" class = "tabButtonsPsy" onclick="openPsyPoziomy(event)">Wyświetl statystykę poziomów psów niepoczątkujących</button>
<button  id = "psy3" class = "tabButtonsPsy" onclick = "openPsyCertyfikaty(event)">Wyświetl ważne certyfikaty psa</button>
<button  id = "psy4" class = "tabButtonsPsy" onclick = "openPsyAkcjePsa(event)" >Akcje z udziałem psa</button>
<button  id = "psy5" class = "tabButtonsPsy" onclick = "openPsyTreningiPsa(event)" >Treningi z udziałem psa</button>
<button  id = "psy6" class = "tabButtonsPsy" onclick = "openPsySkuteczne(event)" >Najskuteczniejsze na akcjach</button>
<button  id = "psy7" class = "tabButtonsPsy" onclick = "openPsyCRUD(event)" >Edytuj dane</button>
</nav>

</div>





<div class = "tabdivs" id = "inneGrupy" >  

<nav class = "tab">
<button  id = "innegrupy1" class = "tabButtonsInneGrupy" style = "background-color : green;" onclick="openGrupy(event)">Wyświetl wszystkie</button>
<button  id = "innegrupy2" class = "tabButtonsInneGrupy" onclick="openGrupyGrupa(event)">Wyświetl szczegóły konkretnej grupy</button>
<button  id = "innegrupy3" class = "tabButtonsInneGrupy" onclick = "grupyDodaj(event)">Dodaj nową grupę</button>

</nav>
</div>

<div class = "tabdivs" id = "treningi" >  

<nav class = "tab">
<button  id = "treningi1" class = "tabButtonsTreningi" style = "background-color : green;" onclick="openTreningi(event)">Wyświetl wszystkie</button>
<button  id = "treningi2" class = "tabButtonsTreningi" onclick="openTreningiDaty(event)">Wyświetl treningi z okresu</button>
<button  id = "treningi3" class = "tabButtonsTreningi" onclick = "openTreningiTrening(event)">Wyświetl szczegóły wybranego treningu</button>
<button  id = "treningi4" class = "tabButtonsTreningi" onclick = "openTreningiDodaj(event)" >Dodaj trening</button>
<button  id = "treningi5" class = "tabButtonsTreningi" onclick = "openTreningiDodajSlad(event)" >Dodaj ślad do treningu</button>
</nav>

</div>



<div class = "tabdivs" id = "akcje" > 
<nav class = "tab">
<button  id = "akcje1" class = "tabButtonsAkcje" style = "background-color : green;" onclick="openAkcje(event)">Wyświetl wszystkie</button>
<button  id = "akcje2" class = "tabButtonsAkcje" onclick="openAkcjeDaty(event)">Wyświetl akcje z okresu</button>
<button  id = "akcje3" class = "tabButtonsAkcje" onclick = "openAkcjeSkutecznosc(event)">Wyświetl skuteczność grupy na akcjach</button>
<button  id = "akcje4" class = "tabButtonsAkcje" onclick = "openAkcjeDodaj(event)" >Dodaj akcję</button>
<button  id = "akcje5" class = "tabButtonsAkcje" onclick = "akcjeDodajPsa(event)" >Dodaj psa do akcji</button>

</nav>
 </div>


<div class = "tabdivs" id = "pozoranci" >

<nav class = "tab">
<button  id = "pozoranci1" class = "tabButtonsPozoranci" style = "background-color : green;" onclick="openPozoranci(event)">Wyświetl wszystkich</button>
<button  id = "pozoranci2" class = "tabButtonsPozoranci" onclick="openPozoranciAktywny(event)">Najaktywniejszy pozorant</button>
<button  id = "pozoranci3" class = "tabButtonsPozoranci" onclick = "pozoranciDodaj(event)">Dodaj nowego pozoranta</button>

</nav>
</div>

<div class = "tabdivs" id = "certyfikaty" >  
  <nav class = "tab">
<button  id = "certyfikaty1" class = "tabButtonsCertyfikaty" style = "background-color : green;" onclick="openCertyfikaty(event)">Wyświetl wszystkie</button>
<button  id = "certyfikaty2" class = "tabButtonsCertyfikaty" onclick="openCertyfikatyPsy(event)">Wypisz psy z danym certyfikatem</button>
<button  id = "certyfikaty3" class = "tabButtonsCertyfikaty" onclick = "certyfikatyDodajPsu(event)">Dodaj psu nowy certyfikat</button>
</nav>
</div>


<div id = "show"> </div>

<script>
document.getElementById("show").innerHTML = '<?php include "przewodnicyMain.php";?>';

function wyczyscDivyITaby()
{
    var x = document.getElementsByClassName("tabButtons");
    var i;
    for (i = 0; i < x.length; i++)
        x[i].style.backgroundColor = "black";
    var y = document.getElementsByClassName("tabdivs");
    var j;
    for (j = 0; j < y.length; j++)
        y[j].style.display = "none";
}

function wyczyscWewnetrzneTaby(nazwa)
{
    var x = document.getElementsByClassName(nazwa);
    var i;
    for (i = 0; i < x.length; i++)
        x[i].style.backgroundColor = "black";

}
/////////////////////////ZAKŁADKI////////////////////////////////////////////////////
function openPrzewodnicy(evt) {
    wyczyscDivyITaby();
     wyczyscWewnetrzneTaby("tabButtonsPrzewodnicy");
    przewodnicy.style.display = "block";
    document.getElementById("przewodnicyButton").style.backgroundColor = 'green';
    document.getElementById("przewodnicy1").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = '<?php include "przewodnicyMain.php";?>';
}
function openPsy(evt) {
    var psy = document.getElementById("psy");
    wyczyscDivyITaby();
    wyczyscWewnetrzneTaby("tabButtonsPsy");
    psy.style.display = "block";
    document.getElementById("psyButton").style.backgroundColor = 'green';
    document.getElementById("psy1").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = '<?php include "psyMain.php";?>';
}

function openGrupy(evt) {
    var inneGrupy = document.getElementById("inneGrupy");
    wyczyscDivyITaby();
    wyczyscWewnetrzneTaby("tabButtonsInneGrupy");
    inneGrupy.style.display = "block";
    document.getElementById("inneGrupyButton").style.backgroundColor = 'green'
    document.getElementById("innegrupy1").style.backgroundColor = 'green';;
    document.getElementById("show").innerHTML = '<?php include "inneGrupyMain.php";?>';
}

function openTreningi(evt) {
    var treningi = document.getElementById("treningi");
    wyczyscDivyITaby();
    wyczyscWewnetrzneTaby("tabButtonsTreningi");
    treningi.style.display = "block";
    document.getElementById("treningiButton").style.backgroundColor = 'green';
    document.getElementById("treningi1").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = '<?php include "treningiMain.php";?>';
}
function openAkcje(evt) {
    var akcje = document.getElementById("akcje");
    wyczyscDivyITaby();
    akcje.style.display = "block";
    wyczyscWewnetrzneTaby("tabButtonsAkcje");
    document.getElementById("akcjeButton").style.backgroundColor = 'green';
    document.getElementById("akcje1").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = '<?php include "akcjeMain.php";?>';
}

function openPozoranci(evt) {
    var pozoranci = document.getElementById("pozoranci");
    wyczyscDivyITaby();
    pozoranci.style.display = "block";
    wyczyscWewnetrzneTaby("tabButtonsPozoranci");
    document.getElementById("pozoranciButton").style.backgroundColor = 'green';
    document.getElementById("pozoranci1").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = '<?php include "pozoranciMain.php";?>';
}

function openCertyfikaty(evt) {
    var certyfikaty = document.getElementById("certyfikaty");
    wyczyscDivyITaby();
    certyfikaty.style.display = "block";
    wyczyscWewnetrzneTaby("tabButtonsCertyfikaty");
    document.getElementById("certyfikatyButton").style.backgroundColor = 'green';
    document.getElementById("certyfikaty1").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = '<?php include "certyfikatyMain.php";?>';
}
////////////////////////////PRZEWODNICY RAPORTY///////////////////////////////////////
function openPrzewodnicyAuta(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPrzewodnicy");
    document.getElementById("przewodnicy2").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = '<?php include "przewodnicyAuta.php";?>';
}

function openPrzewodnicyRole(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPrzewodnicy");
    document.getElementById("przewodnicy3").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = '<?php include "przewodnicyRole.php";?>';
}

function openPrzewodnik(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPrzewodnicy");
    document.getElementById("przewodnicy4").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'przewodnicyPrzewodnik.php';?>";
}

function szczegolyPrzewodnik()
{	
	var przewod = document.getElementById('ktoryPrzewodnik').value;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "szczegolyPrzewodnik.php?q="+przewod, true);
  	xhttp.send();   
}


////////////////////////////////////////PRZEWODNICY CRUD////////////////////////////////////////

function openPrzewodnicyCRUD(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPrzewodnicy");
    document.getElementById("przewodnicy5").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'przewodnicyCRUD.php';?>";
}

function openPrzewodnicyCRUDRefresh(evt) {
    location.reload(true);
    location.assign(index.php);
    openPrzewodnicyCRUD(evt);
}

/////////////////////////////////////////////CREATE///////////////////////////////////////////////

function openPrzewodnicyC(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPrzewodnicyCRUD");
    document.getElementById("przewodnicyC").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML =  "<?php include 'przewodnicyC.php';?>";
}


function przewodnicyWyslijC() {
	var imie = document.getElementById('przewodnicyCImie').value;
	var nazwisko = document.getElementById('przewodnicyCNazwisko').value;	
	var data = document.getElementById('przewodnicyCData').value;
	var adres = document.getElementById('przewodnicyCAdres').value;
	var miasto = document.getElementById('przewodnicyCMiasto').value;
	var telefon = document.getElementById('przewodnicyCTelefon').value;
	var samochod = document.getElementById('przewodnicyCSamochod').checked;
	var kondycja = document.getElementById('przewodnicyCKondycja').value;
	var uwagi = document.getElementById('przewodnicyCUwagi').value;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "przewodnicyCAJAX.php?imie="+imie+"&nazwisko="+nazwisko+"&data="+data+"&adres="+adres+"&miasto="+miasto+"&telefon="+telefon+"&samochod="+samochod+"&kondycja="+kondycja+"&uwagi="+uwagi, true);
  	xhttp.send(); 
}

///////////////////////////////////////////////////////READ////////////////////////////////////////////////////////////////////////////
function openPrzewodnicyR(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPrzewodnicyCRUD");
    document.getElementById("przewodnicyR").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML =  "<?php include 'przewodnicyR.php';?>";
}

function przewodnicyWyslijR() {
	var imie = document.getElementById('przewodnicyRImie').value;
	var nazwisko = document.getElementById('przewodnicyRNazwisko').value;	
	var data = document.getElementById('przewodnicyRData').value;
	var adres = document.getElementById('przewodnicyRAdres').value;
	var miasto = document.getElementById('przewodnicyRMiasto').value;
	var telefon = document.getElementById('przewodnicyRTelefon').value;
	var samochod = document.getElementById('przewodnicyRSamochod').value;
	var kondycja = document.getElementById('przewodnicyRKondycja').value;
	var uwagi = document.getElementById('przewodnicyRUwagi').value;
	var tab = [];
	var counter = 0;
	if(imie != "" && imie != null)
	{
		tab[counter] = "imie";
		counter++;
		tab[counter] = imie;
		counter++;
	}
	if(nazwisko != "" && nazwisko != null)
	{
		tab[counter] = "nazwisko";
		counter++;
		tab[counter] = nazwisko;
		counter++;
	}
	if(data != "" && data != null)
	{
		tab[counter] = "data";
		counter++;
		tab[counter] = data;
		counter++;
	}
	if(adres != "" && adres != null)
	{
		tab[counter] = "adres";
		counter++;
		tab[counter] = adres;
		counter++;
	}
	if(miasto != "" && miasto != null)
	{
		tab[counter] = "miasto";
		counter++;
		tab[counter] = miasto;
		counter++;
	}
	if(telefon != "" && telefon != null)
	{
		tab[counter] = "telefon";
		counter++;
		tab[counter] = telefon;
		counter++;
	}
	tab[counter] = "samochod";
	counter++;
	tab[counter] = samochod;
	counter++;	
	
	if(kondycja != "" && kondycja != null)
	{
		tab[counter] = "kondycja";
		counter++;
		tab[counter] = kondycja;
		counter++;
	}
	if(uwagi != "" && uwagi != null)
	{
		tab[counter] = "uwagi";
		counter++;
		tab[counter] = uwagi;
		counter++;
	}
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
	if(counter==0)
		xhttp.open("GET", "przewodnicyRAJAX.php", true);
	else
	{
		var query_string = "?" + tab[0] + "=" + tab[1];
		
		for(var i=2; i<counter-1; i=i+2)
		{
			query_string+="&" + tab[i] + "=" + tab[i+1];
		}
		console.log(query_string);
  		xhttp.open("GET", "przewodnicyRAJAX.php" + query_string, true);
	}
  	xhttp.send(); 
}

/////////////////////////////////////////////////////////////////DELETE//////////////////////////////////////////////////////////////

function openPrzewodnicyD(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPrzewodnicyCRUD");
    document.getElementById("przewodnicyD").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML =  "<?php include 'przewodnicyD.php';?>";
}


function przewodnicyWyslijD(evt) {
	var imie = document.getElementById('przewodnicyDImie').value;
	var nazwisko = document.getElementById('przewodnicyDNazwisko').value;	
	var data = document.getElementById('przewodnicyDData').value;
	var adres = document.getElementById('przewodnicyDAdres').value;
	var miasto = document.getElementById('przewodnicyDMiasto').value;
	var telefon = document.getElementById('przewodnicyDTelefon').value;
	var samochod = document.getElementById('przewodnicyDSamochod').value;
	var kondycja = document.getElementById('przewodnicyDKondycja').value;
	var uwagi = document.getElementById('przewodnicyDUwagi').value;
	var tab = [];
	var counter = 0;
	if(imie != "" && imie != null)
	{
		tab[counter] = "imie";
		counter++;
		tab[counter] = imie;
		counter++;
	}
	if(nazwisko != "" && nazwisko != null)
	{
		tab[counter] = "nazwisko";
		counter++;
		tab[counter] = nazwisko;
		counter++;
	}
	if(data != "" && data != null)
	{
		tab[counter] = "data";
		counter++;
		tab[counter] = data;
		counter++;
	}
	if(adres != "" && adres != null)
	{
		tab[counter] = "adres";
		counter++;
		tab[counter] = adres;
		counter++;
	}
	if(miasto != "" && miasto != null)
	{
		tab[counter] = "miasto";
		counter++;
		tab[counter] = miasto;
		counter++;
	}
	if(telefon != "" && telefon != null)
	{
		tab[counter] = "telefon";
		counter++;
		tab[counter] = telefon;
		counter++;
	}
	tab[counter] = "samochod";
	counter++;
	tab[counter] = samochod;
	counter++;	
	
	if(kondycja != "" && kondycja != null)
	{
		tab[counter] = "kondycja";
		counter++;
		tab[counter] = kondycja;
		counter++;
	}
	if(uwagi != "" && uwagi != null)
	{
		tab[counter] = "uwagi";
		counter++;
		tab[counter] = uwagi;
		counter++;
	}
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
	if(counter==0)
		xhttp.open("GET", "przewodnicyDAJAX.php", true);
	else
	{
		var query_string = "?" + tab[0] + "=" + tab[1];
		
		for(var i=2; i<counter-1; i=i+2)
		{
			query_string+="&" + tab[i] + "=" + tab[i+1];
		}
		console.log(query_string);
  		xhttp.open("GET", "przewodnicyDAJAX.php" + query_string, true);
	}
  	xhttp.send(); 
}


function openPrzewodnicyDDalej()
{
	var IDs = document.getElementById('ukryteIDD').value;
	var tab = IDs.split(',');
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
	var query_string = "?ile=" + tab.length;
	console.log(tab.length);
	for(var i=0; i<tab.length; i++)
	{
		console.log(i);
		query_string+="&" + String.fromCharCode(97 + i) + "=" + tab[i]; 
	}
	console.log(query_string);
 	xhttp.open("GET", "przewodnicyDAJAXKoniec.php" + query_string, true);
  	xhttp.send(); 

}

///////////////////////////////////////////////////////////UPDATE//////////////////////////////////////////////////////
function openPrzewodnicyU(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPrzewodnicyCRUD");
    document.getElementById("przewodnicyU").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML =  "<?php include 'przewodnicyU.php';?>";
}

function przewodnicyWyslijU() {
	var imie = document.getElementById('przewodnicyUImie').value;
	var nazwisko = document.getElementById('przewodnicyUNazwisko').value;	
	var data = document.getElementById('przewodnicyUData').value;
	var adres = document.getElementById('przewodnicyUAdres').value;
	var miasto = document.getElementById('przewodnicyUMiasto').value;
	var telefon = document.getElementById('przewodnicyUTelefon').value;
	var samochod = document.getElementById('przewodnicyUSamochod').value;
	var kondycja = document.getElementById('przewodnicyUKondycja').value;
	var uwagi = document.getElementById('przewodnicyUUwagi').value;
	var tab = [];
	var counter = 0;
	if(imie != "" && imie != null)
	{
		tab[counter] = "imie";
		counter++;
		tab[counter] = imie;
		counter++;
	}
	if(nazwisko != "" && nazwisko != null)
	{
		tab[counter] = "nazwisko";
		counter++;
		tab[counter] = nazwisko;
		counter++;
	}
	if(data != "" && data != null)
	{
		tab[counter] = "data";
		counter++;
		tab[counter] = data;
		counter++;
	}
	if(adres != "" && adres != null)
	{
		tab[counter] = "adres";
		counter++;
		tab[counter] = adres;
		counter++;
	}
	if(miasto != "" && miasto != null)
	{
		tab[counter] = "miasto";
		counter++;
		tab[counter] = miasto;
		counter++;
	}
	if(telefon != "" && telefon != null)
	{
		tab[counter] = "telefon";
		counter++;
		tab[counter] = telefon;
		counter++;
	}
	tab[counter] = "samochod";
	counter++;
	tab[counter] = samochod;
	counter++;	
	
	if(kondycja != "" && kondycja != null)
	{
		tab[counter] = "kondycja";
		counter++;
		tab[counter] = kondycja;
		counter++;
	}
	if(uwagi != "" && uwagi != null)
	{
		tab[counter] = "uwagi";
		counter++;
		tab[counter] = uwagi;
		counter++;
	}
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
	if(counter==0)
		xhttp.open("GET", "przewodnicyUAJAX.php");
	else
	{
		var query_string = "?" + tab[0] + "=" + tab[1];
		
		for(var i=2; i<counter-1; i=i+2)
		{
			query_string+="&" + tab[i] + "=" + tab[i+1];
		}
		console.log(query_string);
  		xhttp.open("GET", "przewodnicyUAJAX.php" + query_string, true);
	}
  	xhttp.send(); 
}

function openPrzewodnicyUDalej()
{
	var IDs = document.getElementById('ukryteID').value;
	var tab = IDs.split(',');
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
	var query_string = "?ile=" + tab.length;
	console.log(tab.length);
	for(var i=0; i<tab.length; i++)
	{
		console.log(i);
		query_string+="&" + String.fromCharCode(97 + i) + "=" + tab[i]; 
	}
	console.log(query_string);
 	xhttp.open("GET", "przewodnicyUAJAXDalej.php" + query_string, true);
  	xhttp.send(); 

}

function openPrzewodnicyUAktualizacja()
{
	var IDs = document.getElementById('kolejneUkryteID').value;
	var tabID = IDs.split(',');
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};

	var query_string = "?ile=" + tabID.length;
		
	for(var i=0; i<tabID.length; i++)
	{
		query_string+="&" + String.fromCharCode(97 + i) + "=" + tabID[i]; 
	}
	console.log(query_string);




	var imie = document.getElementById('przewodnicyUKoniecImie').value;
	var nazwisko = document.getElementById('przewodnicyUKoniecNazwisko').value;	
	var data = document.getElementById('przewodnicyUKoniecData').value;
	var adres = document.getElementById('przewodnicyUKoniecAdres').value;
	var miasto = document.getElementById('przewodnicyUKoniecMiasto').value;
	var telefon = document.getElementById('przewodnicyUKoniecTelefon').value;
	var samochod = document.getElementById('przewodnicyUKoniecSamochod').checked;
	var kondycja = document.getElementById('przewodnicyUKoniecKondycja').value;
	var uwagi = document.getElementById('przewodnicyUKoniecUwagi').value;
	var tab = [];
	var counter = 0;
	if(imie != "" && imie != null)
	{
		tab[counter] = "imie";
		counter++;
		tab[counter] = imie;
		counter++;
	}
	if(nazwisko != "" && nazwisko != null)
	{
		tab[counter] = "nazwisko";
		counter++;
		tab[counter] = nazwisko;
		counter++;
	}
	if(data != "" && data != null)
	{
		tab[counter] = "data";
		counter++;
		tab[counter] = data;
		counter++;
	}
	if(adres != "" && adres != null)
	{
		tab[counter] = "adres";
		counter++;
		tab[counter] = adres;
		counter++;
	}
	if(miasto != "" && miasto != null)
	{
		tab[counter] = "miasto";
		counter++;
		tab[counter] = miasto;
		counter++;
	}
	if(telefon != "" && telefon != null)
	{
		tab[counter] = "telefon";
		counter++;
		tab[counter] = telefon;
		counter++;
	}
	tab[counter] = "samochod";
	counter++;
	tab[counter] = samochod;
	counter++;	
	
	if(kondycja != "" && kondycja != null)
	{
		tab[counter] = "kondycja";
		counter++;
		tab[counter] = kondycja;
		counter++;
	}
	if(uwagi != "" && uwagi != null)
	{
		tab[counter] = "uwagi";
		counter++;
		tab[counter] = uwagi;
		counter++;
	}
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
	if(counter==0)
		xhttp.open("GET", "przewodnicyUAJAXKoniec.php" + query_string, true);
	else
	{	
		for(var i=0; i<counter-1; i=i+2)
		{
			query_string+="&" + tab[i] + "=" + tab[i+1];
		}
		console.log(query_string);
  		xhttp.open("GET", "przewodnicyUAJAXKoniec.php" + query_string, true);
	}
  	xhttp.send(); 

}








//////////////////////////////////////////////////////////PSY////////////////////////////////////////////////////



function openPsyPoziomy(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPsy");
    document.getElementById("psy2").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = '<?php include "psyPoziomy.php";?>';
}


function openPsySkuteczne(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPsy");
    document.getElementById("psy6").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'psySkuteczne.php';?>";
}

function openPsyCertyfikaty(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPsy");
    document.getElementById("psy3").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'psyCertyfikaty.php';?>";
}

function szczegolyPiesCertyfikaty()
{	
	var pies = document.getElementById('ktoryPiesCertyfikaty').value;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "szczegolyPiesCertyfikaty.php?q="+pies, true);
  	xhttp.send();   
}



function openPsyAkcjePsa(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPsy");
    document.getElementById("psy4").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'psyAkcjePsa.php';?>";
}


function szczegolyPiesAkcje()
{	
	var pies = document.getElementById('ktoryPiesAkcje').value;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "szczegolyPiesAkcje.php?q="+pies, true);
  	xhttp.send();   
}

function openPsyTreningiPsa(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPsy");
    document.getElementById("psy5").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'psyTreningiPsa.php';?>";
}

function szczegolyPiesTreningi()
{	
	var pies = document.getElementById('ktoryPiesTreningi').value;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "szczegolyPiesTreningi.php?q="+pies, true);
  	xhttp.send();   
}


///////////////////////////////////////////////////////CRUD/////////////////////////////////////////////////////

function openPsyCRUD(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPsy");
    document.getElementById("psy7").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'psyCRUD.php';?>";
}

function openPsyCRUDRefresh(evt) {
    location.reload(true);
    location.assign(index.php);
    wyczyscWewnetrzneTaby("tabButtonsPsy");
    document.getElementById("psy7").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'psyCRUD.php';?>";
}

/////////////////////////////////////////////CREATE///////////////////////////////////////////////

function openPsyC(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPsyCRUD");
    document.getElementById("psyC").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML =  "<?php include 'psyC.php';?>";
}


function psyWyslijC() {
	var id_przewodnika = document.getElementById('ktoryPrzewodnikC').value;	
	var imie = document.getElementById('psyCImie').value;
	var data = document.getElementById('psyCData').value;
	var rasa = document.getElementById('psyCRasa').value;
	var poziom = document.getElementById('psyCPoziom').value;
	var tryb = document.getElementById('psyCTryb').value;
	var uwagi = document.getElementById('psyCUwagi').value;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "psyCAJAX.php?imie="+imie+"&data="+data+"&rasa="+rasa+"&poziom="+poziom+"&tryb="+tryb+"&uwagi="+uwagi+"&id_przewodnika="+id_przewodnika, true);
  	xhttp.send(); 
}

///////////////////////////////////////////////////////READ////////////////////////////////////////////////////////////////////////////



function openPsyR(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPsyCRUD");
    document.getElementById("psyR").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML =  "<?php include 'psyR.php';?>";
}

function psyWyslijR() {
	var id_przewodnika = document.getElementById('ktoryPrzewodnikR').value;	
	var imie = document.getElementById('psyRImie').value;
	var data = document.getElementById('psyRData').value;
	var rasa = document.getElementById('psyRRasa').value;
	var poziom = document.getElementById('psyRPoziom').value;
	var tryb = document.getElementById('psyRTryb').value;
	var uwagi = document.getElementById('psyRUwagi').value;
	var tab = [];
	var counter = 0;
	if(id_przewodnika!=0 && id_przewodnika != "" && id_przewodnika != null)
	{
		tab[counter] = "id_przewodnika";
		counter++;
		tab[counter] = id_przewodnika;
		counter++;
	} 
	if(imie != "" && imie != null)
	{
		tab[counter] = "imie";
		counter++;
		tab[counter] = imie;
		counter++;
	}
	if(data != "" && data != null)
	{
		tab[counter] = "data";
		counter++;
		tab[counter] = data;
		counter++;
	}
	if(rasa != "" && rasa != null)
	{
		tab[counter] = "rasa";
		counter++;
		tab[counter] = rasa;
		counter++;
	}
	if(poziom != "" && poziom != null && poziom!='Obojętne')
	{
		tab[counter] = "poziom";
		counter++;
		tab[counter] = poziom;
		counter++;
	}
	if(tryb != "" && tryb != null && tryb!='Obojętne')
	{
		tab[counter] = "tryb";
		counter++;
		tab[counter] = tryb;
		counter++;
	}
	if(uwagi != "" && uwagi != null)
	{
		tab[counter] = "uwagi";
		counter++;
		tab[counter] = uwagi;
		counter++;
	}
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
	if(counter==0)
		xhttp.open("GET", "psyRAJAX.php", true);
	else
	{
		var query_string = "?" + tab[0] + "=" + tab[1];
		
		for(var i=2; i<counter-1; i=i+2)
		{
			query_string+="&" + tab[i] + "=" + tab[i+1];
		}
		console.log(query_string);
  		xhttp.open("GET", "psyRAJAX.php" + query_string, true);
	}
  	xhttp.send(); 
}

/////////////////////////////////////////////////////////////////DELETE//////////////////////////////////////////////////////////////

function openPsyD(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPsyCRUD");
    document.getElementById("psyD").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML =  "<?php include 'psyD.php';?>";
}


function psyWyslijD(evt) {
	var id_przewodnika = document.getElementById('ktoryPrzewodnikR').value;	
	var imie = document.getElementById('psyRImie').value;
	var data = document.getElementById('psyRData').value;
	var rasa = document.getElementById('psyRRasa').value;
	var poziom = document.getElementById('psyRPoziom').value;
	var tryb = document.getElementById('psyRTryb').value;
	var uwagi = document.getElementById('psyRUwagi').value;
	var tab = [];
	var counter = 0;
	if(id_przewodnika!=0 && id_przewodnika != "" && id_przewodnika != null)
	{
		tab[counter] = "id_przewodnika";
		counter++;
		tab[counter] = id_przewodnika;
		counter++;
	} 
	if(imie != "" && imie != null)
	{
		tab[counter] = "imie";
		counter++;
		tab[counter] = imie;
		counter++;
	}
	if(data != "" && data != null)
	{
		tab[counter] = "data";
		counter++;
		tab[counter] = data;
		counter++;
	}
	if(rasa != "" && rasa != null)
	{
		tab[counter] = "rasa";
		counter++;
		tab[counter] = rasa;
		counter++;
	}
	if(poziom != "" && poziom != null && poziom!='Obojętne')
	{
		tab[counter] = "poziom";
		counter++;
		tab[counter] = poziom;
		counter++;
	}
	if(tryb != "" && tryb != null && tryb!='Obojętne')
	{
		tab[counter] = "tryb";
		counter++;
		tab[counter] = tryb;
		counter++;
	}
	if(uwagi != "" && uwagi != null)
	{
		tab[counter] = "uwagi";
		counter++;
		tab[counter] = uwagi;
		counter++;
	}
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
	if(counter==0)
		xhttp.open("GET", "psyDAJAX.php", true);
	else
	{
		var query_string = "?" + tab[0] + "=" + tab[1];
		
		for(var i=2; i<counter-1; i=i+2)
		{
			query_string+="&" + tab[i] + "=" + tab[i+1];
		}
		console.log(query_string);
  		xhttp.open("GET", "psyDAJAX.php" + query_string, true);
	}
  	xhttp.send(); 
}



function openPsyDDalej()
{
	var IDs = document.getElementById('psyUkryteIDD').value;
	var tab = IDs.split(',');
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
	var query_string = "?ile=" + tab.length;
	console.log(tab.length);
	for(var i=0; i<tab.length; i++)
	{
		console.log(i);
		query_string+="&" + String.fromCharCode(97 + i) + "=" + tab[i]; 
	}
	console.log(query_string);
 	xhttp.open("GET", "psyDAJAXKoniec.php" + query_string, true);
  	xhttp.send(); 

}

///////////////////////////////////////////////////////////UPDATE//////////////////////////////////////////////////////
function openPsyU(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPsyCRUD");
    document.getElementById("psyU").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML =  "<?php include 'psyU.php';?>";
}

function psyWyslijU() {
	var id_przewodnika = document.getElementById('ktoryPrzewodnikU').value;	
	var imie = document.getElementById('psyUImie').value;
	var data = document.getElementById('psyUData').value;
	var rasa = document.getElementById('psyURasa').value;
	var poziom = document.getElementById('psyUPoziom').value;
	var tryb = document.getElementById('psyUTryb').value;
	var uwagi = document.getElementById('psyUUwagi').value;
	var tab = [];
	var counter = 0;
	if(id_przewodnika!=0 && id_przewodnika != "" && id_przewodnika != null)
	{
		tab[counter] = "id_przewodnika";
		counter++;
		tab[counter] = id_przewodnika;
		counter++;
	} 
	if(imie != "" && imie != null)
	{
		tab[counter] = "imie";
		counter++;
		tab[counter] = imie;
		counter++;
	}
	if(data != "" && data != null)
	{
		tab[counter] = "data";
		counter++;
		tab[counter] = data;
		counter++;
	}
	if(rasa != "" && rasa != null)
	{
		tab[counter] = "rasa";
		counter++;
		tab[counter] = rasa;
		counter++;
	}
	if(poziom != "" && poziom != null && poziom!='Obojętne')
	{
		tab[counter] = "poziom";
		counter++;
		tab[counter] = poziom;
		counter++;
	}
	if(tryb != "" && tryb != null && tryb!='Obojętne')
	{
		tab[counter] = "tryb";
		counter++;
		tab[counter] = tryb;
		counter++;
	}
	if(uwagi != "" && uwagi != null)
	{
		tab[counter] = "uwagi";
		counter++;
		tab[counter] = uwagi;
		counter++;
	}
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
	if(counter==0)
		xhttp.open("GET", "psyUAJAX.php", true);
	else
	{
		var query_string = "?" + tab[0] + "=" + tab[1];
		
		for(var i=2; i<counter-1; i=i+2)
		{
			query_string+="&" + tab[i] + "=" + tab[i+1];
		}
		console.log(query_string);
  		xhttp.open("GET", "psyUAJAX.php" + query_string, true);
	}
  	xhttp.send(); 
}

function openPsyUDalej()
{
	var IDs = document.getElementById('psyUkryteIDU').value;
	var tab = IDs.split(',');
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
	var query_string = "?ile=" + tab.length;
	console.log(tab.length);
	for(var i=0; i<tab.length; i++)
	{
		console.log(i);
		query_string+="&" + String.fromCharCode(97 + i) + "=" + tab[i]; 
	}
	console.log(query_string);
 	xhttp.open("GET", "psyUAJAXDalej.php" + query_string, true);
  	xhttp.send(); 

}

function openPsyUAktualizacja()
{
	var IDs = document.getElementById('psyKolejneUkryteIDU').value;
	var tabID = IDs.split(',');
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};

	var query_string = "?ile=" + tabID.length;
		
	for(var i=0; i<tabID.length; i++)
	{
		query_string+="&" + String.fromCharCode(97 + i) + "=" + tabID[i]; 
	}
	console.log(query_string);



	var id_przewodnika = document.getElementById('ktoryPrzewodnikUKoniec').value;
	var imie = document.getElementById('psyUKoniecImie').value;
	var data = document.getElementById('psyUKoniecData').value;
	var rasa = document.getElementById('psyUKoniecRasa').value;
	var poziom = document.getElementById('psyUKoniecPoziom').value;
	var tryb = document.getElementById('psyUKoniecTryb').value;
	var uwagi = document.getElementById('psyUKoniecUwagi').value;
	var tab = [];
	var counter = 0;
	if(id_przewodnika != "" && imie != null && id_przewodnika!='Zostaw')
	{
		tab[counter] = "ID_Przewodnika";
		counter++;
		tab[counter] = id_przewodnika;
		counter++;
	}
	if(imie != "" && imie != null)
	{
		tab[counter] = "imie";
		counter++;
		tab[counter] = imie;
		counter++;
	}

	if(data != "" && data != null)
	{
		tab[counter] = "data";
		counter++;
		tab[counter] = data;
		counter++;
	}
	if(rasa != "" && rasa != null)
	{
		tab[counter] = "rasa";
		counter++;
		tab[counter] = rasa;
		counter++;
	}
	if(poziom != "" && poziom != null && poziom!='Zostaw')
	{
		tab[counter] = "poziom";
		counter++;
		tab[counter] = poziom;
		counter++;
	}
	if(tryb != "" && tryb != null && tryb!='Zostaw')
	{
		tab[counter] = "tryb";
		counter++;
		tab[counter] = tryb;
		counter++;
	}
	if(uwagi != "" && uwagi != null)
	{
		tab[counter] = "uwagi";
		counter++;
		tab[counter] = uwagi;
		counter++;
	}
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
	if(counter==0)
		xhttp.open("GET", "psyUAJAXKoniec.php" + query_string, true);
	else
	{	
		for(var i=0; i<counter-1; i=i+2)
		{
			query_string+="&" + tab[i] + "=" + tab[i+1];
		}
		console.log(query_string);
  		xhttp.open("GET", "psyUAJAXKoniec.php" + query_string, true);
	}
  	xhttp.send(); 

}





/////////////////////////////////////////////////////////////////////////////////////AKCJE///////////////////////////////////////////////////////////////


function openAkcjeDaty(evt) {
    wyczyscWewnetrzneTaby("tabButtonsAkcje");
    document.getElementById("akcje2").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'akcjeDaty.php';?>";
}


function openAkcjeSkutecznosc(evt) {
    wyczyscWewnetrzneTaby("tabButtonsAkcje");
    document.getElementById("akcje3").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'akcjeSkutecznosc.php';?>";
}


function openAkcjeDodaj(evt) {
    wyczyscWewnetrzneTaby("tabButtonsAkcje");
    document.getElementById("akcje4").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'akcjeC.php';?>";
}



function szczegolyAkcjeDaty()
{	
	var start = document.getElementById('akcjeDatyStart').value;
        var stop = document.getElementById('akcjeDatyStop').value;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "szczegolyAkcjeDaty.php?start="+start+"&stop="+stop, true);
  	xhttp.send();   
}


function akcjeWyslijC() {
	var data = document.getElementById('akcjeCData').value;
	var adres = document.getElementById('akcjeCAdres').value;
	var miasto = document.getElementById('akcjeCMiasto').value;
	var imie = document.getElementById('akcjeCImie').value;
	var nazwisko = document.getElementById('akcjeCNazwisko').value;
	var zleceniodawca = document.getElementById('akcjeCZleceniodawca').value;	
	var czy_odnaleziono = document.getElementById('akcjeCCzyOdnaleziono').checked;
	var ile_psow = document.getElementById('akcjeCIlePsow').value;
	var uwagi = document.getElementById('akcjeCUwagi').value;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "akcjeCAJAX.php?data="+data+"&adres="+adres+"&miasto="+miasto+"&imie="+imie+"&nazwisko="+nazwisko+"&zleceniodawca="+zleceniodawca+"&czy_odnaleziono="+czy_odnaleziono+"&ile_psow="+ile_psow+"&uwagi="+uwagi, true);
  	xhttp.send(); 
}


function openAkcjeCRUDRefresh(evt) {
    location.reload(true);
    location.assign(index.php);
    wyczyscWewnetrzneTaby("tabButtonsAkcje");
    document.getElementById("akcje4").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'akcjeC.php';?>";
}

function akcjeDodajPsa(evt) {
    wyczyscWewnetrzneTaby("tabButtonsAkcje");
    document.getElementById("akcje5").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'akcjeDodajPsa.php';?>";
}

function akcjeDodajPsaWyslijC(event) {

	var pies = document.getElementById('ktoryPiesDodajDoAkcji').value;
	var akcja = document.getElementById('ktoraAkcjaDodajDoAkcji').value;
	var czy_ten_odnalazl = document.getElementById('akcjeDodajPsaCzyTenOdnalazl').checked;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "akcjeDodajPsaAJAX.php?pies="+pies+"&akcja="+akcja+"&czy_ten_odnalazl="+czy_ten_odnalazl, true);
  	xhttp.send();
}



//////////////////////////////////////////////////////TRENINGI/////////////////////////////////////////////////////////

function openTreningiDaty(evt) {
    wyczyscWewnetrzneTaby("tabButtonsTreningi");
    document.getElementById("treningi2").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'treningiDaty.php';?>";
}


function openTreningiTrening(evt) {
    wyczyscWewnetrzneTaby("tabButtonsTreningi");
    document.getElementById("treningi3").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'treningiTrening.php';?>";
}

function szczegolyTreningiTrening()
{	
	var id = document.getElementById('treningiTreningID').value;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "szczegolyTreningiTrening.php?id="+id, true);
  	xhttp.send();   
}


function openTreningiDodaj(evt) {
    wyczyscWewnetrzneTaby("tabButtonsTreningi");
    document.getElementById("treningi4").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'treningiC.php';?>";
}



function szczegolyTreningiDaty()
{	
	var start = document.getElementById('treningiDatyStart').value;
        var stop = document.getElementById('treningiDatyStop').value;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "szczegolyTreningiDaty.php?start="+start+"&stop="+stop, true);
  	xhttp.send();   
}


function treningiWyslijC() {
	var data = document.getElementById('treningiCData').value;
	var adres = document.getElementById('treningiCAdres').value;
	var miasto = document.getElementById('treningiCMiasto').value;
	var uwagi = document.getElementById('treningiCUwagi').value;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "treningiCAJAX.php?data="+data+"&adres="+adres+"&miasto="+miasto+"&uwagi="+uwagi, true);
  	xhttp.send(); 
}


function openTreningiCRUDRefresh(evt) {
    location.reload(true);
    location.assign(index.php);
    wyczyscWewnetrzneTaby("tabButtonsTreningi");
    document.getElementById("treningi4").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'treningiC.php';?>";
}


function openTreningiDodajSlad(evt) {
    wyczyscWewnetrzneTaby("tabButtonsTreningi");
    document.getElementById("treningi5").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'treningiDodajSlad.php';?>";
}

function dodajSladWyslijC(evt) {
	var pies = document.getElementById('ktoryPiesDodajSlad').value;
	var trening = document.getElementById('ktoryTreningDodajTrening').value;
	var pozorant = document.getElementById('ktoryPozorantDodajTrening').value;
	var slad = document.getElementById('treningiSladDodajSlad').value;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "treningiDodajSladAJAX.php?pies="+pies+"&trening="+trening+"&pozorant="+pozorant+"&slad="+slad, true);
  	xhttp.send(); 

}

//////////////////////////////////////////////////////////////////////INNE GRUPY//////////////////////////////////////////

function openGrupyGrupa(evt) {
    wyczyscWewnetrzneTaby("tabButtonsInneGrupy");
    document.getElementById("innegrupy2").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'grupyGrupa.php';?>";
}

function szczegolyGrupyGrupa()
{	
	var nazwa = document.getElementById('grupyGrupaNazwa').value;
	var nazwisko = document.getElementById('grupyGrupaNazwiskoSzefa').value;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "szczegolyGrupyGrupa.php?nazwa="+nazwa+"&nazwisko="+nazwisko, true);
  	xhttp.send();   
}

function openGrupyCRUDRefresh(evt) {
    location.reload(true);
    location.assign(index.php);
    wyczyscWewnetrzneTaby("tabButtonsInneGrupy");
    document.getElementById("innegrupy3").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'grupyC.php';?>";
}

function grupyDodaj(evt) {
    wyczyscWewnetrzneTaby("tabButtonsInneGrupy");
    document.getElementById("innegrupy3").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'grupyC.php';?>";
}

function grupyWyslijC() {
	var nazwa = document.getElementById('grupyCNazwa').value;
	var liczebnosc = document.getElementById('grupyCLiczebnosc').value;
	var imie = document.getElementById('grupyCImie').value;
	var nazwisko = document.getElementById('grupyCNazwisko').value;
	var telefon = document.getElementById('grupyCTelefon').value;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "grupyCAJAX.php?nazwa="+nazwa+"&liczebnosc="+liczebnosc+"&imie="+imie+"&nazwisko="+nazwisko+"&telefon="+telefon, true);
  	xhttp.send(); 
}
//////////////////////////////////////////////////////////POZORANCI////////////////////////////////////////////////////////////////////////////////////


function openPozoranciAktywny(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPozoranci");
    document.getElementById("pozoranci2").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'pozoranciAktywny.php';?>";
}

function openPozoranciCRUDRefresh(evt) {
    location.reload(true);
    location.assign(index.php);
    wyczyscWewnetrzneTaby("tabButtonsPozoranci");
    document.getElementById("pozoranci3").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'pozoranciC.php';?>";
}

function pozoranciDodaj(evt) {
    wyczyscWewnetrzneTaby("tabButtonsPozoranci");
    document.getElementById("pozoranci3").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'pozoranciC.php';?>";
}

function pozoranciWyslijC() {
	var imie = document.getElementById('pozoranciCImie').value;
	var nazwisko = document.getElementById('pozoranciCNazwisko').value;	
	var data = document.getElementById('pozoranciCData').value;
	var adres = document.getElementById('pozoranciCAdres').value;
	var telefon = document.getElementById('pozoranciCTelefon').value;
	var kondycja = document.getElementById('pozoranciCKondycja').value;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "pozoranciCAJAX.php?imie="+imie+"&nazwisko="+nazwisko+"&data="+data+"&adres="+adres+"&telefon="+telefon+"&kondycja="+kondycja, true);
  	xhttp.send(); 
}


/////////////////////////////////////////////////////////////CERTYFIKATY//////////////////////////////////////////////////////////////////////////////


function openCertyfikatyPsy(evt) {
    wyczyscWewnetrzneTaby("tabButtonsCertyfikaty");
    document.getElementById("certyfikaty2").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'certyfikatyPsy.php';?>";
}

function szczegolyCertyfikatyPsy(evt)
{
	var nazwa = document.getElementById('ktoryCertyfikatCertyfikaty').value;
	var poziom = document.getElementById('certyfikatyPsyPoziom').value;	
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "certyfikatyPsyDalej.php?nazwa="+nazwa+"&poziom="+poziom, true);
  	xhttp.send(); 

}

function openCertyfikatyCRUDRefresh(evt) {
    location.reload(true);
    location.assign(index.php);
    wyczyscWewnetrzneTaby("tabButtonsCertyfikaty");
    document.getElementById("certyfikaty3").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'certyfikatyC.php';?>";
}

function certyfikatyDodajPsu(evt) {
    wyczyscWewnetrzneTaby("tabButtonsCertyfikaty");
    document.getElementById("certyfikaty3").style.backgroundColor = 'green';
    document.getElementById("show").innerHTML = "";
    document.getElementById("show").innerHTML = "<?php include 'certyfikatyC.php';?>";
}

function certyfikatyWyslijC() {
	var nazwa = document.getElementById('ktoryCertyfikatDodajCertyfikat').value;
	var poziom = document.getElementById('certyfikatyDodajPsyPoziom').value;	
	var id_psa = document.getElementById('ktoryPiesDodajCertyfikat').value;
	var wazny_do = document.getElementById('certyfikatyCWaznyDo').value;
	var xhttp;
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("show").innerHTML = this.responseText;
    		}
  	};
  	xhttp.open("GET", "certyfikatyCAJAX.php?nazwa="+nazwa+"&poziom="+poziom+"&id_psa="+id_psa+"&wazny_do="+wazny_do, true);
  	xhttp.send(); 
}

</script>

</body>
</html>





