//e1
/*
dapatkan nama dan jumlah barang untuk pengguna
yang sudah membeli lebih dari 10 barang
*/

SELECT users.id, users.name, count(*) AS "jumlah"
FROM sales_records
JOIN users
ON sales_records.user_id = users.id
GROUP BY users.id, users.name
HAVING count(*) >= 10;

//e2
-- dapatkan id dan nama pengguna yang membeli "sandal"
SELECT users.id, users.name
FROM sales_records
JOIN users
ON sales_records.user_id = users.id
WHERE sales_records.item_id = (
  SELECT id
  FROM items
  WHERE name = "sandal"
)
GROUP BY users.id;
