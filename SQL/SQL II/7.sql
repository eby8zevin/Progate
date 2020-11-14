//e1
-- dapatkan jumlah total uang yang dikeluarkan untuk setiap grup purchased_at 
SELECT SUM(price), purchased_at
FROM purchases
GROUP BY purchased_at;

//e2
-- dapatkan jumlah baris untuk setiap grup purchased_at 
SELECT COUNT(price), purchased_at
FROM purchases
GROUP BY purchased_at;
