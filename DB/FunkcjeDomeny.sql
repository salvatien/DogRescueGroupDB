CREATE DOMAIN  dom_telefon AS varchar CONSTRAINT nr_tel CHECK (CHARACTER_LENGTH(VALUE) = 9);

ALTER TABLE Przewodnicy ALTER COLUMN Telefon TYPE dom_telefon;
ALTER TABLE Pozoranci ALTER COLUMN Telefon TYPE dom_telefon;
ALTER TABLE Inne_Grupy ALTER COLUMN Telefon_Szefa TYPE dom_telefon;

CREATE TYPE przewodnicy_auta  AS(Imie varchar, Nazwisko varchar, Telefon varchar, Adres varchar, Miasto varchar);
CREATE OR REPLACE FUNCTION wypisz_przewodnicy_auta() RETURNS setof przewodnicy_auta AS '
	SELECT Imie, Nazwisko, Telefon, Adres, Miasto from Psy.Przewodnicy WHERE Samochod=TRUE;
' LANGUAGE sql;

CREATE TYPE role_przewodnikow AS (Nazwa varchar, Imie varchar, Nazwisko varchar);
CREATE OR REPLACE FUNCTION  wypisz_role_przewodnikow() RETURNS setof role_przewodnikow AS '
	SELECT Nazwa, Imie, Nazwisko FROM Psy.Rola JOIN Psy.Przewodnicy ON Psy.Rola.ID_Przewodnika= Psy.Przewodnicy.ID_Przewodnika;
' LANGUAGE sql;


CREATE VIEW Psy_Poziom(Poziom, Ile_Psow)
AS SELECT Poziom ,COUNT(*) 
FROM Psy.Psy
GROUP BY Poziom
HAVING Poziom <> 'Początkujący';

CREATE OR REPLACE FUNCTION poziomy_psow_niepoczatkujacych() RETURNS setof Psy_Poziom AS '
	SELECT * FROM Psy.Psy_Poziom;
' LANGUAGE sql;


CREATE VIEW Uprawnienia_Psow AS SELECT p.ID_Psa, p.Imie as imie_psa, u.ID_Certyfikatu, u.Nazwa as nazwa_certyfikatu, u.Poziom as poziom_certyfikatu, pu.Wazny_Do FROM Psy p, Uprawnienia u, psy_uprawnienia pu WHERE p.ID_Psa=pu.ID_Psa AND u.ID_Certyfikatu=pu.ID_Certyfikatu;

CREATE OR REPLACE FUNCTION wypisz_psy_z_certyfikatem(varchar, integer) RETURNS setof Uprawnienia_Psow AS '
	SELECT * from Psy.Uprawnienia_Psow WHERE nazwa_certyfikatu=$1 AND poziom_certyfikatu>=$2;
' LANGUAGE sql;


CREATE OR REPLACE FUNCTION wypisz_certyfikaty_psa(integer) RETURNS setof Uprawnienia_Psow AS '
	SELECT * from Psy.Uprawnienia_Psow WHERE ID_Psa=$1 ORDER BY Wazny_Do;
' LANGUAGE sql;

CREATE VIEW Akcje_Psow AS SELECT p.ID_Psa, p.Imie as imie_psa, a.ID_Akcji, a.Data, a.Adres, a.Miasto, a.Nazwisko_Poszukiwanego, a.Czy_Odnaleziono, pa.Czy_pies_odnalazl FROM Psy p, Akcje a, psy_akcje pa WHERE p.ID_Psa=pa.ID_Psa AND a.ID_Akcji=pa.ID_Akcji;

CREATE OR REPLACE FUNCTION wypisz_akcje_z_okresu(date, date) RETURNS setof Akcje AS '
	SELECT * from Psy.Akcje WHERE Data >= $1 AND Data <=$2 ORDER BY Data;
' LANGUAGE sql;


CREATE OR REPLACE FUNCTION wypisz_akcje_psa(integer) RETURNS setof Akcje_Psow AS '
	SELECT * from Psy.Akcje_Psow WHERE ID_Psa=$1 ORDER BY Data;
' LANGUAGE sql;

CREATE OR REPLACE FUNCTION pies_ile_akcji(integer) RETURNS bigint AS '
	SELECT count FROM (SELECT ID_Psa, COUNT(*) FROM Psy.Akcje_Psow GROUP BY ID_Psa) AS Wyniki WHERE ID_Psa = $1;
' LANGUAGE sql;

CREATE TYPE skuteczne_psy AS (ID_Psa int, Ile_odnalezien bigint);

CREATE OR REPLACE FUNCTION najskuteczniejsze_psy() RETURNS setof skuteczne_psy AS '
	SELECT * FROM (SELECT ID_Psa, COUNT(CASE WHEN Czy_pies_odnalazl THEN 1 END) FROM Psy.Akcje_Psow GROUP BY ID_Psa) AS Wyniki ORDER BY count DESC LIMIT 3;
' LANGUAGE sql;

CREATE OR REPLACE FUNCTION procent_udanych_akcji() RETURNS bigint AS '
	SELECT 100*COUNT(CASE WHEN Czy_Odnaleziono THEN 1 END) / (SELECT COUNT(*) FROM Psy.Akcje) FROM Psy.Akcje;
' LANGUAGE sql;


CREATE VIEW Treningi_Psow AS SELECT p.ID_Psa, p.Imie as imie_psa, t.ID_Treningu, t.Termin, t.Adres, t.Miasto, t.Uwagi, poz.Imie as imie_pozoranta, poz.Nazwisko, tp.Slad FROM Psy p, Treningi t, Trening_Psa tp, Pozoranci poz WHERE p.ID_Psa=tp.ID_Psa AND t.ID_Treningu=tp.ID_Treningu AND poz.ID_Pozoranta = tp.ID_Pozoranta;


CREATE OR REPLACE FUNCTION wypisz_treningi_z_okresu(date, date) RETURNS setof Treningi AS '
	SELECT * from Psy.Treningi WHERE Termin >= $1 AND Termin <=$2 ORDER BY Termin;
' LANGUAGE sql;

CREATE OR REPLACE FUNCTION wypisz_trening(integer) RETURNS setof Treningi_Psow AS '
	SELECT * from Psy.Treningi_Psow WHERE ID_Treningu=$1 ORDER BY ID_Psa;
' LANGUAGE sql;

CREATE OR REPLACE FUNCTION wypisz_trening_psa(integer) RETURNS setof Treningi_Psow AS '
	SELECT * from Psy.Treningi_Psow WHERE ID_Psa=$1 ORDER BY Termin;
' LANGUAGE sql;

CREATE TYPE aktywny_pozorant AS (Nazwisko varchar, Ile_sladow bigint);
CREATE OR REPLACE FUNCTION pozorant_max_sladow() RETURNS bigint AS '	
	SELECT MAX(y.num)
  		FROM (SELECT COUNT(*) AS num
          		FROM Psy.Treningi_Psow GROUP BY Nazwisko) y

' LANGUAGE sql;

CREATE OR REPLACE FUNCTION najaktywniejszy_pozorant() RETURNS aktywny_pozorant AS '
	SELECT Nazwisko, COUNT(*) FROM Psy.Treningi_Psow GROUP BY Nazwisko HAVING COUNT(Nazwisko) = Psy.pozorant_max_sladow();
' LANGUAGE sql;

CREATE OR REPLACE FUNCTION szczegoly_innej_grupy(varchar, varchar) RETURNS Inne_Grupy AS '
	SELECT * FROM Psy.Inne_Grupy WHERE Nazwa=$1 OR Nazwisko_Szefa=$2;
' LANGUAGE sql;