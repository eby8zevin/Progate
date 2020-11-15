//e1
SELECT name AS "nama pemain", height AS "tinggi pemain"
FROM players
WHERE height > (
  SELECT AVG(height)
  FROM players
)
;

//e2
SELECT *
FROM players
JOIN countries
ON players.country_id = countries.id
WHERE countries.name = "Jepang"
AND height >= 180
;

//e3
SELECT countries.name AS "nama negara", AVG(goals) AS "skor rata-rata" 
FROM players
JOIN countries
ON players.country_id = countries.id
GROUP BY countries.name
;
