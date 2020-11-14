//e1
-- dapatkan berapa kali penjualan terjadi untuk setiap harinya
SELECT purchased_at, COUNT(*) AS "penjualan"
FROM sales_records
GROUP BY purchased_at
ORDER BY purchased_at ASC;

//e2
-- dapatkan total harga penjualan dan kelompokan berdasarkan tanggal pembelianya
SELECT sales_records.purchased_at, SUM(items.price) AS "total penjualan"
FROM sales_records
JOIN items
ON sales_records.item_id = items.id
GROUP BY purchased_at
ORDER BY purchased_at ASC;
