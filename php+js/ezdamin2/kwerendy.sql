-- a. Wybierające wszystko z tabeli z zadaniami na dzień 12.06.2025

SELECT ID,title,details,finished,date FROM tasks
    WHERE date="2025-06-12";

-- b. Wybierające tytuły wszystkich niezakończonych zadań
SELECT title FROM tasks
    WHERE finished=0;
-- c. Wybierające tytuł zadania i horoskop na dzień tego zadania dla id=3, należy
-- posłużyć się relacją

SELECT title,horoscope FROM tasks
    INNER JOIN days ON days.date = tasks.date
WHERE ID=3;

-- d. Aktualizujące zadanie od id=4, oznacza je jako zakończone

UPDATE tasks
SET finished=1
WHERE id=4;