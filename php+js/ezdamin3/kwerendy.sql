-- a. Wybierające pola cytat i autor dla cytatu przeznaczonego na 3 dzień

SELECT quote,author FROM daily
    WHERE day=3;

-- b. Wybierające autorów, którzy w bazie danych mają tylko jeden cytat i nie są „autor
-- nieznany”

SELECT author FROM daily
WHERE NOT author = "autor nieznany"
GROUP BY author
HAVING COUNT(quote)=1;


-- c. Wybierające treść cytatu z największą ilością polubień, należy zastosować relację

SELECT quote FROM daily
    INNER JOIN popular ON popular.daily_id = daily.id
ORDER BY upvotes DESC LIMIT 1;

-- d. Dodające nowy cytat autorstwa „Jan Kowalski” przeznaczony na dzień 7 - w treści
-- należy wpisać cokolwiek mądrze brzmiącego po polsku lub angielskiemu - klucz
-- główny nadawany automatycznie, nie ma potrzeby dodawania go do tabeli popular. 

INSERT INTO daily
VALUES
(NULL,7,'jebac grekow','Jan Kowalski');