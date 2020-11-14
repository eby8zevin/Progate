//e1
-- dapatkan setiap nama barang unik (tanpa duplikat)
SELECT DISTINCT(name)
FROM items;

//e2
/*
dapatkan nama dan harga setiap produk dan
tampilkan secara mengecil berdasarkan harga
*/

SELECT name, price
FROM items
ORDER BY price DESC;

//e3
-- dapatkan semua baris dengan nilai string "kaos"
SELECT *
FROM items
WHERE name LIKE '%kaos%';
