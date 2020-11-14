//e1
SELECT name
FROM players
WHERE goals > (
  -- Ketik statement SQL untuk mendapatkan skor milik Will dibaris bawah
  SELECT goals
  FROM players
  WHERE name = "Will"
)
;

//e2
SELECT name,goals
FROM players
WHERE goals > (
  SELECT AVG(goals)
  FROM players
)
;
