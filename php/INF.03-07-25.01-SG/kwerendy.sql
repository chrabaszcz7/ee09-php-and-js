--  Zapytanie 1: wybierające jedynie nazwy województw, wszystkie litery w nazwach województw
-- są zamienione na małe
SELECT lower(nazwa) FROM wojewodztwa;
-- o Zapytanie 2: obliczające liczbę miast dla których id_wojewodztwa jest równe jeden
SELECT COUNT(id) FROM miasta
WHERE id_wojewodztwa=1;
-- o Zapytanie 3: wybierające jedynie nazwy miast zaczynające się od cząstki „Lu” i odpowiadające
-- im nazwy województw, posortowane alfabetycznie po nazwie miasta. Należy posłużyć się
-- relacją

SELECT miasta.nazwa,wojewodztwa.nazwa FROM miasta
    INNER JOIN wojewodztwa ON wojewodztwa.id = miasta.id_wojewodztwa
WHERE miasta.nazwa LIKE 'Lu%'
ORDER BY miasta.nazwa ASC;

-- o Zapytanie 4: wybierające jedynie nazwy województw i odpowiadającą im liczbę miast, które się
-- w nich znajdują. Kolumna z liczbą miast powinna mieć nadany (alias) „Liczba miast”. Należy
-- posłużyć się relacją 

SELECT wojewodztwa.nazwa, COUNT(miasta.id) as "liczba miast" FROM wojewodztwa
    INNER JOIN miasta ON miasta.id_wojewodztwa = wojewodztwa.id
GROUP BY wojewodztwa.nazwa;