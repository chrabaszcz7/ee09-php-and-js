-- - Zapytanie 1: wybierające jedynie pola: Rodzaj, Nazwa, Gramatura i Cena dla wyrobów z rodzaju
-- „INNE”
SELECT rodzaj,nazwa,gramatura,cena FROM wyroby
    WHERE rodzaj="INNE";
-- - Zapytanie 2: wybierające jedynie posortowane malejąco rodzaje wyrobów. Rodzaje wyrobów nie mogą
-- się powtarzać
SELECT DISTINCT rodzaj FROM wyroby;

-- - Zapytanie 3: wybierające jedynie pola: ID oraz Nazwa dla wyrobów, których nazwa zawiera słowo
-- „Chałka”
SELECT ID,nazwa FROM wyroby
WHERE nazwa LIKE '%Chałka%';
-- - Zapytanie 4: wybierające pole Rodzaj oraz obliczające średnią cenę dla każdej grupy wyrobów z
-- kategorii Rodzaj, zaokrągloną do dwóch miejsc po przecinku. Obliczona średnia cena powinna mieć
-- nadaną nazwę kolumny (alias) „Średnia cena” 

SELECT Rodzaj,ROUND(AVG(cena),2) as "Średnia cena" FROM wyroby
    GROUP BY Rodzaj;