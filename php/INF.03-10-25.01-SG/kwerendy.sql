-- − Zapytanie 1: wybierające jedynie pseudonim, tytuł, ranking i klasę dla rankingów większych od
-- 2787, posortowane malejąco według rankingu
SELECT pseudonim,tytul,ranking,klasa FROM zawodnicy
WHERE ranking>2787
ORDER BY ranking DESC;
-- − Zapytanie 2: wybierające losowo dokładnie dwa rekordy złożone z pól pseudonim i klasa z
-- tabeli zawodnicy

SELECT pseudonim, klasa FROM zawodnicy
ORDER BY RAND() LIMIT 2;

-- − Zapytanie 3: aktualizujące dane w kolumnie klasa. Klasa „4A” jest aktualizowana do „5A”
UPDATE zawodnicy 
SET klasa="5A"
WHERE klasa="4A";
-- − Zapytanie 4: wybierające dla zawodników z niepustym tytułem jedynie pseudonim i datę zdobycia
-- oraz obliczające ile minęło dni od daty zdobycia tytułu do dnia dzisiejszego. Obliczona liczba dni
-- powinna być zapisana pod nazwą kolumny (aliasem) “dni”.

SELECT pseudonim,data_zdobycia, DATEDIFF(curdate(), data_zdobycia) as dni FROM zawodnicy
WHERE tytul IS NOT NULL AND tytul="";
