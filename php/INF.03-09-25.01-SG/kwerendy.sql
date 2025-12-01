-- − Zapytanie 1: wybierające jedynie pasmo, nazwę góry i jej wysokość z tabeli gory i wyświetlające
-- pierwszych 10 rekordów posortowanych malejąco według wysokości
SELECT pasmo,nazwa_gory,wysokosc FROM gory
ORDER BY wysokosc DESC LIMIT 10;
-- − Zapytanie 2: wybierające jedynie nazwisko, imię, funkcję i email z tabeli osoby
SELECT nazwisko,imie,funkcja,email FROM osoby;
-- − Zapytanie 3: wstawiające osiągnięcie w postaci zdobycia góry „Łysica - Skała Agaty” (id=182)
-- przez uczestnika B. Urszula (id=4) w dniu 2024-06-08, klucz główny uzyskiwany automatycznie
INSERT INTO osiagniecia
VALUES
('NULL',182,4,'2024-06-08');
-- − Zapytanie 4: wstawiające nową osobę: M., Miłosz, uczestnik, m.milosz@zdobywcyxyz.pl do tabeli
-- osoby, klucz główny uzyskiwany automatycznie

INSERT INTO osoby
VALUES
('NULL','M.','Miłosz','uczestnik','m.milosz@zdobywcyxyz.pl');