
CREATE SEQUENCE Psy.treningi_id_treningu_seq;

CREATE TABLE Psy.Treningi (
                ID_Treningu INTEGER NOT NULL DEFAULT nextval('Psy.treningi_id_treningu_seq'),
                Termin TIMESTAMP NOT NULL,
                Adres VARCHAR NOT NULL,
                Miasto VARCHAR NOT NULL,
                Uwagi VARCHAR,
                CONSTRAINT treningi_pk PRIMARY KEY (ID_Treningu)
);


ALTER SEQUENCE Psy.treningi_id_treningu_seq OWNED BY Psy.Treningi.ID_Treningu;

CREATE SEQUENCE Psy.akcje_id_akcji_seq;

CREATE TABLE Psy.Akcje (
                ID_Akcji INTEGER NOT NULL DEFAULT nextval('Psy.akcje_id_akcji_seq'),
                Data DATE NOT NULL,
                Adres VARCHAR NOT NULL,
                Miasto VARCHAR NOT NULL,
                Imie_Poduszkiwanego VARCHAR NOT NULL,
                Nazwisko_Poszukiwanego VARCHAR NOT NULL,
                Zleceniodawca VARCHAR NOT NULL,
                Czy_Odnaleziono BOOLEAN NOT NULL,
                Ile_Psow INTEGER NOT NULL,
                Uwagi VARCHAR,
                CONSTRAINT akcje_pk PRIMARY KEY (ID_Akcji)
);


ALTER SEQUENCE Psy.akcje_id_akcji_seq OWNED BY Psy.Akcje.ID_Akcji;

CREATE SEQUENCE Psy.inne_grupy_id_grupy_seq;

CREATE TABLE Psy.Inne_Grupy (
                ID_Grupy INTEGER NOT NULL DEFAULT nextval('Psy.inne_grupy_id_grupy_seq'),
                Nazwa VARCHAR NOT NULL,
                Liczebnosc INTEGER NOT NULL,
                Imie_Szefa VARCHAR NOT NULL,
                Nazwisko_Szefa VARCHAR NOT NULL,
                Telefon_Szefa VARCHAR NOT NULL,
                CONSTRAINT inne_grupy_pk PRIMARY KEY (ID_Grupy)
);


ALTER SEQUENCE Psy.inne_grupy_id_grupy_seq OWNED BY Psy.Inne_Grupy.ID_Grupy;

CREATE SEQUENCE Psy.uprawnienia_id_certyfikatu_seq;

CREATE TABLE Psy.Uprawnienia (
                ID_Certyfikatu INTEGER NOT NULL DEFAULT nextval('Psy.uprawnienia_id_certyfikatu_seq'),
                Nazwa VARCHAR NOT NULL,
                Poziom INTEGER NOT NULL,
                Opis VARCHAR NOT NULL,
                CONSTRAINT uprawnienia_pk PRIMARY KEY (ID_Certyfikatu)
);


ALTER SEQUENCE Psy.uprawnienia_id_certyfikatu_seq OWNED BY Psy.Uprawnienia.ID_Certyfikatu;

CREATE SEQUENCE Psy.pozoranci_id_pozoranta_seq;

CREATE TABLE Psy.Pozoranci (
                ID_Pozoranta INTEGER NOT NULL DEFAULT nextval('Psy.pozoranci_id_pozoranta_seq'),
                Imie VARCHAR NOT NULL,
                Nazwisko VARCHAR NOT NULL,
                Data_Urodzenia DATE NOT NULL,
                Adres VARCHAR NOT NULL,
                Telefon VARCHAR NOT NULL,
                Kondycja VARCHAR NOT NULL,
                CONSTRAINT pozoranci_pk PRIMARY KEY (ID_Pozoranta)
);


ALTER SEQUENCE Psy.pozoranci_id_pozoranta_seq OWNED BY Psy.Pozoranci.ID_Pozoranta;

CREATE TABLE Psy.treningi_pozoranci (
                ID_Pozoranta INTEGER NOT NULL,
                ID_Treningu INTEGER NOT NULL,
                CONSTRAINT treningi_pozoranci_pk PRIMARY KEY (ID_Pozoranta, ID_Treningu)
);


CREATE SEQUENCE Psy.przewodnicy_id_przewodnika_seq_1;

CREATE TABLE Psy.Przewodnicy (
                ID_Przewodnika INTEGER NOT NULL DEFAULT nextval('Psy.przewodnicy_id_przewodnika_seq_1'),
                Imie VARCHAR NOT NULL,
                Nazwisko VARCHAR NOT NULL,
                Data_Urodzenia DATE NOT NULL,
                Adres VARCHAR NOT NULL,
                Miasto VARCHAR NOT NULL,
                Telefon VARCHAR NOT NULL,
                Samochod BOOLEAN NOT NULL,
                Kondycja VARCHAR NOT NULL,
                Uwagi VARCHAR,
                CONSTRAINT przewodnicy_pk PRIMARY KEY (ID_Przewodnika)
);


ALTER SEQUENCE Psy.przewodnicy_id_przewodnika_seq_1 OWNED BY Psy.Przewodnicy.ID_Przewodnika;

