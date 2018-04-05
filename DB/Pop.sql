INSERT INTO Przewodnicy VALUES (DEFAULT, 'Małgorzata', 'Kowalik', '1962-09-28', 'Praska 3', 'Kraków', '600500400', true, 'Słaba', 'Problemy z ciśnieniem');
INSERT INTO Przewodnicy VALUES (DEFAULT, 'Monika', 'Poręba', '1982-07-21', 'Maciekawicza 5/11', 'Kraków', '611511411', true, 'Dobra');
INSERT INTO Przewodnicy VALUES (DEFAULT, 'Anna', 'Jastarska', '1974-11-30', 'Krakowska 143', 'Tarnów', '601505344', true, 'Średnia');
INSERT INTO Przewodnicy VALUES (DEFAULT, 'Paweł', 'Ziemniak', '1990-02-05', 'Polanowa 16/4', 'Kraków', '666000666', false, 'Słaba', 'Alergia na pyłki');
INSERT INTO Przewodnicy VALUES (DEFAULT, 'Joanna', 'Wojciechowska', '1966-03-11', 'Długa 44/21', 'Kraków', '654321098', true, 'Słaba', 'Problemy z nogą');
INSERT INTO Przewodnicy VALUES (DEFAULT, 'Antoni', 'Fistaszek', '1955-05-21', 'Rynek 31/3', 'Wieliczka', '612345678', true, 'Dobra');

INSERT INTO Psy VALUES (DEFAULT, 'Luna',  '2010-07-30', 'Owczarek Niemiecki','Zaawansowany', 'Tropiący', '', 1);
INSERT INTO Psy VALUES (DEFAULT, 'Cezar', '2012-05-10', 'Owczarek Belgijski', 'Średni', 'Tropiący', '', 2);
INSERT INTO Psy VALUES (DEFAULT, 'Łajka', '2009-01-13','Cocker Spaniel', 'Średni', 'Tropiący', '', 3);
INSERT INTO Psy VALUES (DEFAULT, 'Arczi',  '2015-04-30', 'Wyżeł', 'Początkujący', 'Tropiący', '', 3);
INSERT INTO Psy VALUES (DEFAULT, 'Jenny',  '2014-11-04', 'Labrador','Początkujący', 'Tropiący', '', 4);
INSERT INTO Psy VALUES (DEFAULT, 'Kita',  '2008-02-14', 'Owczarek Szkocki', 'Zaawansowany', 'Gruzowy', '', 5);
INSERT INTO Psy VALUES (DEFAULT, 'Kajko',  '2005-09-21', 'Bernardyn', 'Średni', 'Tropiący', 'Dysplazja', 6);

INSERT INTO Inne_Grupy VALUES (DEFAULT, 'MCGPR', 14, 'Janusz', 'Lisowski', '606060606');
INSERT INTO Inne_Grupy VALUES (DEFAULT, 'PTR', 8, 'Mateusz', 'Lewandowski', '705507705');
INSERT INTO Inne_Grupy VALUES (DEFAULT, 'OSP', 22, 'Maria', 'Grabowska', '604404500');

INSERT INTO Pozoranci VALUES (DEFAULT, 'Krzysztof', 'Kowalik', '1992-11-22', 'Praska 3, Kraków', '655000400', 'Bardzo dobra');
INSERT INTO Pozoranci VALUES (DEFAULT, 'Marta', 'Zielarska', '1996-05-12', 'Krótka 5/3, Kraków', '566541220', 'Dobra');
INSERT INTO Pozoranci VALUES (DEFAULT, 'Jan', 'Poręba', '1984-01-01', 'Maciekawicza 5/11, Kraków', '689901222', 'Dobra');
INSERT INTO Pozoranci VALUES (DEFAULT, 'Marian', 'Ciepak', '1952-07-06', 'Marszałkowska 7, Tarnów', '891302254', 'Słaba');

INSERT INTO Uprawnienia VALUES (DEFAULT, 'RH-E', 0, 'Ratowniczy');
INSERT INTO Uprawnienia VALUES (DEFAULT, 'RH-F', 1, 'Tropiący Klasa A');
INSERT INTO Uprawnienia VALUES (DEFAULT, 'RH-F', 2, 'Tropiący Klasa B');
INSERT INTO Uprawnienia VALUES (DEFAULT, 'RH-FL', 1, 'Terenowy Klasa A');
INSERT INTO Uprawnienia VALUES (DEFAULT, 'RH-FL', 2, 'Terenowy Klasa B');
INSERT INTO Uprawnienia VALUES (DEFAULT, 'RH-T', 1, 'Gruzowy Klasa A');
INSERT INTO Uprawnienia VALUES (DEFAULT, 'RH-T', 2, 'Gruzowy Klasa B');

INSERT INTO Treningi VALUES (DEFAULT, '2018-01-10 09:00:00', 'Wielicka 250', 'Kraków', 'Ślady miejskie'); 
INSERT INTO Treningi VALUES (DEFAULT, '2017-12-11 17:00:00', 'Tyniecka 121', 'Kraków', 'Ślady terenowe + gruzy'); 
INSERT INTO Treningi VALUES (DEFAULT, '2018-01-03 08:00:00', 'Krakowska 30', 'Niepołomice', 'Egzaminy');
INSERT INTO Treningi VALUES (DEFAULT, '2017-11-01 13:00:00', 'Podgórska 12', 'Kraków', 'Ślady miejskie');

