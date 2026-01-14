1.
SELECT marka,model,cena FROM pojazdy
    WHERE marka="BM"
ORDER BY cena DESC LIMIT 15;

2.
SELECT AVG(cena) as 'Średnia cena', (SELECT MAX(cena) FROM pojazdy
    WHERE model="beta") as 'Maksymalna cena' FROM pojazdy;


3.
SELECT marka,model,cena,nazwa,doplata FROM pojazdy
    INNER JOIN kolory ON kolory.id = pojazdy.kolor
WHERE model='alfa';

4.
SELECT marka,model,cena FROM pojazdy
    ORDER BY RAND() LIMIT 2;