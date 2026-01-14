-- − Zapytanie 1: wybierające jedynie nazwę, długość i szerokość smoka, dla smoków z Polski

SELECT nazwa,dlugosc,szerokosc FROM smok
    WHERE pochodzenie="Polska";

-- − Zapytanie 2: wybierające niepowtarzające się kraje pochodzenia smoków, posortowane rosnąco
-- według kraju pochodzenia

SELECT DISTINCT pochodzenie FROM smok
    ORDER BY pochodzenie ASC;

-- − Zapytanie 3: wybierające jedynie rok z tabeli parada i obliczającą odpowiadającą mu średnią
-- wartość długości z tabeli smok, nazwa kolumny (alias) „Średnia długość” tylko dla lat po 2005
-- roku. Należy posłużyć się relacją i zgrupować rekordy względem roku

SELECT rok,AVG(dlugosc) as 'Średnia długość' FROM parada
    INNER JOIN smok ON smok.id = parada.id
WHERE rok="2005";

-- − Zapytanie 4: zmieniające strukturę tabeli parada, przez wstawienie nowej kolumny lokalizacja typu
-- napisowego o maksymalnej długości 100 znaków.

ALTER TABLE parada
ADD lokalizacja varchar(100);