CREATE SEQUENCE Psy.rola_id_roli_seq;

CREATE TABLE Psy.Rola (
                ID_Roli INTEGER NOT NULL DEFAULT nextval('Psy.rola_id_roli_seq'),
                Nazwa VARCHAR NOT NULL,
                ID_Przewodnika INTEGER NOT NULL,
                CONSTRAINT rola_pk PRIMARY KEY (ID_Roli)
);


ALTER SEQUENCE Psy.rola_id_roli_seq OWNED BY Psy.Rola.ID_Roli;

CREATE SEQUENCE Psy.psy_id_psa_seq;

CREATE TABLE Psy.Psy (
                ID_Psa INTEGER NOT NULL DEFAULT nextval('Psy.psy_id_psa_seq'),
                Imie VARCHAR NOT NULL,
                Data_Urodzenia DATE NOT NULL,
                Rasa VARCHAR NOT NULL,
                Poziom VARCHAR NOT NULL,
                Tryb_Pracy VARCHAR NOT NULL,
                Uwagi VARCHAR,
                ID_Przewodnika INTEGER NOT NULL,
                CONSTRAINT psy_pk PRIMARY KEY (ID_Psa)
);


ALTER SEQUENCE Psy.psy_id_psa_seq OWNED BY Psy.Psy.ID_Psa;

CREATE TABLE Psy.psy_uprawnienia (
                ID_Certyfikatu INTEGER NOT NULL,
                ID_Psa INTEGER NOT NULL,
                Wazny_Do DATE NOT NULL,
                CONSTRAINT psy_uprawnienia_pk PRIMARY KEY (ID_Certyfikatu, ID_Psa)
);


CREATE TABLE Psy.psy_akcje (
                ID_Psa INTEGER NOT NULL,
                ID_Akcji INTEGER NOT NULL,
                Czy_pies_odnalazl BOOLEAN NOT NULL,
                CONSTRAINT psy_akcje_pk PRIMARY KEY (ID_Psa, ID_Akcji)
);


CREATE TABLE Psy.Trening_Psa (
                ID_Psa INTEGER NOT NULL,
                ID_Treningu INTEGER NOT NULL,
                Slad VARCHAR NOT NULL,
                ID_Pozoranta INTEGER NOT NULL,
                CONSTRAINT trening_psa_pk PRIMARY KEY (ID_Psa, ID_Treningu)
);


ALTER TABLE Psy.Trening_Psa ADD CONSTRAINT treningi_trening_psa_fk
FOREIGN KEY (ID_Treningu)
REFERENCES Psy.Treningi (ID_Treningu)
ON DELETE CASCADE
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE Psy.treningi_pozoranci ADD CONSTRAINT treningi_treningi_pozoranci_fk
FOREIGN KEY (ID_Treningu)
REFERENCES Psy.Treningi (ID_Treningu)
ON DELETE CASCADE
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE Psy.psy_akcje ADD CONSTRAINT akcje_psy_akcje_fk
FOREIGN KEY (ID_Akcji)
REFERENCES Psy.Akcje (ID_Akcji)
ON DELETE CASCADE
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE Psy.psy_uprawnienia ADD CONSTRAINT uprawnienia_psy_uprawnienia_fk
FOREIGN KEY (ID_Certyfikatu)
REFERENCES Psy.Uprawnienia (ID_Certyfikatu)
ON DELETE CASCADE
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE Psy.treningi_pozoranci ADD CONSTRAINT pozoranci_treningi_pozoranci_fk
FOREIGN KEY (ID_Pozoranta)
REFERENCES Psy.Pozoranci (ID_Pozoranta)
ON DELETE CASCADE
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE Psy.Trening_Psa ADD CONSTRAINT pozoranci_trening_psa_fk
FOREIGN KEY (ID_Pozoranta)
REFERENCES Psy.Pozoranci (ID_Pozoranta)
ON DELETE CASCADE
ON UPDATE NO ACTION
DEFERRABLE INITIALLY IMMEDIATE;

ALTER TABLE Psy.Psy ADD CONSTRAINT przewodnicy_psy_fk
FOREIGN KEY (ID_Przewodnika)
REFERENCES Psy.Przewodnicy (ID_Przewodnika)
ON DELETE CASCADE
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE Psy.Rola ADD CONSTRAINT przewodnicy_rola_fk
FOREIGN KEY (ID_Przewodnika)
REFERENCES Psy.Przewodnicy (ID_Przewodnika)
ON DELETE CASCADE
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE Psy.Trening_Psa ADD CONSTRAINT psy_trening_psa_fk
FOREIGN KEY (ID_Psa)
REFERENCES Psy.Psy (ID_Psa)
ON DELETE CASCADE
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE Psy.psy_akcje ADD CONSTRAINT psy_psy_akcje_fk
FOREIGN KEY (ID_Psa)
REFERENCES Psy.Psy (ID_Psa)
ON DELETE CASCADE
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE Psy.psy_uprawnienia ADD CONSTRAINT psy_psy_uprawnienia_fk
FOREIGN KEY (ID_Psa)
REFERENCES Psy.Psy (ID_Psa)
ON DELETE CASCADE
ON UPDATE NO ACTION
NOT DEFERRABLE;
