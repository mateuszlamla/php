drop database if exists restauracja;
create database restauracja;

use restauracja;

create table lokale (
    id int auto_increment primary key,
    nazwa text,
    miasto text,
    ulica text,
    numer int
);

create table dania (
    id int auto_increment primary key,
    typ int,
    nazwa text,
    cena int
);

create table rezerwacje (
    id int auto_increment primary key,
    nr_stolika int,
    data_rez date,
    liczba_osob int,
    telefon text
);

create table pracownicy (
    id int auto_increment primary key,
    imie text,
    nazwisko text,
    stanowisko text
);

insert into dania (typ, nazwa, cena)
values (1, 'pomidorowa', 8),
       (2, 'gulasz', 18),
       (3, 'tatar', 17),
       (4, 'woda',4),
       (1, 'rosol',8),
       (2, 'kotlet',18),
       (3, 'paluszki',8),
       (4, 'sok',8),
       (1, 'barszcz',9),
       (2, 'szaszlyk',21),
       (3, 'oliwki',12),
       (4, 'piwo',11);

       
insert into pracownicy (imie, nazwisko, stanowisko)
values ('Dawid', 'Morawski', 1),
       ('Monika', 'Wolska', 2),
       ('Florian','Dawidowski',3),
       ('Aneta','Wolna',4);