INSERT INTO Akcje VALUES (DEFAULT, '2017-09-22', 'Os. na Skarpie', 'Kraków', 'Juliusz', 'Słowiński', 'KWP Kraków', TRUE, 3, ''); 
INSERT INTO Akcje VALUES (DEFAULT, '2017-06-11', 'Ogrody działkowe', 'Modlniczka', 'Katarzyna', 'Robaczek', 'OSP Kęty', TRUE, 5, '');
INSERT INTO Akcje VALUES (DEFAULT, '2016-12-03', 'Mroźna 13', 'Tarnów', 'Jerzy', 'Paterski', 'KP Tarnów', FALSE, 4, 'Zaprzestano poszukiwań po 12 godzinach akcji');
INSERT INTO Akcje VALUES (DEFAULT, '2016-08-30', 'Balicka 56', 'Kraków', 'Michał', 'Radzikowski', 'KWP Kraków', TRUE, 2, 'Poszukiwany hospitalizowany');
INSERT INTO Akcje VALUES (DEFAULT, '2016-01-10', 'Tyniecka 120', 'Kostrze', 'Antoni', 'Kucharczyk', 'OSP Kęty', FALSE, 4, 'Koniec śladu na przystanku autobusowym MPK');

INSERT INTO Rola VALUES (DEFAULT, 'Szef', 5);
INSERT INTO Rola VALUES (DEFAULT, 'Fotograf', 6);
INSERT INTO Rola VALUES (DEFAULT, 'Osoba odpowiedzialna za sponsorów', 2);
INSERT INTO Rola VALUES (DEFAULT, 'Osoba odpowiedzialna za edycję śladów', 1);
INSERT INTO Rola VALUES (DEFAULT, 'Osoba zajmująca się uzupełnianiem bazy danych', 6);

INSERT INTO Trening_Psa VALUES (1, 1, 'https://img-ovh-cloud.zszywka.pl/1/0637/7966.jpg', 1);
INSERT INTO Trening_Psa VALUES (1, 3, 'http://ulubionykolor.pl/images/normal/29092013/181a5458c76b64f7bd886fdc129092013195221.jpg', 1);
INSERT INTO Trening_Psa VALUES (2, 1, 'http://vous.pl/wp-content/uploads/2016/09/large-51.jpg', 2);
INSERT INTO Trening_Psa VALUES (3, 2, 'slad_3_2', 3);
INSERT INTO Trening_Psa VALUES (3, 4, 'slad_3_4', 3);
INSERT INTO Trening_Psa VALUES (4, 3, 'slad_4_3', 1);
INSERT INTO Trening_Psa VALUES (5, 1, 'slad_5_1', 2);
INSERT INTO Trening_Psa VALUES (6, 2, 'slad_6_2', 4);
INSERT INTO Trening_Psa VALUES (6, 3, 'slad_6_3', 1);
INSERT INTO Trening_Psa VALUES (7, 4, 'slad_7_4', 4);

INSERT INTO treningi_pozoranci VALUES (1,1);
INSERT INTO treningi_pozoranci VALUES (2,1);
INSERT INTO treningi_pozoranci VALUES (4,1);
INSERT INTO treningi_pozoranci VALUES (3,2);
INSERT INTO treningi_pozoranci VALUES (4,2);
INSERT INTO treningi_pozoranci VALUES (1,3);
INSERT INTO treningi_pozoranci VALUES (1,4);
INSERT INTO treningi_pozoranci VALUES (2,4);
INSERT INTO treningi_pozoranci VALUES (3,4);

INSERT INTO psy_uprawnienia VALUES (1,1, '2020-08-22');
INSERT INTO psy_uprawnienia VALUES (2,1, '2019-05-10');
INSERT INTO psy_uprawnienia VALUES (1,6, '2022-12-01');
INSERT INTO psy_uprawnienia VALUES (6,6, '2018-09-25');
INSERT INTO psy_uprawnienia VALUES (1,3, '2020-01-09');
INSERT INTO psy_uprawnienia VALUES (1,7, '2017-04-30');

INSERT INTO psy_akcje VALUES (1, 1, TRUE);
INSERT INTO psy_akcje VALUES (2, 1, FALSE);
INSERT INTO psy_akcje VALUES (6, 1, FALSE);
INSERT INTO psy_akcje VALUES (1, 2, TRUE);
INSERT INTO psy_akcje VALUES (2, 2, FALSE);
INSERT INTO psy_akcje VALUES (3, 2, FALSE);
INSERT INTO psy_akcje VALUES (6, 2, FALSE);
INSERT INTO psy_akcje VALUES (7, 2, FALSE);
INSERT INTO psy_akcje VALUES (1, 3, FALSE);
INSERT INTO psy_akcje VALUES (2, 3, FALSE);
INSERT INTO psy_akcje VALUES (6, 3, FALSE);
INSERT INTO psy_akcje VALUES (7, 3, FALSE);
INSERT INTO psy_akcje VALUES (6, 4, TRUE);
INSERT INTO psy_akcje VALUES (7, 4, FALSE);
INSERT INTO psy_akcje VALUES (1, 5, FALSE);
INSERT INTO psy_akcje VALUES (2, 5, FALSE);
INSERT INTO psy_akcje VALUES (3, 5, FALSE);
INSERT INTO psy_akcje VALUES (7, 5, FALSE);

