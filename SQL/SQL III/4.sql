//e1
SELECT *
FROM countries
WHERE rank < (
  SELECT rank
  FROM countries
  WHERE name = "Jepang"
)
;
