//e1
-- Gunakan AS untuk menamai kolom "180 cm atau lebih"
SELECT name AS "180 cm atau lebih"
FROM players
WHERE height >= 180
;

//e2
-- Gunakan AS untuk menamai kolom "total skor tim"
SELECT SUM(goals) AS "total skor tim"
FROM players
;
