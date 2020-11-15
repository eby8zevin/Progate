//e1
SELECT players.name, countries.name
FROM players
JOIN countries
ON players.country_id = countries.id
;

//e2
SELECT countries.name, SUM(goals)
FROM players
JOIN countries
ON players.country_id = countries.id
GROUP BY countries.name
;
