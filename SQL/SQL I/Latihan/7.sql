//e1
-- dapatkan nama dan jumlah penjualan unit untuk 5 barang dengan penjualan tertinggi
SELECT items.id, items.name, COUNT(*)
FROM sales_records
JOIN items
ON sales_records.item_id = items.id
GROUP BY items.id, items.name
ORDER BY COUNT(*) DESC
LIMIT 5;

//e2
-- dapatkan total penjualan dan total laba untuk seluruh site
SELECT SUM(items.price) AS "total penjualan", SUM(items.price - items.cost) AS "total laba"
FROM sales_records
JOIN items
ON sales_records.item_id = items.id;
