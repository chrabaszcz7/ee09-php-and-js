-- a. Wybierające nazwę i opis każdego potwora

SELECT name,description FROM monsters

-- b. Wybierające nazwę, rozmiar, typ i kierunek (alignement) dla losowego potwora z
-- bazy danych, należy zastosować relacje do słownego opisu każdego z pól

SELECT name,size,type,alignement FROM monsters
    INNER JOIN sizes ON sizes.id = monsters.size_id
    INNER JOIN types ON types.id = monsters.type_id
    INNER JOIN alignements ON alignements.id = monsters.alignement_id
ORDER BY RAND() LIMIT 1;
    

-- c. Dodające do tabeli „monsters” klucz obcy na kolumnie „size_id” wskazujący na
-- kolumnę id tabeli „sizes”

ALTER TABLE monsters
ADD FOREIGN KEY(size_id) REFERENCES sizes(id);

-- d. Zmieniające nazwę kierunku o id=5 na „True neutral”

UPDATE alignements
SET alignement='True neutral'
WHERE id=5;